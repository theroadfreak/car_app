<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function index(): Response
    {
        $allCars = Car::query()->with('model')->simplePaginate(5);
        $allBrands = Brand::all();
        return Inertia::render('CarDashboard', ['cars' => $allCars, 'brands' => $allBrands]);
    }
}
