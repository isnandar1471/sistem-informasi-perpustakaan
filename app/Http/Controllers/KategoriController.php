<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
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
				'Kategori'  => ''
			],
			'user' => session('login'),
			'records' => Kategori::all()->sortBy('id')
		];
		return view('kategori/kategori', compact('data'));
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
				'Kategori'  => '/kategori',
				'Create'  => ''
			],
			'user' => session('login'),
		];
		return view('kategori/kategori-create', compact('data'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		Kategori::create($request->all());
		return redirect('/kategori');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Kategori  $kategori
	 * @return \Illuminate\Http\Response
	 */
	public function show(Kategori $kategori)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Kategori  $kategori
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Kategori $kategori)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Kategori'  => '/kategori',
				'Edit'  => ''
			],
			'user' => session('login'),
			'toEdit' => Kategori::find($kategori->id)
		];
		return view('kategori/kategori-edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Kategori  $kategori
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Kategori $kategori)
	{
		Kategori::find($kategori->id)->update($request->all());
		return redirect('/kategori');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Kategori  $kategori
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Kategori $kategori)
	{
		$delete = Kategori::destroy($kategori->id);
		return redirect('/kategori')->with('delete', $delete);
	}
}
