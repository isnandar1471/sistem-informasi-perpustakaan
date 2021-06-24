<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	/** 
	 * Memnghapus "App\Http\Controller" di Magic Constant __METHOD__
	 * 
	 * @param String $METHOD
	 * @return String
	 */
	protected function IFP_Sprt($METHOD)
	{
		return str_replace('App\Http\Controllers\\', '', $METHOD);
	}

	/**
	 * 	'Disetujui',
	 * 	'Tidak Disetujui',
	 * 	'Dipinjam',
	 * 	'Dikembalikan',
	 * 	'Terlambat',
	 * 	
	 */
	protected $statusPeminjaman = [
		'Disetujui'       => 'bg-success',
		'Tidak Disetujui' => 'bg-warning',
		'Dipinjam'        => 'bg-primary',
		'Dikembalikan'    => 'bg-secondary',
		'Terlambat'       => 'bg-danger',
	];
}
