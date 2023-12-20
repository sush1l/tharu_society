<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MembershipCategory\StoreMembershipCategoryRequest;
use App\Http\Requests\MembershipCategory\UpdateMembershipCategoryRequest;
use App\Models\MembershipCategory;
use Illuminate\Http\Request;

class MembershipCategoryController extends Controller
{
 public function index()
 {
    $membershipCategories = MembershipCategory::latest()->get();
    return view('admin.membershipCategory.index', compact('membershipCategories'));
 }

 public function store(StoreMembershipCategoryRequest $request )
 {
    MembershipCategory::create($request->validated());
    toast('Category Stored Successfully', 'success');

    return redirect(route('admin.membershipCategory.index'));
 }

 public function edit(MembershipCategory $membershipCategory)
 {
    return view('admin.membershipCategory.edit', compact('membershipCategory'));
 }

 public function update(UpdateMembershipCategoryRequest $request, MembershipCategory $membershipCategory)
 {
    $membershipCategory->update($request->validated());
    toast('Category Updated Successfully', 'success');

    return redirect(route('admin.membershipCategory.index'));
 }

 public function destroy(MembershipCategory $membershipCategory)
 {
     $membershipCategory->delete();

     toast('Category Deleted Successfully', 'success');

     return back();
 }

}
