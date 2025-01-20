<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerTable extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 5;
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';

    public $name, $email;

    public function render()
    {

        $usersQuery = User::query();

        if ($this->search != '') {
            $usersQuery->where(function ($query) {
                $query->where('name', 'like', "%{$this->search}%")
                    ->orWhere('email', 'like', "%{$this->search}%");
            });
        }

        if (!$this->name || !$this->email) {
            $usersQuery->orderBy($this->sortBy, $this->sortDir);
        }

        $users = $usersQuery->paginate($this->perPage);

        return view('livewire.customer-table', compact('users'));
    }

    public function setSortBy($sortByField)
    {
        if ($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir == "ASC") ? 'DESC' : 'ASC';
            return;
        }

        $this->sortBy = $sortByField;
        $this->sortDir = "DESC";
    }

    public function delete(User $user)
    {
        $user->delete();
    }
}
