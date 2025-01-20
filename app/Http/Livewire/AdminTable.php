<?php

namespace App\Http\Livewire;

use App\Models\Admin;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTable extends Component
{
    use WithPagination;
    public $search = '';
    public $email, $name, $password;

    public function render()
    {

        $adminsQuery = Admin::query();

        if ($this->search != '') {
            $adminsQuery->where(function ($query) {
                $query->where('name', 'like', "%{$this->search}%")
                    ->orWhere('email', 'like', "%{$this->search}%");
            });
        }

        $admins = $adminsQuery->get();

        return view('livewire.admin-table', compact('admins'));
    }

    public function delete(Admin $admin)
    {
        $admin->delete();
    }
}
