<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Resources\Json\JsonResource;

class BrandController extends Controller
{
    public function index(): JsonResource
    {
        return JsonResource::make(Brand::all());
    }
}
