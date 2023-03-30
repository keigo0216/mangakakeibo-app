<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;
use Illuminate\Support\Facades\Auth;

class MangaController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $items = $user->mangas;
        $total_price = 0;
        foreach( $items as $item) {
            $one_total_price = $item->getTotalPrice();
            $total_price = $total_price + $one_total_price;
        }

        $param = ['items' => $items, 'total_price'=>$total_price, 'user' => $user];
        return view('manga.manga_list', $param);
    }

    public function add(Request $request)
    {
        $user = Auth::user();
        return view('manga.manga_add', ['user' => $user]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Manga::$rules);
        $manga = new Manga;
        $form = $request->all();
        unset($form['_token']);
        $manga->user_id = $request->user_id;
        $manga->name = $request->name;
        $manga->price = $request->price;
        $manga->purchase_number = $request->purchase_number;
        $manga->save();
        return redirect('/manga/index');

    }
}
