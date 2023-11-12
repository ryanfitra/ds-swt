<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $data = Supplier::all();
        return view('db.supplier.index', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'nickname' => 'required',
            'no_wa' => 'required',
            'bank' => 'required',
            'no_rek' => 'required',
            'nama_rek' => 'required',
        ]);

        Supplier::create($data);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, Supplier $supplier)
    {
        $data = $request->validate([
            'nama' => 'required',
            'nickname' => 'required',
            'no_wa' => 'required',
            'bank' => 'required',
            'no_rek' => 'required',
            'nama_rek' => 'required',
        ]);

        $supplier->update($data);

        return redirect()->back()->with('success', 'Data berhasil diubah!');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
