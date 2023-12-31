<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MembershipJoin;

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
}
