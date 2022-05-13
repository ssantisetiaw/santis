<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Tescontroller extends Controller{
        public function index()
    {
        return view ('tesview');
    }
}