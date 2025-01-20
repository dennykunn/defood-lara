<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\CategoryMenu;
use App\Models\Cuisine;
use App\Models\Menu;
use App\Models\TypeMenu;
use App\Models\Wishlist;
use Livewire\Component;
use Livewire\WithPagination;

class UserMenuTable extends Component
{
    use WithPagination;
    public $search = '';
    public $setTypeId = 0;
    public $setCategoryId = 0;
    public $setCuisineId = 0;
    public $perPage = 6;
    public $prizeMin = 0;
    public $prizeMax = 0;

    public $statusCart = false;
    public $totalPrice;

    public function render()
    {
        $menusQuery = Menu::query();

        if ($this->search != '') {
            $menusQuery->where(function ($query) {
                $query->where('name', 'like', "%{$this->search}%")
                    ->orWhere('price', 'like', "%{$this->search}%")
                    ->orWhere('discount', 'like', "%{$this->search}%");
            });
        }

        if ($this->setTypeId > 0) {
            $menusQuery->where('type_id', $this->setTypeId);
        }

        if ($this->setCategoryId > 0) {
            $menusQuery->where('category_id', $this->setCategoryId);
        }
        if ($this->setCuisineId > 0) {
            $menusQuery->where('cuisine_id', $this->setCuisineId);
        }

        if ($this->prizeMin > 0) {
            $menusQuery->where('price', '>=', $this->prizeMin);
        }

        if ($this->prizeMax > 0) {
            $menusQuery->where('price', '<=', $this->prizeMax);
        }

        $menus = $menusQuery->paginate($this->perPage);

        $menusCount = Menu::all()->count();
        $types = TypeMenu::all();
        $cuisines = Cuisine::all();
        $wishlists = Wishlist::where('user_id', session('user_id'))->get();
        $carts = Cart::where('user_id', session('user_id'))->where('status', 0)->get();

        $foodsCategory = CategoryMenu::where('type_id', 1)->get();
        $drinksCategory = CategoryMenu::where('type_id', 2)->get();
        $dessertsCategory = CategoryMenu::where('type_id', 3)->get();

        return view('livewire.user-menu-table', compact('menus', 'menusCount', 'foodsCategory', 'drinksCategory', 'dessertsCategory', 'types', 'cuisines', 'wishlists', 'carts'));
    }

    public function setTypeBy($id)
    {
        $this->setTypeId = $id;
    }
    public function setCategoryBy($id)
    {
        $this->setCategoryId = $id;
    }
    public function setCuisineBy($id)
    {
        $this->setCuisineId = $id;
    }

    public function addToWishlist($menu_id, $user_id)
    {
        $wistlist = new Wishlist();
        $wistlist->quantity = 1;
        $wistlist->menu_id = $menu_id;
        $wistlist->user_id = $user_id;
        $wistlist->save();
    }
    public function decreaseWishlist(Wishlist $wishlist)
    {
        if ($wishlist->quantity > 1) {
            $wishlist->quantity -= 1;
            $wishlist->save();
        }
    }
    public function increaseWishlist(Wishlist $wishlist)
    {
        $wishlist->quantity += 1;
        $wishlist->save();
    }

    public function openCartSide()
    {
        $this->statusCart = true;
    }

    public function closeCartSide()
    {
        $this->statusCart = false;
    }
    public function removeFromWishlist(Wishlist $wishlist)
    {
        $wishlist->delete();
    }

    public function addToCart($menu_id, $user_id)
    {
        $existingCart = Cart::where('menu_id', $menu_id)
            ->where('user_id', $user_id)
            ->first();

        if ($existingCart) {
            $existingCart->quantity += 1;
            $existingCart->save();
        } else {
            $cart = new Cart();
            $cart->menu_id = $menu_id;
            $cart->user_id = $user_id;
            $cart->quantity = 1;
            $cart->status = false;
            $cart->save();
        }

        $this->statusCart = true;
    }

    public function removeFromCart(Cart $cart)
    {
        $cart->delete();
    }

    public function decreaseCart(Cart $cart)
    {
        if ($cart->quantity > 1) {
            $cart->quantity -= 1;
            $cart->save();
        }
    }
    public function increaseCart(Cart $cart)
    {
        $cart->quantity += 1;
        $cart->save();
    }
}
