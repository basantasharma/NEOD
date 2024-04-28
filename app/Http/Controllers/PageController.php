<?php

namespace App\Http\Controllers;

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
}
