@extends('layouts.admin.master')
@section('style')
    @livewireStyles
@endsection
@section('title', 'Category')
@section('breadcrumb-title')
    <p>Category</p>
@endsection
@section('breadcrumb-items')
    <p>/</p>
    <p>Management Menu</p>
    <p>/</p>
    <a href="{{ route('category-list') }}" class="block text-yellow-dark font-semibold">Category</a>
@endsection

@section('content')
    <div class="grid lg:grid-cols-4 md:grid-cols-3 xs:grid-cols-2 grid-cols-1 gap-4">
        <button id="btn-add" type="button"
            class="col-span-1 h-full w-full rounded-xl bg-white flex items-center justify-center relative group overflow-hidden shadow-cmsCard">
            <div class="flex flex-col items-center justify-center">
                <i class="fa fa-plus text-yellow-dark" style="font-size: 30px"></i>
                <p class="font-bold text-xl capitalize text-yellow-dark">Add</p>
            </div>

            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-yellow-dark/20 w-5 h-5 rounded-xl group-hover:w-full group-hover:h-full invisible group-hover:visible transition-all duration-500">
            </div>
        </button>

        <div id="popup-add"
            class="fixed hidden top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto h-screen max-h-full items-center justify-center bg-black/20 shadow-cmsCard">
            <div class="relative w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl text-blue-darker font-bold">Create new category</h3>

                        <form class="space-y-4" action="{{ route('category-add') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-blue-darker">Category</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-blue-darker text-sm rounded-lg outline-yellow-dark block w-full p-2.5"
                                    required>
                            </div>

                            {{-- Type --}}
                            <div>
                                <label for="type_id" class="block mb-2 text-sm font-medium text-blue-darker">Type</label>
                                <div
                                    class="px-4 rounded focus:border-yellow-dark outline-none border border-gray-300 text-yellow-dark">
                                    <select name="type_id" id="type" class="w-full py-2 outline-none capitalize"
                                        required>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Image --}}
                            <div>
                                <label for="images" class="drop-container" id="dropcontainer">
                                    <span class="drop-title">Drop image menu here</span>
                                    or
                                    <input type="file" id="images" name="image" accept="image/*" required>
                                </label>
                            </div>

                            <div class="flex items-center gap-2 mt-2">
                                <button type="submit"
                                    class="flex-1 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add</button>
                                <button id="cancel-add" type="reset"
                                    class="flex-1 text-blue-darker bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($categories as $category)
            <div class="col-span-1 w-full rounded-xl bg-white group overflow-hidden shadow-cmsCard">

                <div class="overflow-hidden w-full h-36">
                    <img src="{{ Storage::url($category->image) }}" alt="{{ $category->slug }}"
                        class="w-full object-cover object-bottom group-hover:scale-125 transition-all duration-500">
                </div>

                <div class="flex items-center justify-center h-20 relative">
                    <div class="text-center">
                        <p class="font-bold text-xl capitalize text-blue-darker">{{ $category->name }}</p>
                        <p class="font-semibold text-lg italic capitalize text-blue-darker">{{ $category->type->name }}</p>
                    </div>

                    <div
                        class="absolute top-full left-0 bg-yellow-dark/50 w-full h-full group-hover:top-0 invisible group-hover:visible transition-all duration-500 flex items-center justify-center gap-2">
                        <div type="button" id="btnEdit-{{ $category->id }}"
                            class="bg-white h-0 w-0 group-hover:h-10 group-hover:w-10 rounded text-yellow-dark hover:bg-blue-600 hover:text-white overflow-hidden flex items-center justify-center transition-all duration-300">
                            <i data-feather="edit"></i>
                        </div>
                        <button type="button" id="btnDelete-{{ $category->id }}"
                            class="bg-white h-0 w-0 group-hover:h-10 group-hover:w-10 rounded text-yellow-dark hover:bg-red-600 hover:text-white overflow-hidden flex items-center justify-center transition-all duration-300">
                            <i data-feather="trash-2"></i>
                        </button>
                    </div>
                </div>

                {{-- Pop Up Edit --}}
                <div id="popup-edit-{{ $category->id }}"
                    class="hidden fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto h-screen max-h-full items-center justify-center bg-black/20">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow">
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl text-blue-darker font-bold">Edit {{ $category->name }} category
                                </h3>

                                <form class="space-y-4" action="{{ route('category-edit', ['id' => $category->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div>
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-blue-darker">Type</label>
                                        <input type="text" name="name" id="name"
                                            class="bg-gray-50 border border-gray-300 text-blue-darker text-sm rounded-lg outline-yellow-dark block w-full p-2.5"
                                            required value="{{ $category->name }}">
                                    </div>

                                    {{-- Type --}}
                                    <div>
                                        <label for="type_id"
                                            class="block mb-2 text-sm font-medium text-blue-darker">Type</label>
                                        <div
                                            class="px-4 rounded focus:border-yellow-dark outline-none border border-gray-300 text-yellow-dark">
                                            <select name="type_id" id="type"
                                                class="w-full py-2 outline-none capitalize" required>
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}"
                                                        {{ $type->id == $category->type_id ? 'selected' : '' }}>
                                                        {{ $type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Image --}}
                                    <div class="">
                                        <label for="images" class="drop-container mt-2" id="dropcontainer">
                                            <span class="drop-title">Drop image menu here</span>
                                            or
                                            <div class="flex sm:flex-row flex-col sm:items-center items-center gap-2">
                                                <input type="file" id="imageInput" name="image" accept="image/*"
                                                    class="h-fit">

                                                <img id="imageDisplay" src="{{ Storage::url($category->image) }}"
                                                    alt="{{ $category->name }}"
                                                    class="h-20 w-20 flex-shrink-0 object-cover object-center rounded-lg">
                                            </div>
                                        </label>
                                    </div>

                                    <div class="flex items-center gap-2 mt-2">
                                        <button type="submit"
                                            class="flex-1 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer">Edit</button>
                                        <button id="cancel-edit" type="reset"
                                            class="flex-1 text-blue-darker bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pop Up Delete --}}
                <div id="popup-delete-{{ $category->id }}"
                    class="hidden fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto h-screen max-h-full items-center justify-center bg-black/20">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow">
                            <form action="{{ route('category-delete', ['id' => $category->id]) }}" method="POST"
                                class="p-6 text-center whitespace-normal">
                                @method('DELETE')
                                @csrf
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500">Are
                                    you sure you want to delete <span class="text-red-500">{{ $category->name }}</span>
                                    category ?</h3>
                                <button type="submit"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Yes, I'm sure
                                </button>
                                <button class="cancelDelete" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No,
                                    cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('script')
    @livewireScripts
@endsection
