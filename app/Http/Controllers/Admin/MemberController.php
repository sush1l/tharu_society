<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\StoreMemberRequest;
use App\Http\Requests\Member\UpdateMemberRequest;
use App\Models\Member;
use App\Models\MembershipCategory;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::with('membershipCategory')->get();
       return view('admin.member.index', compact('members'));
    }

    public function create()
    {
       $membershipCategories=MembershipCategory::all();
       return view('admin.member.create', compact('membershipCategories'));
    }

    public function store(StoreMemberRequest $request)
    {
        Member::create($request->validated());
        toast('Members added successfully', 'success');
        return redirect(route('admin.member.index'));
    }

    public function edit(Member $member)
    {
       $membershipCategories=MembershipCategory::all();
       return view('admin.member.edit',compact('membershipCategories', 'member'));
    }

    public function update(UpdateMemberRequest $request, Member $member)
    {
       $member->update($request->validated());
       toast('Membership added successfully', 'success');
       return redirect(route('admin.member.index'));
    }

    public function destroy(Member $member)
    {
       $member->delete();
       toast('Membership added successfully', 'success');
       return redirect(route('admin.member.index'));
    }
}
