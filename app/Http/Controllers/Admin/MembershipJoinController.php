<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MembershipJoin;
use Illuminate\Http\Request;

class MembershipJoinController extends Controller
{
    public function index()
    {

        $membershipJoins = MembershipJoin::latest()->get();

        return view('admin.join_member', compact('membershipJoins'));
    }

    public function destroy(MembershipJoin $membershipJoin)
    {
        $membershipJoin->delete();

        toast('Membership Message Deleted Successfully', 'success');

        return back();
    }
}
