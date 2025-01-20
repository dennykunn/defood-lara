<div>
    <div class="flex sm:flex-row flex-col sm:justify-between sm:items-center items-end gap-4">
        <input wire:model.live.debounce.300ms="search" type="text"
            class="sm:w-[300px] w-full bg-yellow-dark/10 border border-yellow-dark text-yellow-dark text-sm rounded-lg outline-yellow-dark block px-4 py-2 placeholder-yellow-dark"
            placeholder="Search...">

        <div class="flex items-center gap-2 text-sm">
            <label for="perPage">Per Page</label>

            <select wire:model.live='perPage' name="perPage" id="perPage"
                class="bg-yellow-dark/10 border-yellow-dark text-yellow-dark text-sm rounded-lg outline-yellow-dark block px-4 py-2">
                <option value="5">5</option>
                <option value="7">7</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>

    <div class="max-w-full overflow-x-auto mt-8 pb-4">
        <table class="display w-full block">
            <thead>
                <tr>
                    <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Image
                    </th>

                    @include('livewire.includes.table-sortable-th', [
                        'name' => 'name',
                        'displayName' => 'Menu Name',
                    ])

                    @include('livewire.includes.table-sortable-th', [
                        'name' => 'price',
                        'displayName' => 'price',
                    ])

                    @include('livewire.includes.table-sortable-th', [
                        'name' => 'discount',
                        'displayName' => 'discount',
                    ])

                    @include('livewire.includes.table-sortable-th', [
                        'name' => 'type_id',
                        'displayName' => 'type',
                    ])

                    @include('livewire.includes.table-sortable-th', [
                        'name' => 'category_id',
                        'displayName' => 'category',
                    ])

                    @include('livewire.includes.table-sortable-th', [
                        'name' => 'cuisine_id',
                        'displayName' => 'cuisine',
                    ])

                    <th scope="col" class="pl-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($menus as $menu)
                    <tr wire:key="{{ $menu->id }}">
                        <td
                            class="h-20 w-20 mr-6 my-2 whitespace-nowrap text-left text-sm font-medium text-gray-800 flex">
                            <img src="{{ Storage::url($menu->image) }}" alt="{{ $menu->name }}"
                                class="h-20 w-20 flex-shrink-0 object-cover object-center">
                        </td>
                        <td class="px-6 whitespace-nowrap capitalize text-left text-sm text-gray-800 ">
                            {{ $menu->name }}
                        </td>
                        <td class="px-6 whitespace-nowrap text-left text-sm text-gray-800 ">
                            Rp. {{ $menu->price }}
                        </td>
                        <td class="px-6 whitespace-nowrap text-left text-sm text-gray-800 ">
                            {{ $menu->discount == 0 ? 'None' : $menu->discount }}
                        </td>
                        <td class="px-6 whitespace-nowrap capitalize text-left text-sm text-gray-800 ">
                            {{ $menu->type->name }}
                        </td>
                        <td class="px-6 whitespace-nowrap capitalize text-left text-sm text-gray-800 ">
                            {{ $menu->category->name }}
                        </td>
                        <td class="px-6 whitespace-nowrap capitalize text-left text-sm text-gray-800 ">
                            {{ $menu->cuisine->name }}
                        </td>
                        <td class="pl-6 whitespace-nowrap text-left text-sm font-medium">
                            <a href="{{ route('edit-menu', ['id' => $menu->id]) }}"
                                class="inline-block mr-2 text-blue-500 hover:text-blue-700 transition duration-300">
                                Edit
                            </a>

                            <button id="btnDelete-{{ $menu->id }}"
                                class="inline-block mr-2 text-red-500 hover:text-red-700 transition duration-300">
                                Delete
                            </button>

                            <div id="popup-delete-{{ $menu->id }}"
                                class="hidden fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto h-screen max-h-full items-center justify-center bg-black/20">
                                <div class="relative w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow">
                                        <div class="p-6 text-center whitespace-normal">
                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500">Are
                                                you sure you want to delete <span
                                                    class="text-red-500">{{ $menu->name }}</span> menu ?</h3>
                                            <button wire:click="delete({{ $menu->id }})" type="button"
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $menus->links('livewire.includes.custom-pagination') }}
</div>
