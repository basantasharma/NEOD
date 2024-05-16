<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Models\description;
use Illuminate\Support\Facades\DB;
use App\Models\testdescription;
use App\Models\video;
use Illuminate\Http\Request;


class ViewdetailsController extends Controller
{

    //Alldetails...................................................................................................
    public function viewDetails(request $request)//view........
    {

        $id = $request->id;
        $allDetails = description::all()->sortBy(function ($query) {
            return $query->country->id;
        });
        $data = compact('allDetails');
        return view('viewDetails.viewallDescription')->with($data);
    }


    public function editDescription(request $request)
    {
        $id = $request->id;

        $item = Description::find($id);
        if (!is_null($item)) {
            $data = compact('item');
            return view('updateDetails.updateDescription')->with($data);
        } else {
            return view('viewDetails.viewallDescription')->with('fail', 'Description not Found.');
        }
    }
    public function updateDescription($id, Request $request)
    {
        $request->validate([
            'description' => 'required|min:10',
            'subdescription' => 'nullable',

        ]);

        $item = description::find($id);
        $item->description = $request->description;
        $item->sub_description = $request->subdescription;
        $save = $item->save();
        if ($save) {
            return redirect()->back()->with('success', ' Description Updated Succcessfully.');
        } else {
            return redirect('/admin/viewDetails')->with('fail', 'Update not successfull.');
        }
    }


    public function deleteDetails($d_id)//delete.....
    {
        $description = description::find($d_id);
        if (!is_null($description)) {
            $description->delete();
        }
        return redirect('admin/viewDetails')->with('success', 'Description deleted Successfully.');
    }


    //Read View..................................................................................................................
    public function viewRead()
    {
        $test = testdescription::all();
        $data = compact('test');
        return view('viewDetails.read')->with($data);
    }


    // public function deleteRead($id)
    // {
    //     $read = read::find($id);
    //     if (!is_null($read)) {
    //         $read->delete();
    //     }
    //     return redirect('admin/view/readinglinks')->with('success', 'Reading link deleted Successfully.');
    // }

    // public function editReadLink($id)
    // {
    //     $readLink = video::find($id);
    //     if (!is_null($readLink)) {
    //         $data = compact('readLink');
    //         return view('updateDetails.readLink')->with($data);
    //     } else {
    //         return view('viewDetails.read')->with('fail', 'Reading link not Found.');
    //     }
    // }
    // public function updateReadLink($id, Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'link' => 'required',
    //     ]);

    //     $readLink = read::find($id);
    //     $readLink->name = $request->name;
    //     $readLink->r_link = $request->link;
    //     $save = $readLink->save();
    //     if ($save) {
    //         return redirect('/admin/view/readinglinks')->with('success', ' Reading Link Updated Succcessfully.');
    //     } else {
    //         return redirect('/admin/view/readinglinks')->with('fail', 'Update not successfull.');
    //     }
    // }


    //video view..........................................................................................................
    public function viewVideo()
    {
        $video = video::all();
        $data = compact('video');
        return view('viewDetails.video')->with($data);
    }


    public function deleteVideo($id)
    {
        $video = video::find($id);
        if (!is_null($video)) {
            $video->delete();
        }
        return redirect('admin/view/videolinks')->with('success', 'Video link deleted Successfully');
    }

    public function editVideoLink(Request $request)
    {

        $id = $request->id;
        $videoLink = video::find($id);
        if (!is_null($videoLink)) {
            $data = compact('videoLink');
            return view('updateDetails.videolink')->with($data);
        } else {
            return view('viewDetails.video')->with('fail', 'Video link not Found.');
        }
    }

    public function updateVideoLink($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);

        $videoLink = video::find($id);
        $videoLink->name = $request->name;
        $videoLink->v_link = $request->link;
        $save = $videoLink->save();
        if ($save) {
            return redirect('/admin/view/videolinks')->with('success', ' Video Link Updated Succcessfully.');
        } else {
            return redirect('/admin/view/videolinks')->with('fail', 'Update not successfullly.');
        }
    }


    //view country...............................................................................................
    public function viewCountry()
    {
        $country = country::all();
        $data = compact('country');
        return view('viewDetails.country')->with($data);
    }


    public function deleteCountry($id)
    {
        $country = country::find($id);
        if (!is_null($country)) {
            $country->delete();
        }
        return redirect('/admin/view/country')->with('success', 'Country deleted Successfully');
    }

    public function editCountry(Request $request)
    {
        // dd($request->id);
        $id = $request->id;
        $country = country::find($id);

        if (is_null($country)) {
            return view('viewDetails.country')->with('fail', 'Edit is unsuccessful.');
        } else {
            $data = compact('country');
            return view('updateDetails.country')->with($data);
        }
    }

    public function updateCountry(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'countryImage' => 'required|image|mimes:jpeg,jpg,png,gif,webp'

        ]);

        $country = Country::find($id);
        if (!$country) {
            return view('viewDetails.country')->with('fail', 'Country not found.');
        }

        $image = time() . "neod." . $request->file('countryImage')->getClientOriginalExtension();
        $path = $request->file('countryImage')->storeAs('public/country/logo/' . $image);
        $newpath = str_replace('public/', '', $path);

        $country->name = $request->name;
        $country->logo = $newpath;
        $save = $country->save();
        if ($save) {
            return redirect('/admin/view/country')->with('country')->with('success', 'Country Edited Successfully.');
        } else {
            return redirect('/admin/edit/details/{id}')->with('country')->with('fail', 'Country Not Edited');
        }
    }

    public function changeVideo(Request $request)
    {
        $id = $request->id;
        $description = description::where('d_id', $id)->first();
        $videoDes = video::all();
        if ($description) {
            $data = compact('description', 'videoDes');
            return view('updateDetails.editVideo')->with($data);
        } else {
            return redirect()->back()->with('fail', 'Cannot be edited.');
        }
    }
    public function submitVideo(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'video' => 'required',
        ]);
        $submit = description::where('d_id', $id)->first();
        if ($submit) {
            $submit->v_id = $request->video;
            $saved = $submit->save();
            if ($saved) {
                return redirect()->route('admin.viewDetails')->with('success', 'Successfully changed.');
            } else {
                return redirect()->back()->with('failed', 'Unsuccessful change.');
            }
        } else {
            return redirect()->back()->with('failed', 'No matching record found.');
        }
    }
}


