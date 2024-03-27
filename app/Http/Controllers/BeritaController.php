<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
class BeritaController extends Controller
{
    public function index()
    {
        $data = [
            'dataBerita' => Berita::all(),
            'title' => 'Data Berita'
        ];
        return View('berita.berita', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Tambah Berita'
        ];
        return View('berita.tambah', $data);
    }
    public function store(Request $request)
    {
        try {
            $berita = new Berita();
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->save();

            $request->session()->flash('msg', "Data Berita dengan judul `$berita->judul` berhasil disimpan");
            return redirect('/olah-berita');
        } catch (\Throwable $th) {
            echo $th;
        }
    }
    public function edit($id)
    {
        $berita = Berita::find($id);
        $data = [
            'id' => $berita->id,
            'judul' => $berita->judul,
            'isi' => $berita->isi,
            'title' => 'Ubah Berita'
        ];
        return View('berita.ubah', $data);
    }
    public function update(Request $request, $id)
    {
        try {
            $berita = Berita::find($id);
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->save();

            $request->session()->flash('msg', "Data Berita dengan judul `$berita->judul` berhasil diupdate");
            return redirect('/olah-berita');
        } catch (\Throwable $th) {
            echo $th;
        }
    }
    public function destroy($id)
    {
        $mhs = Berita::find($id)->delete();
        return redirect('/olah-berita');
    }


}
