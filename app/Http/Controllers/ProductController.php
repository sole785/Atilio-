<?php

namespace AtilioDominguez\Http\Controllers;

use Illuminate\Http\Request;
use AtilioDominguez\Product;

class ProductController extends Controller
{
    
	public function index() {

		$products = Product::All();

		return view('products', ['products' => $products]);
		
	}

	public function searchProduct(Request $request) {

		$productName = $request->input('productName');

		
		$selectedProducts = Product::where('detalle', 'LIKE', '%'.$productName.'%')->get();

		return view('products', ['products' => $selectedProducts]);
		

	}

	



}
