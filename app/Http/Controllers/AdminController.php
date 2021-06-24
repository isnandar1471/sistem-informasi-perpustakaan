<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$data = [
			'title'       => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Admin'  => ''
			],
			'user' => session('login'),
			'records'       => Admin::all()->sortBy('username')
		];
		return view('admin/admin', compact('data'));
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
				'Admin'  => '/admin',
				'Create'  => ''
			],
			'user' => session('login'),
		];
		return view('admin/admin-create', compact('data'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// dd($request->all());
		Admin::create($request->all());
		return redirect('/admin');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function show(Admin $admin)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Admin $admin)
	// public function edit($id)
	{
		$data = [
			'title' => $this->IFP_Sprt(__METHOD__),
			'breadcrumb' => [
				'Admin'  => '/admin',
				'Edit'  => ''
			],
			'user' => session('login'),
			'toEdit' => Admin::find($admin->id)
		];
		return view('admin/admin-edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Admin $admin)
	{
		Admin::find($admin->id)->update($request->all());
		return redirect('/admin');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Admin  $admin
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Admin $admin)
	{
		$delete = Admin::destroy($admin->id);
		return redirect('/admin')->with('delete', $delete);
	}
}
