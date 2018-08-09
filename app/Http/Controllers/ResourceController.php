<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\Product as ProductResource;

class ResourceController extends Controller
{
    
    function get(Request $request)
    {
    	// dd("jhi there");

    	return new ProductResource([]);
    }
}
