<?php

namespace App\Core;

use App\Controllers\Golongan;
use App\Controllers\Pelanggan;
use App\Controllers\User;

class Controller
{
	// Layout home
	public function home($view, $data = [])
	{
		require_once ROOT . "layouts/home.php";
	}

	// layout dashboard
	public function dashboard($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	// layout golongan
	public function golongan($view, $data = [])
	{
		require_once ROOT . "app/views/golongan/index.php";
	}

	// layout tambah golongan
	public function golongan_tambah($view, $data = [])
	{
		require_once ROOT . "app/views/golongan/create.php";
	}

	// layout edit golongan
	public function golongan_edit($view, $data = [])
	{
		require_once ROOT . "app/views/golongan/edit.php";
	}

	// layout user
	public function user($view, $data = [])
	{
		require_once ROOT . "app/views/user/index.php";
	}

	// layout tambah user
	public function user_tambah($view, $data = [])
	{
		require_once ROOT . "app/views/user/create.php";
	}

	// layout edit user
	public function user_edit($view, $data = [])
	{
		require_once ROOT . "app/views/user/edit.php";
	}

	// layout pelanggan
	public function pelanggan($view, $data = [])
	{
		require_once ROOT . "app/views/pelanggan/index.php";
	}

	// layout tambah pelanggan
	public function pelanggan_tambah($view, $data = [], $data2 = [])
	{
		require_once ROOT . "app/views/pelanggan/create.php";
	}

	// layout edit user
	public function pelanggan_edit($view, $data = [], $data2 = [], $data3 = [])
	{
		require_once ROOT . "app/views/pelanggan/edit.php";
	}
}