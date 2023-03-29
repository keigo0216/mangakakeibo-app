<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class MangaController extends Controller
{
    public function index(Request $request)
    {
        $items = Manga::all();
        $total_price = 0;
        foreach( $items as $item) {
            $one_total_price = $item->getTotalPrice();
            $total_price = $total_price + $one_total_price;
        }
        return view('manga.manga_list', ['items' => $items, 'total_price'=>$total_price]);
    }

    public function add(Request $request)
    {
        return view('manga.manga_add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Manga::$rules);
        $manga = new Manga;
        $form = $request->all();
        unset($form['_token']);
        $manga->name = $request->name;
        $manga->price = $request->price;
        $manga->purchase_number = $request->purchase_number;
        $manga->save();
        return redirect('/manga/index');

    }
}
