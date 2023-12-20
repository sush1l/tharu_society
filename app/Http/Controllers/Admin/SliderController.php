<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\StoreSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }


    public function store(StoreSliderRequest $request)
    {
        Slider::create($request->validated());
        toast('Slider Added Successfully', 'success');
        return back();
    }

    public function edit(Slider $slider)
    {

        return view('admin.slider.edit', compact('slider'));
    }

    public function update(UpdateSliderRequest $request, Slider $slider)
    {

        if ($request->hasFile('photo')) {
            if ($slider->photo) {
                $this->deleteFile($slider->getRawOriginal('photo'));
            }
        }
        $slider->update($request->validated());
        toast('Slider Updated Successfully', 'success');
        return redirect(route('admin.slider.index'));
    }

    public function destroy(Slider $slider)
    {

        if ($slider->photo) {
            $this->deleteFile($slider->getRawOriginal('photo'));
        }
        $slider->delete();
        toast('Slider Deleted Successfully', 'success');
        return redirect(route('admin.slider.index'));
    }
}
