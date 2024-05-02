<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\vatTu;
use App\Tables\vatTus;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class vatTuController extends Controller
{
    public function index()
    {
        return view('vatTu.index', [
            'vatTu' => vatTus::class,
        ]);
    }

    public function create()
    {
        return view('vatTu.create', []);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'idCode' => ['required', 'string'],
            'name' => ['required', 'string'],
            'unit' => ['required', 'string'],

        ]);

        vatTu::create($data);

        Toast::title('Thêm thành công!');
        return redirect()->route('vatTu');
    }

    public function edit($vatTu)
    {
        $vatTu = vatTu::findOrFail($vatTu);
        return view('vatTu.edit', [
            'vatTu' => $vatTu,
        ]);
    }

    public function update(Request $request, vatTu $vatTu)
    {
        $data = $request->validate([
            'idCode' => ['required', 'string'],
            'name' => ['required', 'string'],
            'unit' => ['required', 'string'],
        ]);

        $vatTu->update($data);
        Toast::title('Chỉnh sửa thành công');
        return redirect()->route('vatTu');
    }

    public function destroy(vatTu $vatTu )
    {
        $vatTu->delete();
        Toast::title('Xóa thành công');
        return redirect()->route('vatTu');
    }

}
