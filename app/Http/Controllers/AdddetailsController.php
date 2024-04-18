<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Models\description;
use App\Models\read;
use App\Models\video;
use Illuminate\Http\Request;
use PhpParser\Node\NullableType;

class AdddetailsController extends Controller
{

    //..........................ADD VIDEOLINK...............................................................
    public function videolink()
    {
        return view('addDetails.addVideolink');
    }

    public function postvideolink(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required'
        ]);

        $video = new video;
        $video->name = $request->name;
        $video->v_link = $request->link;
        $saved = $video->save();

        if ($saved) {
            return redirect('/admin/addvideolink')->with('success', 'Video link added successfully.');
        } else {
            return redirect('/admin/addvideolink')->with('fail', 'Video link is not added.');
        }
    }
    //...........................ADD COUNTRY..................................................................
    public function addcountry()
    {
        return view('addDetails.addCountry');
    }

    public function postCountry(Request $request)
    {
        $request->validate([
            'country' => 'required|unique:countries,name',
            'countryImage' => 'required|image|mimes:jpeg,jpg,png,gif,webp'

        ]);

        $image = time() . "neod." . $request->file('countryImage')->getClientOriginalExtension();
        $path = $request->file('countryImage')->storeAs('public/country/logo/' . $image);
        $newpath = str_replace('public/', '', $path);


        $country = new country;
        $country->name = $request->country;
        $country->logo = $newpath;
        $saved = $country->save();
        if ($saved) {
            return redirect('/admin/addcountry')->with('success', 'Country added successfully');
        } else {
            return redirect('/admin/addCountry')->with('fail', 'Country is not added');
        }
    }
    //.............................ADD DESCRIPTION...............................................................
    public function adddescription()
    {
        $countrydetails = country::all();
        // $readlinkdetails = read::all();
        $videolinkdetails = video::all();

        $data = compact('countrydetails', 'videolinkdetails');
        return view('addDetails.addDescription')->with($data);
    }

    public function postdescription(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'video_link' => ' required',
            'description' => 'required| min:10',
            'subdescription' => 'nullable',
        ]);

        $description = new description;
        $description->countryDescription_id = $request->country;
        $description->v_id = $request->video_link;
        $description->description = $request->description;
        $description->sub_description = $request->subdescription;
        $save = $description->save();

        if ($save) {
            return redirect('/admin/adddescription')->with('success', 'Description added successfully.');
        } else {

            return redirect('admin/adddescription')->with('fail', ' Descripton not added.');
        }
    }
}

