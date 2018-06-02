<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

	public function metoda_z_parametrem($parametr)
	{
		return 'Testowa metoda z kontrolera z parametrem: ' . $parametr;
	}

}
