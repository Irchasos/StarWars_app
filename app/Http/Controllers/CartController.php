<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Support\Facades\Auth;
use Jackiedo\Cart\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function cart()
    {
        $cartItems = Cart::getContent();
        $cartTotal = Cart::getTotal();
        $cartCount = Cart::getTotalQuantity();

        return view('store.cart', compact('cartItems', 'cartTotal', 'cartCount'));
    }

    public function index()
    {
        $user = Auth::user();
        $products = Equipment::paginate(12);
        return view('store.index')->with(compact('user'))->with(compact('products'));

    }


    // ...

    public function addToCart($productId)
    {
        $equipment = Equipment::find($productId);

        (new \Jackiedo\Cart\Cart())->addItem(
            [
            'id' => $equipment->id,
            'name' => $equipment->name,
            'title' => $equipment->name,
            'price' => $equipment->price,
            'quantity' => 1,
            'attributes' => [], // Możesz dodać dodatkowe atrybuty, jeśli są potrzebne
            ]
        );
        // Dodatkowy kod, jeśli potrzebujesz przekierowania lub innych operacji

        return redirect()->route('store.index');
    }

}
