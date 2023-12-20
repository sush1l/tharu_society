<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TikTok\StoreTikTokRequest;
use App\Http\Requests\TikTok\UpdateTikTokRequest;
use App\Models\TikTok;
use Illuminate\Http\Request;

class TikTokController extends BaseController
{
    public function index()
    {
        $tiktoks = TikTok::all();
        return view('admin.tikTok.index', compact('tiktoks'));
    }

    public function create()
    {

    }

    public function store(StoreTikTokRequest $request)
    {
        TikTok::create($request->validated());
        toast('Tok tok added successfully', 'success');
        return back();
    }

    public function show(TikTok $tikTok)
    {
        //
    }

    public function edit(TikTok $tikTok)
    {
        return view('admin.tikTok.edit', compact('tikTok'));
    }

    public function update(UpdateTikTokRequest $request, TikTok $tikTok)
    {
        if ($request->input('video') && $tikTok->video) {
            $this->deleteFile($tikTok->video);
        }
        $tikTok->update($request->validated());
        toast('Tok tok updated successfully', 'success');
        return redirect(route('admin.tikTok.index'));
    }

    public function destroy(TikTok $tikTok)
    {
        if ($tikTok->video) {
            $this->deleteFile($tikTok->video);
        }
        toast('Tik tok deleted successfully', 'success');
        return back();
    }
}
