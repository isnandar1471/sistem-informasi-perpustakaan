<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Mahasiswa;
use App\Models\Petugas;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Login Mahasiswa
	 * 
	 */
	public function loginMahasiswa(Request $request)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__)
		];

		$login = Mahasiswa::where('username', $request->username)->where('password', $request->password)->get();

		if (count($login)) {
			session(['login' => $login]);
			return redirect('/home-mahasiswa');
		};
		return redirect('/login/mahasiswa');
	}

	/**
	 * Login Petugas
	 * 
	 */
	public function loginPetugas(Request $request)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__)
		];

		$login = Petugas::where('username', $request->username)->where('password', $request->password)->get();

		if (count($login)) {
			session(['login' => $login]);
			return redirect('/home-petugas');
		};
		return redirect('/login/petugas');
	}

	/**
	 * Login Petugas
	 * 
	 */
	public function loginAdmin(Request $request)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__)
		];

		$login = Admin::where('username', $request->username)->where('password', $request->password)->get();

		if (count($login)) {
			session(['login' => $login]);
			return redirect('/home-admin');
		};
		return redirect('/login/admin');
	}
}
