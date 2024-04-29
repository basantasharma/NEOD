<?php

namespace App\Http\Controllers;

use App\Models\welcomeData;
use App\Models\welcomePages;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function addPage()
    {
        return view('welcomepages.createWelcome');
    }

    public function postPage(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp',
        ]);

        $images = time() . "neod." . $request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('public/page/image/' . $images);
        $newpath = str_replace('public/', '', $path);

        $page = new welcomePages;
        $page->title = $request->title;
        $page->description = $request->description;
        $page->image = $newpath;
        $save = $page->save();

        if ($save) {
            return redirect('admin/welcome/pages/')->with('success', 'Description and title added successfully.');
        } else {
            return redirect('admin/welcome/pages/')->with('fail', ' Descripton  and title not added.');
        }

    }

    public function viewPage()
    {
        $pagedata = welcomePages::all();
        return view('welcomepages.view', compact('pagedata'));
    }

    public function editPage(Request $request)
    {
        $id = $request->id;
        $pagedata = welcomePages::find($id);

        if ($pagedata) {
            return view('welcomepages.update', compact('pagedata'));
        } else {
            return redirect()->back()->with('fail', ' No data found');
        }
    }

    public function updatePage(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp',
        ]);
        $images = time() . "neod." . $request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('public/page/image/' . $images);
        $newpath = str_replace('public/', '', $path);

        $page = welcomePages::find($id);
        $page->title = $request->title;
        $page->image = $newpath;
        $page->description = $request->description;
        $save = $page->save();
        if ($save) {
            return redirect()->back()->with('success', 'Updated successfully.');
        } else {
            return redirect()->back()->with('fail', 'Update unsuccessful.');

        }
    }
    public function deletePage(Request $request)
    {
        $id = $request->id;
        $del = welcomePages::find($id);
        if ($del) {
            $del->delete();
            return redirect()->back()->with('success', 'deleted successfully.');

        } else {
            return redirect()->back()->with('fail', 'Not deleted s.');

        }
    }
    public function addIndex()
    {
        return view('welcomepages.indexAdd');
    }
    public function postIndex(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $page = new welcomeData;
        $page->title = $request->title;
        $page->description = $request->description;
        $save = $page->save();

        if ($save) {
            return redirect()->back()->with('success', 'Description and title added successfully.');
        } else {
            return redirect()->back()->with('fail', ' Descripton  and title not added.');
        }

    }
    public function indexPage()
    {
        $pagedata = welcomeData::all();
        return view('welcomepages.viewIndex', compact('pagedata'));
    }
    public function editIndex(Request $request)
    {
        $id = $request->id;
        $pagedata = welcomeData::find($id);

        if ($pagedata) {
            return view('welcomepages.editIndex', compact('pagedata'));
        } else {
            return redirect()->back()->with('fail', ' No data found');
        }
    }
    public function updateIndex(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $page = welcomeData::find($id);
        $page->title = $request->title;
        $page->description = $request->description;
        $save = $page->save();
        if ($save) {
            return redirect()->route('admin.indexPages')->with('success', 'Updated successfully.');
        } else {
            return redirect()->back()->with('fail', 'Update unsuccessful.');

        }
    }

    public function deleteIndex(Request $request)
    {
        $id = $request->id;
        $del = welcomeData::find($id);
        if ($del) {
            $del->delete();
            return redirect()->back()->with('success', 'deleted successfully.');

        } else {
            return redirect()->back()->with('fail', 'Not deleted s.');

        }
    }
}
