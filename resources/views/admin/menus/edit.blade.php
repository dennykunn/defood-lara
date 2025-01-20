@extends('layouts.admin.master')
@section('title', 'Edit Menu')
@section('breadcrumb-title')
    <p>Edit Menu</p>
@endsection
@section('breadcrumb-items')
    <p>/</p>
    <p>Menu</p>
    <p>/</p>
    <a href="{{ route('edit-menu', ['id' => $menu->id]) }}" class="block text-yellow-dark font-semibold">Edit</a>
@endsection

@section('content')
    @if ($errors->any())
        <div id="errorMessage" class="relative bg-red-500 w-full mb-6 text-white rounded-xl p-4">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul class="list-disc list-inside -mt-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            <button id="closeMessage" class="text-white absolute top-4 right-4">
                <i class="icon-close"></i>
            </button>
        </div>
    @endif


    <form action="{{ route('update-menu', ['id' => $menu->id]) }}" method="POST"
        class="p-6 rounded-xl w-full bg-white shadow-cmsCard" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
            {{-- Name --}}
            <div class="col-span-1">
                <label for="name" class="text-blue-darker">Menu Name</label>
                <input type="text" name="name" id="name"
                    class="w-full px-4 py-2 mt-2 rounded focus:border-yellow-dark outline-none border border-gray-300 text-yellow-dark"
                    required value="{{ $menu->name }}">
            </div>

            {{-- Type --}}
            <div class="col-span-1">
                <label for="type" class="text-blue-darker">Type</label>
                <div
                    class="mt-2 px-4 rounded focus:border-yellow-dark outline-none border border-gray-300 text-yellow-dark">
                    <select name="type_id" id="type" class="w-full py-2 outline-none capitalize" required>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ $type->id == $menu->type_id ? 'selected' : '' }}>
                                {{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Category --}}
            <div class="col-span-1">
                <label for="category" class="text-blue-darker">Category</label>
                <div
                    class="mt-2 px-4 rounded focus:border-yellow-dark outline-none border border-gray-300 text-yellow-dark">
                    <select name="category_id" id="category" class="w-full py-2 outline-none capitalize" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $menu->category_id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Cuisine --}}
            <div class="col-span-1">
                <label for="cuisine" class="text-blue-darker">Cuisine</label>
                <div
                    class="mt-2 px-4 rounded focus:border-yellow-dark outline-none border border-gray-300 text-yellow-dark">
                    <select name="cuisine_id" id="cuisine" class="w-full py-2 outline-none capitalize" required>
                        @foreach ($cuisines as $cuisine)
                            <option value="{{ $cuisine->id }}" {{ $cuisine->id == $menu->cuisine_id ? 'selected' : '' }}>
                                {{ $cuisine->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Price --}}
            <div class="col-span-1">
                <label for="price" class="text-blue-darker">Price</label>
                <div class="flex items-center mt-2 rounded overflow-hidden">
                    <div
                        class="flex-shrink-0 h-[42px] w-10 bg-gray-300 text-blue-darker flex items-center justify-center font-bold">
                        Rp
                    </div>
                    <input type="number" name="price" id="price"
                        class="w-full px-4 py-2 focus:border-yellow-dark outline-none border border-gray-300 flex-1 text-yellow-dark"
                        required value="{{ $menu->price }}">
                </div>
            </div>

            {{-- Discount --}}
            <div class="col-span-1">
                <label for="discount" class="text-blue-darker">Discount</label>
                <div class="flex items-center mt-2 rounded overflow-hidden">
                    <input type="number" name="discount" id="discount"
                        class="w-full px-4 py-2 focus:border-yellow-dark outline-none border border-gray-300 flex-1 text-yellow-dark"
                        placeholder="0-100" value="{{ $menu->discount }}">
                    <div
                        class="flex-shrink-0 h-[42px] w-10 bg-gray-300 text-blue-darker flex items-center justify-center text-lg font-bold">
                        %
                    </div>
                </div>
            </div>

            {{-- Image --}}
            <div class="sm:col-span-2 col-span-1">
                <label for="images" class="drop-container mt-2" id="dropcontainer">
                    <span class="drop-title">Drop image menu here</span>
                    or

                    <div class="flex sm:flex-row flex-col sm:items-center items-center gap-2">
                        <input type="file" id="imageInput" name="image" accept="image/*" class="h-fit">

                        <img id="imageDisplay" src="{{ Storage::url($menu->image) }}" alt="{{ $menu->name }}"
                            class="h-20 w-20 flex-shrink-0 object-cover object-center rounded-lg">
                    </div>
                </label>
            </div>
        </div>

        <div class="flex justify-end items-center gap-2 mt-6">
            <a href="{{ route('list-menu') }}"
                class="bg-red-600 h-10 w-24 flex items-center justify-center rounded text-white font-semibold">Cancel</a>
            <button type="submit"
                class="bg-blue-600 h-10 w-24 flex items-center justify-center rounded text-white font-semibold">Update</button>
        </div>
    </form>
@endsection

@section('script')
    <script>
        const errorMessage = document.getElementById("errorMessage")
        const successMessage = document.getElementById("successMessage")
        const closeMessage = document.getElementById("closeMessage")

        closeMessage.addEventListener("click", () => {
            errorMessage.classList.add("hidden");
            successMessage.classList.add("hidden");
        })

        setTimeout(() => {
            errorMessage.classList.add("hidden");
        }, 5000);
        setTimeout(() => {
            successMessage.classList.add("hidden");
        }, 5000);

        const dropContainer = document.getElementById("dropcontainer")
        const fileInput = document.getElementById("images")

        dropContainer.addEventListener("dragover", (e) => {
            // prevent default to allow drop
            e.preventDefault()
        }, false)

        dropContainer.addEventListener("dragenter", () => {
            dropContainer.classList.add("drag-active")
        })

        dropContainer.addEventListener("dragleave", () => {
            dropContainer.classList.remove("drag-active")
        })

        dropContainer.addEventListener("drop", (e) => {
            e.preventDefault()
            dropContainer.classList.remove("drag-active")
            fileInput.files = e.dataTransfer.files
        })
    </script>
@endsection
