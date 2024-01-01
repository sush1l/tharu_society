<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MembershipJoin;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class MembershipJoinController extends Controller
{
    public function index()
    {

        $membershipJoins = MembershipJoin::latest()->get();

        return view('admin.join_member', compact('membershipJoins'));
    }


    public function show(MembershipJoin $membershipJoin)
    {
        return view('admin.join_show', compact('membershipJoin'));
    }

    public function destroy(MembershipJoin $membershipJoin)
    {
        $membershipJoin->delete();
        toast('Membership Message Deleted Successfully', 'success');
        return back();
    }
}
