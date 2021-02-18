<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Product $product)
    {
        $client = session()->get('client');
        $demo = 'get_wishlist';
        if ($client) {
            $wishlist = Wishlist::get_wishlists();

            return view('client.component.pages.wishlist', compact('wishlist'));
        } else {
            return view('client.content.login', compact('demo'));
        }
    }

    public function add($id)
    {
        $client = session()->get('client');
        // dd($client);
        $demo = 'add_wishlist';
        if ($client) {
            $wishlist = Wishlist::where('id_pro', $id)->get();
            // dd(count($wishlist));
            wishlist::create([
                'id_user' => $client->id,
                'id_pro' => $id
            ]);
            return back();
        } else {
            return view('client.content.login', compact('demo'));
        }
    }

    public function remove($id)
    {
        $wishlist=Wishlist::find($id)->delete();
        // dd($wishlist);
        return redirect()->back()->with('success', 'Xóa sản phẩm thành công');
    }
}
