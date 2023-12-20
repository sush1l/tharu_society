<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\City\StoreCityRequest;
use App\Http\Requests\City\UpdateCityRequest;
use App\Models\AddCity;
use Illuminate\Http\Request;

class AddCityController extends Controller
{
    public function index()
    {
        $addCities = AddCity::latest()->get();
        return view('admin.city.index', compact('addCities'));
    }

    public function store(StoreCityRequest $request)
    {
        AddCity::create($request->validated());
        toast('City added Successfully', 'success');
        return redirect(route('admin.addCity.index'));
    }

    public function edit(AddCity $addCity)
    {
        return view('admin.city.edit',compact('addCity'));
    }

    public function update(UpdateCityRequest $request, AddCity $addCity)
    {
        $addCity->update($request->validated());
        toast('City updated Successfully', 'success');
        return redirect(route('admin.addCity.index'));
    }

    public function destroy(AddCity $addCity)
    {
        $addCity->delete();
        toast('City Deleted Successfully', 'success');
        return redirect(route('admin.addCity.index'));
    }
}
