<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
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
				'Petugas'  => ''
			],
			'user' => session('login'),
			'records' => Petugas::all()->sortBy('id')
		];
		return view('petugas/petugas', compact('data'));
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
				'Petugas'  => '/petugas',
				'Create' => ''
			],
			'user' => session('login'),
		];
		return view('petugas/petugas-create', compact('data'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$store = Petugas::create($request->all());
		return redirect('/petugas')->with('store', $store);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Petugas  $petugas
	 * @return \Illuminate\Http\Response
	 */
	public function show(Petugas $petugas)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Petugas  $petugas
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Petugas $petugas)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Petugas'  => '/petugas',
				'Edit' => ''
			],
			'user' => session('login'),
			'toEdit' => Petugas::find($petugas->id)
		];
		return view('petugas/petugas-edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Petugas  $petugas
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Petugas $petugas)
	{
		$update = Petugas::find($petugas->id)->update($request->all());
		return redirect('/petugas')->with('update', $update);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Petugas  $petugas
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Petugas $petugas)
	{
		$delete = Petugas::destroy($petugas->id);
		return redirect('/petugas')->with('delete', $delete);
	}
}
