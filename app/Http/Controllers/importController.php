<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Card;
use App\Models\Category;
use App\Models\itemvt;
use App\Models\Publisher;
use App\Models\vatTu;
use App\Tables\itemvts;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class importController extends Controller
{

    public function index()
    {
        return view('import.index', [
            'item' => itemvts::class,
        ]);
    }

    public function create()
    {
        $vatTus = vatTu::get();

        $vatTu = $vatTus->map(function ($vatTu, $key) {

            $vatTu->name = $vatTu->idCode . ' - ' . $vatTu->name;

            return $vatTu;
        });


        return view('import.create', [
            'vatTu' => $vatTu,
        ]);

       

    }


    public function store(Request $request)
    {
        
        
        $data = $request->validate([
            'time' => ['required'],
            'vat_tu_id' => ['required'],
            'amount' => ['required'],

        ]);

        
        $order = itemvt::create($data);


        Toast::title('Thêm thành công!');
        return redirect()->route('import');
    }

}
