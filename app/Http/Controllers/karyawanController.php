<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = karyawan::orderBy('id', 'desc')->get();
        return view('layouts.karyawan.index')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.karyawan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('jabatan', $request->jabatan);
        Session::flash('bagian', $request->bagian);
        Session::flash('gol', $request->gol);
        Session::flash('agama', $request->agama);
        Session::flash('pendidikan', $request->pendidikan);
        Session::flash('no_ktp', $request->no_ktp);

        $request->validate([
            'nama'=>'required',
            'jabatan'=>'required',
            'bagian'=>'required',
            'gol'=>'required',
            'agama'=>'required',
            'tgl_lahir'=>'required',
            'tgl_masuk'=>'required',
            'tgl_pensiun'=>'required',
            'pendidikan'=>'required',
            'jml_anak'=>'required|numeric',
            'no_ktp'=>'required',
            'foto_ktp'=>'required',
            'foto_kk'=>'required',
        ],[
            'nama.required' => 'Nama Wajib Diisi',
            'jabatan.required' => 'Jabatan Wajib Diisi',
            'bagian.required' => 'Bagian Wajib Diisi',
            'gol.required' => 'Golongan Wajib Diisi',
            'agama.required' => 'Agama Wajib Diisi',
            'tgl_lahir.required' => 'Tanggal Lahir Wajib Diisi',
            'tgl_masuk.required' => 'Tanggal Masuk Wajib Diisi',
            'tgl_pensiun.required' => 'Tanggal Pensiun Wajib Diisi',
            'pendidikan.required' => 'Pendidikan Wajib Diisi',
            'jml_anak.required' => 'Wajib Diisi',
            'jml_anak.numeric' => 'Tanggungan Harus Berupa Angka',
            'no_ktp.required' => 'Nomor KTP Wajib diisi Wajib Diisi',
            'foto_ktp.required' => 'Foto KTP Wajib diisi Wajib Diisi',
            'foto_kk.required' => 'Foto KK Wajib diisi Wajib Diisi',
        ]);
        $foto_nama1 = null;
        $foto_ktp = $request->file('foto_ktp');
        if($foto_ktp){
            $foto_ekstensi1 = $foto_ktp->extension();
            $foto_nama1 = date('ymdhis') . "." . $foto_ekstensi1;
            $foto_ktp->move(public_path('foto'),$foto_nama1);
        }

        $foto_nama2 = null;
        $foto_kk = $request->file('foto_kk');
        if($foto_kk){
            $foto_ekstensi2 = $foto_kk->extension();
            $foto_nama2 = date('ymdhis') . "." . $foto_ekstensi2;
            $foto_kk->move(public_path('foto_kk'),$foto_nama2);
        }

        $foto_nama3 = null;
        $foto_ijazah = $request->file('foto_ijazah');
        if($foto_ijazah){
            $foto_ekstensi3 = $foto_ijazah->extension();
            $foto_nama3 = date('ymdhis') . "." . $foto_ekstensi3;
            $foto_ijazah->move(public_path('foto_ijazah'),$foto_nama3);
        }

        $foto_nama4 = null;
        $foto_akte = $request->file('foto_akte');
        if($foto_akte){
        $foto_ekstensi4 = $foto_akte->extension();
        $foto_nama4 = date('ymdhis') . "." . $foto_ekstensi4;
        $foto_akte->move(public_path('foto_akte'),$foto_nama4);
        }
        $data = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'bagian' => $request->bagian,
            'gol' => $request->gol,
            'agama' => $request-> agama,
            'tgl_lahir' => $request-> tgl_lahir,
            'tgl_masuk' => $request-> tgl_masuk,
            'tgl_pensiun' => $request-> tgl_pensiun,
            'pendidikan' => $request-> pendidikan,
            'no_ktp' => $request-> no_ktp,
            'nama_istri' => $request-> nama_istri,
            'jml_anak' => $request-> jml_anak,
            'cuti_tahunan' => $request -> cuti_tahunan,
            'cuti_panjang' => $request -> cuti_panjang,
            'pelatihan' => $request -> pelatihan,
            'penghargaan' => $request -> penghargaan,
            'foto_ktp' => $foto_nama1,
            'foto_kk' => $foto_nama2,
            'foto_ijazah' => $foto_nama3,
            'foto_akte' => $foto_nama4,
        ];
        karyawan::create($data);
        return redirect('/')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = karyawan::where('id', $id)->first();
        return view('layouts.karyawan.all')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = karyawan::where('id', $id)->first();
        return view('layouts.karyawan.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'bagian' => $request->bagian,
            'gol' => $request->gol,
            'agama' => $request->agama,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_pensiun' => $request->tgl_pensiun,
            'pendidikan' => $request->pendidikan,
            'no_ktp' => $request->no_ktp,
            'nama_istri' => $request->nama_istri,
            'jml_anak' => $request->jml_anak,
            'cuti_tahunan' => $request -> cuti_tahunan,
            'cuti_panjang' => $request -> cuti_panjang,
            'pelatihan' => $request -> pelatihan,
            'penghargaan' => $request -> penghargaan,
        ];

        // update foto ktp
        if ($request->hasFile('foto_ktp')) {
            $foto_file = $request->file('foto_ktp');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);
            $data_foto = karyawan::where('id', $id)->first();
            File::delete(public_path('foto') . '/' . $data_foto->foto_ktp);
            $data['foto_ktp'] = $foto_nama;
        }
        // update foto kk
        if ($request->hasFile('foto_kk')) {
            $foto_file = $request->file('foto_kk');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto_kk'), $foto_nama);

            $data_foto = karyawan::where('id', $id)->first();
            File::delete(public_path('foto_kk') . '/' . $data_foto->foto_kk);

            $data['foto_kk'] = $foto_nama;
        }

        // update foto ijazah
        if ($request->hasFile('foto_ijazah')) {
            $foto_file = $request->file('foto_ijazah');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto_ijazah'), $foto_nama);

            $data_foto = karyawan::where('id', $id)->first();
            File::delete(public_path('foto_ijazah') . '/' . $data_foto->foto_ijazah);

            $data['foto_ijazah'] = $foto_nama;
        }
        if ($request->hasFile('foto_akte')){
            $foto_file = $request->file('foto_akte');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto_akte'),$foto_nama);

            $data_foto = karyawan::where('id', $id)->first();
            File::delete(public_path('foto_akte').'/'. $data_foto->foto_akte);

            $data['foto_akte'] = $foto_nama;
        };

        karyawan::where('id', $id)->update($data);
        return redirect('/')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = karyawan::where('id', $id)->first();
        File::delete(public_path('foto').'/'. $data->foto_ktp);
        File::delete(public_path('foto_akte').'/'. $data->foto_akte);
        File::delete(public_path('foto_kk').'/'. $data->foto_kk);
        File::delete(public_path('foto_ijazah').'/'. $data->foto_ijazah);
        karyawan::where('id', $id)->delete();
        return redirect('/')->with('success', 'Data berhasil dihapus');
    }
}
