<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Mahasiswa;
use App\Models\Peminjaman;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Peminjaman'  => ''
			],
			'user' => session('login'),
			'statusPeminjaman' => $this->statusPeminjaman,
			'records'       => Peminjaman::all()->sortBy('status', descending: true),
			'mahasiswa' => Mahasiswa::all(),
			'buku' => Buku::all(),
			'petugas' => Petugas::all(),
		];

		return view('peminjaman/peminjaman', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Peminjaman'  => '/peminjaman',
				'Create' => ''
			],
			'user' => session('login'),
			'statusPeminjaman' => $this->statusPeminjaman,
		];

		return view('peminjaman/peminjaman-create', compact('data'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Peminjaman  $peminjaman
	 * @return \Illuminate\Http\Response
	 */
	public function show(Peminjaman $peminjaman)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Peminjaman  $peminjaman
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Peminjaman $peminjaman)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Peminjaman' => '/peminjaman',
				'Edit'  => ''
			],
			'user' => session('login'),
			'statusPeminjaman' => $this->statusPeminjaman,
			'toEdit' => Peminjaman::find($peminjaman->id)
		];
		return view('peminjaman/peminjaman-edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Peminjaman  $peminjaman
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Peminjaman $peminjaman)
	{
		Peminjaman::find($peminjaman->id)->update($request->all());
		return redirect('/peminjaman');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Peminjaman  $peminjaman
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Peminjaman $peminjaman)
	{
		$delete = Peminjaman::destroy($peminjaman->id);
		return redirect('/peminjaman')->with('delete', $delete);
	}

	/**
	 * Menampilkan halaman pengajuan peminjaman berdasarkan penggunanya.
	 * 
	 * 
	 */
	public function ajukanPeminjaman(Peminjaman $peminjaman)
	{
	}
}
