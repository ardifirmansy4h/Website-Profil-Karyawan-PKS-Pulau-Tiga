<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


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
            'no_regis'=>'required',
            'jabatan'=>'required',
            'jabatan_saat'=>'required',
            'bagian'=>'required',
            'gol'=>'required',
            'agama'=>'required',
            'status'=>'required',
            'tgl_lahir'=>'required',
            'tgl_masuk'=>'required',
            'tgl_pensiun'=>'required',
            'pendidikan'=>'required',
            'jml_anak'=>'required|numeric',
            'no_ktp'=>'required',
            'foto_ktp'=>'required|file|mimes:jpg,jpeg,png',
            'foto_kk'=>'required|file|mimes:jpg,jpeg,png',
            'foto_ijazah' => 'file|mimes:jpg,jpeg,png',
            'foto_akte' => 'file|mimes:jpg,jpeg,png',
            'foto_pelatihan' => 'file|mimes:pdf',
            'foto_penghargaan' => 'file|mimes:pdf',
            'foto_peringatan' => 'file|mimes:pdf',
        ],[
            'nama.required' => 'Nama Wajib Diisi',
            'no_regis.required' => 'No Regis Wajib Diisi',
            'status.required' => 'Status Wajib Diisi',
            'jabatan_saat.required' => 'Jabatan Saat Ini Wajib Diisi',
            'jabatan.required' => 'Posisi Terakhir Wajib Diisi',
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
            'foto_ktp.mimes' => 'Foto KTP harus dalam format JPG, JPEG, atau PNG',
            'foto_kk.required' => 'Foto KK Wajib diisi Wajib Diisi',
            'foto_akte.mimes' => 'Foto Akte Wajib berbentuk JPG, JPEG dan PNG',
            'foto_ijazah.mimes' => 'Foto Ijazah Wajib berbentuk JPG, JPEG dan PNG',
            'foto_kk.mimes' => 'Foto KK harus dalam format JPG, JPEG, atau PNG',
            'foto_pelatihan.mimes' => 'Sertifikat Pelatihan Harus Berbentuk PDF',
            'foto_peringatan.mimes' => 'Surat Peringatan Harus Berbentuk PDF',
            'foto_penghargaan.mimes' => 'Sertifikat Penghargaan Harus Berbentuk PDF',
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

        $filename1 = null;
        $pdf_penghargaan = $request->file('foto_penghargaan');
        if ($pdf_penghargaan) {
            $file = $request->file('foto_penghargaan');
            $filename1 = $file->getClientOriginalName();
            $file_jadi1 = date('ymdhis') . $filename1;
            $pdf_penghargaan->move(public_path('pdf_penghargaan'),$file_jadi1);
        }
        $filename2 = null;
        $pdf_pelatihan = $request->file('foto_pelatihan');
        if ($pdf_pelatihan) {
            $file = $request->file('foto_pelatihan');
            $filename2 = $file->getClientOriginalName();
            $file_jadi2 = date('ymdhis') . $filename2;
            $pdf_pelatihan->move(public_path('pdf_pelatihan'),$file_jadi2);
        }
        $filename3 = null;
        $pdf_peringatan = $request->file('foto_peringatan');
        if ($pdf_peringatan) {
            $file = $request->file('foto_peringatan');
            $filename3 = $file->getClientOriginalName();
            $file_jadi3 = date('ymdhis') . $filename3;
            $pdf_peringatan->move(public_path('pdf_peringatan'),$file_jadi3);
        }

        $data = [
            'nama' => $request->nama,
            'no_regis' => $request ->no_regis,
            'jabatan' => $request->jabatan,
            'jabatan_saat' => $request->jabatan_saat,
            'bagian' => $request->bagian,
            'gol' => $request->gol,
            'agama' => $request-> agama,
            'tgl_lahir' => $request-> tgl_lahir,
            'tgl_masuk' => $request-> tgl_masuk,
            'tgl_pensiun' => $request-> tgl_pensiun,
            'pendidikan' => $request-> pendidikan,
            'no_ktp' => $request-> no_ktp,
            'status' => $request-> status,
            'nama_istri' => $request-> nama_istri,
            'jml_anak' => $request-> jml_anak,
            'cuti_tahunan' => $request -> cuti_tahunan,
            'cuti_panjang' => $request -> cuti_panjang,
            'pelatihan' => $request -> pelatihan,
            'foto_pelatihan' => $file_jadi2,
            'penghargaan' => $request -> penghargaan,
            'foto_penghargaan' => $file_jadi1,
            'foto_peringatan' => $file_jadi3,
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
        $request->validate([
            'nama'=>'required',
            'no_regis'=>'required',
            'jabatan'=>'required',
            'jabatan_saat'=>'required',
            'bagian'=>'required',
            'gol'=>'required',
            'agama'=>'required',
            'status'=>'required',
            'tgl_lahir'=>'required',
            'tgl_masuk'=>'required',
            'tgl_pensiun'=>'required',
            'foto_ktp'=>'file|mimes:jpg,jpeg,png',
            'foto_kk'=>'file|mimes:jpg,jpeg,png',
            'foto_ijazah' => 'file|mimes:jpg,jpeg,png',
            'foto_akte' => 'file|mimes:jpg,jpeg,png',
            'foto_pelatihan' => 'file|mimes:pdf',
            'foto_penghargaan' => 'file|mimes:pdf',
            'foto_peringatan' => 'file|mimes:pdf',
        ],[
            'nama.required' => 'Nama Wajib Diisi',
            'no_regis.required' => 'No Regis Wajib Diisi',
            'status.required' => 'Status Wajib Diisi',
            'jabatan_saat.required' => 'Jabatan Saat Ini Wajib Diisi',
            'jabatan.required' => 'Posisi Terakhir Wajib Diisi',
            'bagian.required' => 'Bagian Wajib Diisi',
            'gol.required' => 'Golongan Wajib Diisi',
            'agama.required' => 'Agama Wajib Diisi',
            'tgl_lahir.required' => 'Tanggal Lahir Wajib Diisi',
            'tgl_masuk.required' => 'Tanggal Masuk Wajib Diisi',
            'tgl_pensiun.required' => 'Tanggal Pensiun Wajib Diisi',
            'foto_ktp.mimes' => 'Foto KTP harus dalam format JPG, JPEG, atau PNG',
            'foto_akte.mimes' => 'Foto Akte Wajib berbentuk JPG, JPEG dan PNG',
            'foto_ijazah.mimes' => 'Foto Ijazah Wajib berbentuk JPG, JPEG dan PNG',
            'foto_kk.mimes' => 'Foto KK harus dalam format JPG, JPEG, atau PNG',
            'foto_pelatihan.mimes' => 'Sertifikat Pelatihan Harus Berbentuk PDF',
            'foto_peringatan.mimes' => 'Surat Peringatan Harus Berbentuk PDF',
            'foto_penghargaan.mimes' => 'Sertifikat Penghargaan Harus Berbentuk PDF',
        ]);

        $data = [
            'nama' => $request->nama,
            'no_regis' => $request->no_regis,
            'jabatan' => $request->jabatan,
            'jabatan_saat' => $request->jabatan_saat,
            'bagian' => $request->bagian,
            'gol' => $request->gol,
            'agama' => $request->agama,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_pensiun' => $request->tgl_pensiun,
            'pendidikan' => $request->pendidikan,
            'no_ktp' => $request->no_ktp,
            'status' => $request->status,
            'nama_istri' => $request->nama_istri,
            'jml_anak' => $request->jml_anak,
            'cuti_tahunan' => $request -> cuti_tahunan,
            'cuti_panjang' => $request -> cuti_panjang,
            'pelatihan' => $request -> pelatihan,
            'penghargaan' => $request -> penghargaan,
        ];

        if ($request->hasFile('foto_penghargaan')) {
            $foto_file = $request->file('foto_penghargaan');
            $foto_ekstensi = $foto_file->getClientOriginalName();
            $foto_jadi = date('ymdhis') . $foto_ekstensi;
            $foto_file->move(public_path('pdf_penghargaan'), $foto_jadi);
            $data_foto = karyawan::where('id', $id)->first();
            File::delete(public_path('pdf_penghargaan') . '/' . $data_foto->foto_penghargaan);
            $data['foto_penghargaan'] = $foto_jadi;
        }

        if ($request->hasFile('foto_pelatihan')) {
            $foto_file = $request->file('foto_pelatihan');
            $foto_ekstensi = $foto_file->getClientOriginalName();
            $foto_nama = date('ymdhis') . $foto_ekstensi;
            $foto_file->move(public_path('pdf_pelatihan'), $foto_nama);
            $data_foto = karyawan::where('id', $id)->first();
            File::delete(public_path('pdf_pelatihan') . '/' . $data_foto->foto_pelatihan);
            $data['foto_pelatihan'] = $foto_nama;
        }
        if ($request->hasFile('foto_peringatan')) {
            $foto_file = $request->file('foto_peringatan');
            $foto_ekstensi = $foto_file->getClientOriginalName();
            $foto_nama = date('ymdhis') . $foto_ekstensi;
            $foto_file->move(public_path('pdf_peringatan'), $foto_nama);
            $data_foto = karyawan::where('id', $id)->first();
            File::delete(public_path('pdf_peringatan') . '/' . $data_foto->foto_peringatan);
            $data['foto_peringatan'] = $foto_nama;
        }

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
        File::delete(public_path('pdf_pelatihan').'/'. $data->foto_pelatihan);
        File::delete(public_path('pdf_peringatan').'/'. $data->foto_peringatan);
        File::delete(public_path('pdf_penghargaan').'/'. $data->foto_penghargaan);
        karyawan::where('id', $id)->delete();
        return redirect('/')->with('success', 'Data berhasil dihapus');
    }
}
