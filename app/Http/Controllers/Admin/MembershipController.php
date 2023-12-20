<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Membership\StoreMembershipRequest;
use App\Http\Requests\Membership\UpdateMembershipRequest;
use App\Models\Membership;
use App\Models\MembershipCategory;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
 {
    $memberships = Membership::with('MembershipCategory')->get();
    return view('admin.membership.index', compact('memberships'));
 }

 public function create()
 {
    $membershipCategories=MembershipCategory::all();
    return view('admin.membership.create', compact('membershipCategories'));
 }

 public function store(StoreMembershipRequest $request)
 {
    Membership::create($request->validated());
     toast('Membership added successfully', 'success');
     return redirect(route('admin.membership.index'));
 }

 public function edit(Membership $membership)
 {
    $membershipCategories=MembershipCategory::all();
    return view('admin.membership.edit',compact('membershipCategories', 'membership'));
 }

 public function update(UpdateMembershipRequest $request, Membership $membership)
 {
    $membership->update($request->validated());
    toast('Membership added successfully', 'success');
    return redirect(route('admin.membership.index'));
 }

 public function destroy(Membership $membership)
 {
    $membership->delete();
    toast('Membership added successfully', 'success');
    return redirect(route('admin.membership.index'));
 }
}
