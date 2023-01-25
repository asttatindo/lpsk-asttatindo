<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class visitorController extends Controller
{
    public function index () {
        $carousel = \App\Models\carousel::all();
        $judul = \App\Models\judul::all();
        $visimisi = \App\Models\visimisi::all();
        $kebijakan = \App\Models\kebijakan::all();
        $galeri = \App\Models\galeri::all();
        $sasaran = \App\Models\sasaran::all();
        $galeri2 = \App\Models\galeri_informasi::all();
        $post = \App\Models\post::paginate(3);
        return view ('visitor.home', compact('carousel', 'judul', 'visimisi', 'kebijakan', 'galeri', 'sasaran', 'galeri2', 'post'));
    }

    public function tentang () {
        $post = \App\Models\post::paginate(5);
        return view ('visitor.blog', compact('post'));
    } 

    public function detailpost ($slug) {
        $data = \App\Models\post::where('slug', $slug)->get();
        $post = \App\Models\post::paginate(5);
        if (count($data) == 0) {
            $post = \App\Models\post::paginate(5);
            return view ('visitor.notfound', compact('post'));
        } 
        return view ('visitor.isipost', compact('data', 'post'));
    }

    public function struktur () {
        $post = \App\Models\post::paginate(5);
        return view ('visitor.struktur', compact('post'));
    }

    public function asesor () {
        $asesor = \App\Models\asesor::all();
        $post = \App\Models\post::paginate(5);
        return view ('visitor.asesor', compact('asesor', 'post'));
    }

    public function legalitas () {
        $post = \App\Models\post::paginate(5);
        return view ('visitor.legalitas', compact('post'));
    }

    public function prosesPermohonan () {
        $post = \App\Models\post::paginate(5);
        return view ('visitor.permohonan', compact('post'));
    }

    public function daftarSertifikasi() {
        $post = \App\Models\post::paginate(5);
        $client = new Client([
            'base_uri' => 'https://countriesnow.space'
        ]);
        $response = $client->request('GET', '/api/v0.1/countries');
        $body = $response->getBody();
        $countries = json_decode($body);
        $country = $countries->data;
        return view ('visitor.daftar-sertifikasi', compact('post', 'country'));
    }

    public function daftarSertifikasiPost(Request $request) {
        $ttl = $request->tempat.", ".$request->tanggal_lahir;
        $ifExistsName = \App\Models\requestAccount::where('nama_lengkap', $request->nama_lengkap)->first();
        $ifExistsEmail = \App\Models\requestAccount::where('email', $request->email)->first();
        if (isset($ifExistsName)) {
            return redirect ('daftar-sertifikasi')->with('error', 'Maaf! nama anda telah terdaftar.');
        }
        if (isset($ifExistsEmail)) {
            return redirect ('daftar-sertifikasi')->with('error', 'Maaf! email anda telah terdaftar.');
        }
        \App\Models\requestAccount::create([
            'nama_lengkap' => $request->nama_lengkap,
            'ttl' => $ttl,
            'gender' => $request->gender,
            'kebangsaan' => $request->kebangsaan,
            'negara' => $request->negara,
            'alamat' => $request->alamat,
            'kode_pos' => $request->kode_pos,
            'pendidikan' => $request->pendidikan,
            'no_rumah_pribadi' => $request->no_rumah_pribadi,
            'no_hp_pribadi' => $request->no_hp_pribadi,
            'no_kantor_pribadi' => $request->no_kantor_pribadi,
            'email' => $request->email,
            'nama_perusahaan' => $request->nama_perusahaan,
            'jabatan' => $request->jabatan,
            'alamat_perusahaan' => $request->alamat_perusahaan,
            'kode_pos_perusahaan' => $request->kode_pos_perusahaan,
            'no_telepon_perusahaan' => $request->no_telepon_perusahaan,
            'fax_perusahaan' => $request->fax_perusahaan,
            'email_perusahaan' => $request->email_perusahaan,
            'tujuan_asesmen' => $request->tujuan_asesmen,
            'tujuan_lain' => $request->tujuan_lain,
            'skema' => $request->skema
        ]);
    }
}
