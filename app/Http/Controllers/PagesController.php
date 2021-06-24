<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Mahasiswa;
use App\Models\Peminjaman;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
	/**
	 * Menampilkan halaman login mahasiswa.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return redirect('/login/mahasiswa');
	}

	/**
	 * Menampilkan halaman login petugas.
	 */
	public function login_mahasiswa()
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Login' => '/',
				'Mahasiswa' => ''
			]
		];
		return view('login/login-mahasiswa', compact('data'));
	}

	/**
	 * Menampilkan halaman login petugas.
	 */
	public function login_petugas()
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Login' => '/',
				'Petugas' => ''
			]
		];
		return view('login/login-petugas', compact('data'));
	}

	/**
	 * Menampilkan halaman login admin.
	 */
	public function login_admin()
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Login' => '/',
				'Admin' => ''
			]
		];
		return view('login/login-admin', compact('data'));
	}

	/**
	 * Menampilkan halaman home.
	 * 
	 * @param App\Models\Peminjaman $peminjaman
	 */
	public function home_mahasiswa(Peminjaman $peminjaman)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Home' => ''
			],
			'user' => session('login'),
			'statusPeminjaman' => $this->statusPeminjaman,
			'records' => Peminjaman::where('id_mahasiswa', session('login')[0]->id)->get(),
			'buku' => Buku::all(),
			'petugas' => Petugas::all(),
		];
		return view('home/home-mahasiswa', compact('data'));
	}

	/**
	 * Menampilkan halaman home.
	 * 
	 * @param App\Models\Peminjaman $peminjaman
	 */
	public function home_petugas(Peminjaman $peminjaman)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Home' => ''
			],
			'user' => session('login'),
		];
		return view('home/home-petugas', compact('data'));
	}

	/**
	 * Menampilkan halaman home.
	 * 
	 * @param App\Models\Peminjaman $peminjaman
	 */
	public function home_admin(Peminjaman $peminjaman)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Home' => ''
			],
			'user' => session('login'),
		];
		return view('home/home-admin', compact('data'));
	}


	/**
	 * halaman buku khusus mahasiswa
	 */
	public function mahasiswa_buku()
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Buku'  => ''
			],
			'user' => session('login'),
			'records'       => Buku::all()->sortBy('judul')
		];

		return view('buku/bukuMahasiswa', compact('data'));
	}

	/**
	 * menampilkan halaman tambah peminjaman khusus mahasiswa
	 */
	public function mahasiswa_peminjaman()
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Peminjaman'  => ''
			],
			'user' => session('login'),
			'statusPeminjaman' => $this->statusPeminjaman,
			'buku' => Buku::all(),
		];

		return view('peminjaman/peminjaman-create', compact('data'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store_peminjaman(Request $request)
	{
		Peminjaman::create($request->all());
		return redirect('/home-mahasiswa');
	}

	/**
	 * Kembali ke halaman login mahasiswa.
	 */
	public function logout()
	{
		Session::forget('login');
		return redirect('/');
	}
}
