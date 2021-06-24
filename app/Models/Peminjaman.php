<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
	use HasFactory;

	protected $table = 'peminjaman';

	protected $fillable = [
		'id_mahasiswa',
		'id_buku',
		'tanggal_peminjaman',
		'tanggal_pengembalian',
		'status',
		'id_petugas',
	];
}
