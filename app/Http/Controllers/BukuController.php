<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
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
				'Buku'  => ''
			],
			'user' => session('login'),
			'records'       => Buku::all()->sortBy('id')
		];

		return view('buku/buku', compact('data'));
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
				'Buku'  => '/buku',
				'Create' => ''
			],
			'user' => session('login'),
			'listKategori' => Kategori::all(),
		];

		return view('buku/buku-create', compact('data'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		Buku::create($request->all());
		return redirect('/buku');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Buku  $buku
	 * @return \Illuminate\Http\Response
	 */
	public function show(Buku $buku)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Buku  $buku
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Buku $buku)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Buku' => '/buku',
				'Edit'  => ''
			],
			'user' => session('login'),
			'toEdit' => Buku::find($buku->id),
			'listKategori' => Kategori::all(),
		];
		return view('buku/buku-edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Buku  $buku
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Buku $buku)
	{
		Buku::find($buku->id)->update($request->all());
		return redirect('/buku');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Buku  $buku
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Buku $buku)
	{
		$delete = Buku::destroy($buku->id);
		return redirect('/buku')->with('delete', $delete);
	}
}
