<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Popup\StorePopupRequest;
use App\Http\Requests\Popup\UpdatePopupRequest;
use App\Models\Popup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PopupController extends Controller
{

    public function index()
    {
        $popups = Popup::latest()->get();
        return view('admin.popup_notice.index', compact('popups'));
    }

    public function create()
    {
        //
    }

    public function store(StorePopupRequest $request)
    {
        Popup::create($request->validated());
        toast('popup_notice added successfully', 'success');
        return back();
    }


    public function show($id)
    {
        //
    }


    public function edit(Popup $popup)
    {
        return view('admin.popup_notice.edit', compact('popup'));
    }


    public function update(UpdatePopupRequest $request, Popup $popup)
    {
        $popup->update($request->validated());
        toast('popup notice  update successfully', 'success');
        return redirect(route('admin.popup.index'));
    }


    public function showOnIndex(Popup $popup): RedirectResponse
    {
        $popup->update([
            'show_on_index' => !$popup->show_on_index
        ]);
        toast('Status Updated Successfully', 'success');
        return back();
    }
    public function destroy(Popup $popup)
    {
        $popup->delete();
        toast('popup notice Deleted Successfully', 'success');
        return back();
    }
}
