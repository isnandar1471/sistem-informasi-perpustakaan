<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
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
				'Mahasiswa'  => ''
			],
			'user' => session('login'),
			'records' => Mahasiswa::all()->sortBy('id')
		];
		return view('mahasiswa/mahasiswa', compact('data'));
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
				'Mahasiswa'  => '/mahasiswa',
				'Create'  => ''
			],
			'user' => session('login'),
		];
		return view('mahasiswa/mahasiswa-create', compact('data'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		Mahasiswa::create($request->all());
		return redirect('/mahasiswa');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Mahasiswa  $mahasiswa
	 * @return \Illuminate\Http\Response
	 */
	public function show(Mahasiswa $mahasiswa)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Mahasiswa  $mahasiswa
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Mahasiswa $mahasiswa)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Mahasiswa'  => '/mahasiswa',
				'Edit'  => ''
			],
			'user' => session('login'),
			'toEdit' => Mahasiswa::find($mahasiswa->id)
		];
		return view('mahasiswa/mahasiswa-edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Mahasiswa  $mahasiswa
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Mahasiswa $mahasiswa)
	{
		Mahasiswa::find($mahasiswa->id)->update($request->all());
		return redirect('/mahasiswa');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Mahasiswa  $mahasiswa
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Mahasiswa $mahasiswa)
	{
		$delete = Mahasiswa::destroy($mahasiswa->id);
		return redirect('/mahasiswa')->with('delete', $delete);
	}
}
