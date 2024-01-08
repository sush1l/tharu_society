<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AutoReplyEmail;
use App\Models\MembershipJoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function GuzzleHttp\Promise\all;

class MembershipJoinController extends Controller
{
    public function index()
    {

        $membershipJoins = MembershipJoin::with('country')->get();
        return view('admin.join_member', compact('membershipJoins'));
    }


    public function show(MembershipJoin $membershipJoin)
    {
        return view('admin.join_show', compact('membershipJoin'));
    }

    public function destroy(MembershipJoin $membershipJoin)
    {

        $membershipJoin->delete();
        toast('Request Message Deleted Successfully', 'success');
        return back();
    }
    public function store(Request $request)
{
    // Validate and store the form data
    $membershipJoin = MembershipJoin::create($request->all());
    Mail::to($request->input('email'))->send(new AutoReplyEmail);
    return back();
}

}
