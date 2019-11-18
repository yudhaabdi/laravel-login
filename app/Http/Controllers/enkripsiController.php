<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class enkripsiController extends Controller
{
    public function index(){
		$encrypted = Crypt::encryptString('B');
		$decrypted = Crypt::decryptString($encrypted);
 
		echo "Hasil Enkripsi : " . $encrypted;
		echo "<br/>";
		echo "<br/>";
		echo "Hasil Dekripsi : " . $decrypted;
	}
}
