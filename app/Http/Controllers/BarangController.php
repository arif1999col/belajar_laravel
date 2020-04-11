<?php

namespace App\Http\Controllers;
use App\Barang;
use DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title='Barang';
        $barang=Barang::paginate(5);
        return view('admin.barang',compact('title','barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Barang';
        return view('admin.inputbarang',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'requieed'=> 'Kolom: Huruf Harus lengkap',
            'date'=>'Kolom Tanggal Harus Lengkap',
            'numeric'=>'Kolom harus Nomor',
        ];
       $validasi = $request->validate([
        'nama_barang' => 'required',
        'jenis' => 'required',
        'harga' => 'numeric'
       ],$messages);
        Barang::create($validasi);
        return redirect('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title='Input Barang';
        $barang=Barang::find($id);
        return view('admin.inputbarang',compact('title','barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'requieed'=> 'Kolom: Huruf Harus lengkap',
            'date'=>'Kolom Tanggal Harus Lengkap',
            'numeric'=>'Kolom harus Nomor',
        ];
       $validasi = $request->validate([
        'nama_barang' => 'required',
        'jenis' => 'required',
        'harga' => 'numeric'
       ],$messages);
        Barang::where('kode_item',$id)->update($validasi);
        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('kode_item',$id)->delete();
        return redirect('barang')->with('success','Data Terhapus');
    }
}
