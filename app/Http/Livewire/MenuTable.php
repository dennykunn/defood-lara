<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class MenuTable extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';

    public $name, $discount, $price, $type, $category, $cuisine;

    public function render()
    {
        return view('livewire.menu-table', [
            'menus' => Menu::search($this->search)
                    ->orderBy($this->sortBy, $this->sortDir)
                    ->paginate($this->perPage),
        ]);
    }

    public function delete(Menu $menu) {
        Storage::delete($menu->image);

        $menu->delete();
    }
    public function setSortBy($sortByField) {
        if($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir == "ASC") ? 'DESC' : 'ASC';
            return;
        }

        $this->sortBy = $sortByField;
        $this->sortDir = "DESC";
    }
}
