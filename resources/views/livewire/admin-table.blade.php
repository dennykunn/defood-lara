<div>
    <div class="flex sm:flex-row flex-col sm:justify-between sm:items-center items-end gap-4">
        <input wire:model.live.debounce.300ms="search" type="text"
            class="sm:w-[300px] w-full bg-yellow-dark/10 border border-yellow-dark text-yellow-dark text-sm rounded-lg outline-yellow-dark block px-4 py-2 placeholder-yellow-dark"
            placeholder="Search...">

        <button id="btn-add" class="px-4 py-2 rounded-md bg-green-500 text-white font-semibold">Add Admin</button>

        <div id="popup-add"
            class="fixed hidden top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto h-screen max-h-full items-center justify-center bg-black/20 shadow-cmsCard">
            <div class="relative w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl text-blue-darker font-bold">Create new Admin</h3>

                        <form class="space-y-4" action="{{ route('management-users.store') }}" method="POST">
                            @csrf
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-blue-darker">Name</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-blue-darker text-sm rounded-lg outline-yellow-dark block w-full p-2.5"
                                    required>
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-blue-darker">Email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-blue-darker text-sm rounded-lg outline-yellow-dark block w-full p-2.5"
                                    required>
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-blue-darker">Password</label>
                                <input type="password" name="password" id="password"
                                    class="bg-gray-50 border border-gray-300 text-blue-darker text-sm rounded-lg outline-yellow-dark block w-full p-2.5"
                                    required>
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
    </div>

    <div class="overflow-auto mt-6">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-4 text-xs font-medium text-gray-500 uppercase">No</th>
                    <th scope="col" class="px-6 py-4 text-xs font-medium text-gray-500 uppercase">Name</th>
                    <th scope="col" class="px-6 py-4 text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th scope="col" class="px-6 py-4 text-xs font-medium text-gray-500 uppercase">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($admins as $no => $admin)
                    <tr>
                        <td class="px-6 py-4">
                            {{ $no + 1 }}
                        </td>
                        <td class="px-6 py-4">{{ $admin->name }}</td>
                        <td class="px-6 py-4">
                            {{ $admin->email }}
                        </td>
                        @if (session('admin_mail') != $admin->email)
                            <td class="px-6 py-4">
                                <button id="btnEdit-{{ $admin->id }}"
                                    class="inline-block mr-2 text-blue-500 hover:text-blue-700 transition duration-300">
                                    Edit
                                </button>

                                <div id="popup-edit-{{ $admin->id }}"
                                    class="hidden fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto h-screen max-h-full items-center justify-center bg-black/20">
                                    <div class="relative w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow">
                                            <div class="px-6 py-6 lg:px-8">
                                                <h3 class="mb-4 text-xl text-blue-darker font-bold">Edit
                                                    {{ $admin->name }} account</h3>

                                                <form class="space-y-4" action="{{ route('management-users.store') }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="id" value="{{ $admin->id }}">
                                                    <div>
                                                        <label for="name"
                                                            class="block mb-2 text-sm font-medium text-blue-darker">Name</label>
                                                        <input type="text" name="name" id="name"
                                                            class="bg-gray-50 border border-gray-300 text-blue-darker text-sm rounded-lg outline-yellow-dark block w-full p-2.5"
                                                            required value="{{ $admin->name }}">
                                                    </div>
                                                    <div>
                                                        <label for="email"
                                                            class="block mb-2 text-sm font-medium text-blue-darker">Email</label>
                                                        <input type="email" name="email" id="email"
                                                            class="bg-gray-50 border border-gray-300 text-blue-darker text-sm rounded-lg outline-yellow-dark block w-full p-2.5"
                                                            required value="{{ $admin->email }}">
                                                    </div>
                                                    <div>
                                                        <label for="password"
                                                            class="block mb-2 text-sm font-medium text-blue-darker">Password</label>
                                                        <input type="password" name="password" id="password"
                                                            class="bg-gray-50 border border-gray-300 text-blue-darker text-sm rounded-lg outline-yellow-dark block w-full p-2.5"
                                                            required value="{{ $admin->password }}">
                                                    </div>

                                                    <div class="flex items-center gap-2 mt-2">
                                                        <button type="submit"
                                                            class="flex-1 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit</button>
                                                        <button id="cancel-edit" type="reset"
                                                            class="flex-1 text-blue-darker bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button id="btnDelete-{{ $admin->id }}"
                                    class="inline-block mr-2 text-red-500 hover:text-red-700 transition duration-300">
                                    Delete
                                </button>

                                <div id="popup-delete-{{ $admin->id }}"
                                    class="hidden fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto h-screen max-h-full items-center justify-center bg-black/20">
                                    <div class="relative w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow">
                                            <div class="p-6 text-center whitespace-normal">
                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500">Are
                                                    you sure you want to delete <span
                                                        class="text-red-500">{{ $admin->name }}</span> admin ?</h3>
                                                <button wire:click="delete({{ $admin->id }})" type="button"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                    Yes, I'm sure
                                                </button>
                                                <button class="cancelDelete" type="button"
                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No,
                                                    cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
