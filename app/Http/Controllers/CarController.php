<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Model;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Redirector;
use Inertia\Inertia;
use Inertia\Response;


class CarController extends Controller
{
    public function index(): JsonResource
    {
        return JsonResource::make(Car::query()->with('model')->paginate(5));
    }

    public function store(Request $request): Redirector|Application|RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'VIN_number' => 'required|max:255',
            'description' => 'required|min:2',
            'model_id' => 'required|integer'
        ]);

        Car::query()->create($validated);

        return redirect('/dashboard');
    }

    public function destroy(Car $car): Redirector|Application|RedirectResponse
    {
        $car->delete();
        return redirect('/dashboard');
    }

    public function update(Car $car, Request $request): Redirector|Application|RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'VIN_number' => 'required|max:255',
            'description' => 'required|min:2',
            'model_id' => 'required|integer'
        ]);

        $car->update($validated);

        return redirect('/dashboard');
    }

    public function update_form(Car $car): Response
    {
        $models = Model::query()->with('brand')->get();
        return Inertia::render('CarUpdate', ['car' => $car, 'models' => $models]);
    }

    public function create_form(Request $request): Response
    {
        $models = Model::query()->with('brand')->get();
        return Inertia::render('CarCreate', ['models' => $models]);
    }

}
