<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products; // gọi class model để làm vc
class productsController extends Controller
{
    public function getAll() {
        return products::orderBy('id_products', 'desc')->get();
    }
}
