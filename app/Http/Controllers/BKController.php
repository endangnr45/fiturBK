<?php

namespace App\Http\Controllers;
use App\Models\BK;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class BKController extends Controller
{
    public function index()
    {
        return view('bk.index',[
            'bk'=> BK::all(),
            "title" => "Bahan Kajian",
        ]);
    }
    public function create()
    {
        return view('bk.create',[
            "title" => "Add BK",
        ]);
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'referensi' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        BK::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('/bk')->with('success','BK Berhasil Ditambahkan');
    }
    public function show(BK $bk)
    {
        return view('bk.show', ["bk"=>$bk]);
    }
    public function edit(BK $bk)
    {
        return view('bk.edit',[
            'bk'=> $bk,
            "title" => "Edit Bahan Kajian",
        ]);
    }
    public function update(Request $request, BK $bk)
    {
        
        $validatedData = $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'referensi' => 'required',
        ]);;
        //fungsi eloquent untuk menambah data
        BK::where('id', $bk-> id)->update($validatedData);
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('/bk')->with('success','BK Berhasil Diubah');
    }
    public function destroy($id)
    {
        BK::destroy($id);

        return redirect('/bk')->with('success','BK Berhasil Dihapus');
    }
}
