<?php
namespace App\Controllers;
use App\Core\Controller;

class HomeController extends Controller{
	
	public function index(){
		header("Location: /books/all");
	}

}
