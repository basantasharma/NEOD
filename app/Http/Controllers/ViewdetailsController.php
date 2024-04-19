<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Models\description;
use app\Models\sub;
use App\Models\read;
use App\Models\testdescription;
use App\Models\video;
use Illuminate\Http\Request;


class ViewdetailsController extends Controller
{

    //Alldetails...................................................................................................
    public function viewDetails()//view........
    {
        // $allDescriptions = Description::with('testDescription')->get();
        // dd($allDescriptions);
        $allDetails = description::all()->sortBy(function ($query) {
            return $query->country->id;
        });
        $data = compact('allDetails');
        return view('viewDetails.viewallDescription')->with($data);
    }


    public function editDescription($id)
    {
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
            return redirect('/admin/viewDetails')->with('success', ' Description Updated Succcessfully.');
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

    public function editVideoLink($id)
    {
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

    public function editCountry($id)
    {
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
            // 'country' => 'required|unique:countries,name',
            'countryImage' => 'required|image|mimes:jpeg,jpg,png,gif,webp'

        ]);

        $country = Country::find($id);
        if (!$country) {
            return view('viewDetails.country')->with('fail', 'Country not found.');
        }

        $image = time() . "neod." . $request->file('countryImage')->getClientOriginalExtension();
        $path = $request->file('countryImage')->storeAs('public/country/logo/' . $image);
        $newpath = str_replace('public/', '', $path);

        // $country->name = $request->country;
        $country->logo = $newpath;
        $save = $country->save();
        if ($save) {
            return redirect('/admin/view/country')->with('country')->with('success', 'Country Edited Successfully.');
        } else {
            return redirect('/admin/edit/details/{id}')->with('country')->with('fail', 'Country Not Edited');
        }
    }



    // .....................SUB DESCRIPTION .....................................................................

    // public function viewSub($id)
    // {
    //     $sub = sub::find($id);
    //     if (is_null($sub)) {
    //         return view('viewDetails.viewallDescription')->with('fail', 'No Sub description Found');
    //     } else {
    //         $data = compact('sub');
    //         return view('subdescription.subView')->with($data);
    //     }
    // }

    // public function addSub($id)
    // {
    //     $data = compact('id');
    //     return view('subdescription.addsub')->with($data);
    // }

    // public function postSub($id, Request $request)
    // {
    //     $request->validate([
    //         'subdescription' => 'required| min:5',
    //     ]);

    //     $subdes = new sub;
    //     $subdes->description = $request->subdescription;
    //     $save = $subdes->save();
    //     if ($save) {
    //         return redirect()->back()->with('success', 'Sub Description added Successfully.');
    //     } else {
    //         return redirect()->back()->with('fail', 'Unsuccessfull to add.');
    //     }
    // }
}


