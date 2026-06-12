<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// ✅ SESUAIKAN DENGAN NAMA MODEL KAMU
use App\Models\CompanyProfile;
use App\Models\History;
use App\Models\Vision;
use App\Models\Organization;

class AboutController extends Controller
{
    // ================= PROFILE =================
    public function profileIndex() {
        $data = CompanyProfile::all();
        return view('admin.about.profile.index', compact('data'));
    }

    public function profileCreate() {
        return view('admin.about.profile.create');
    }

    public function profileStore(Request $request) {
        CompanyProfile::create($request->all());
        return redirect()->route('admin.about.profile.index');
    }

    public function profileEdit($id) {
        $data = CompanyProfile::findOrFail($id);
        return view('admin.about.profile.edit', compact('data'));
    }

    public function profileUpdate(Request $request, $id) {
        CompanyProfile::findOrFail($id)->update($request->all());
        return redirect()->route('admin.about.profile.index');
    }

    public function profileDelete($id) {
        CompanyProfile::findOrFail($id)->delete();
        return back();
    }

    // ================= HISTORY =================
    public function historyIndex() {
        $data = History::all();
        return view('admin.about.history.index', compact('data'));
    }

    public function historyCreate() {
        return view('admin.about.history.create');
    }

    public function historyStore(Request $request)
    {
        $details = null;

        if ($request->details) {
            $details = array_filter(array_map('trim', explode("\n", $request->details)));
        }

        History::create([
            'year' => $request->year,
            'title' => $request->title,
            'description' => $request->description,
            'details' => $details
        ]);

        return redirect()->route('admin.about.history.index');
    }

    public function historyEdit($id) {
        $data = History::findOrFail($id);
        return view('admin.about.history.edit', compact('data'));
    }

    public function historyUpdate(Request $request, $id)
    {
        $details = null;

        if ($request->details) {
            $details = array_filter(array_map('trim', explode("\n", $request->details)));
        }

        History::findOrFail($id)->update([
            'year' => $request->year,
            'title' => $request->title,
            'description' => $request->description,
            'details' => $details
        ]);

        return redirect()->route('admin.about.history.index');
    }

    public function historyDelete($id) {
        History::findOrFail($id)->delete();
        return back();
    }

    // ================= VISION =================
    public function visionIndex() {
        $data = Vision::all();
        return view('admin.about.vision.index', compact('data'));
    }

    public function visionCreate() {
        return view('admin.about.vision.create');
    }

    public function visionStore(Request $request) {
        Vision::create($request->all());
        return redirect()->route('admin.about.vision.index');
    }

    public function visionEdit($id) {
        $data = Vision::findOrFail($id);
        return view('admin.about.vision.edit', compact('data'));
    }

    public function visionUpdate(Request $request, $id) {
        Vision::findOrFail($id)->update($request->all());
        return redirect()->route('admin.about.vision.index');
    }

    public function visionDelete($id) {
        Vision::findOrFail($id)->delete();
        return back();
    }

    // ================= ORGANIZATION =================
    public function organizationIndex() {
        $data = Organization::all();
        return view('admin.about.organization.index', compact('data'));
    }

    public function organizationCreate() {
        return view('admin.about.organization.create');
    }

    public function organizationStore(Request $request) {
        Organization::create($request->all());
        return redirect()->route('admin.about.organization.index');
    }

    public function organizationEdit($id) {
        $data = Organization::findOrFail($id);
        return view('admin.about.organization.edit', compact('data'));
    }

    public function organizationUpdate(Request $request, $id) {
        Organization::findOrFail($id)->update($request->all());
        return redirect()->route('admin.about.organization.index');
    }

    public function organizationDelete($id) {
        Organization::findOrFail($id)->delete();
        return back();
    }
}
