<?php

namespace App\Http\Controllers;

// 
use App\Models\description;
use App\Models\testdescription;
use App\Models\testimage;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function showTestPage()
    {
        return view('test');
    }

    public function viewAllDescription($id)
    {
        $details = testdescription::where('t_id', $id)->get();
        if ($details) {
            $data = compact('details');
            return view('viewDetails.readDescription')->with($data);
        } else {
            return redirect()->route('admin.viewDetails')->with('fail', 'No data Found.');
        }
    }

    public function addTestDescription($id)
    {
        $read = description::find($id);
        if (is_null($read)) {
            return redirect()->route('admin.viewDetails')->with('fail', 'No data found');
        } else {

            $data = compact('read');
            return view('test.addDescription')->with($data);
        }
    }


    public function deleteTestDescription($id)
    {
        $test = testdescription::find($id);
        if (!is_null($test)) {
            $test->delete();
            return redirect()->route('admin.viewAllDescription', ['id' => $test->t_id])->with('success', 'Reading Description deleted Sucessfully.');
        } else {
            return redirect('admin.viewAllDescription')->with('fail', 'Reading Description not deleted.');
        }

    }

    public function postTestDescription(request $request, $id)
    {
        $item = description::find($id);
        if ($item) {
            $request->validate([
                'description' => 'required|min:6',
            ]);
            $testdes = new testdescription;
            $testdes->description = $request->description;
            $testdes->t_id = $request->t_id;
            $save = $testdes->save();
        }
        if ($save) {
            return redirect()->route('admin.addTestDescription', ['id' => $item->d_id])->with('success', 'Successfully added.');
        } else {
            return redirect()->route('admin.viewDetails')->with('fail', 'Not added.');
        }
    }

    public function editTestDescription($id)
    {
        $edit = testdescription::find($id);
        if (!is_null($edit)) {
            $data = compact('edit');
            return view('updateDetails.updateReadingDescription')->with($data);
        } else {
            return redirect()->route('admin.viewAllDescription')->with('fail', 'No data Found on the table.');
        }
    }

    public function updateTestdescription($id, Request $request)
    {
        $request->validate([
            'description' => 'required|min:5',
        ]);
        $update = testdescription::find($id);
        $update->description = $request->description;
        $save = $update->save();
        if ($save) {
            return redirect()->route('admin.viewAllDescription', ['id' => $update->t_id])->with('success', 'Reading Description updated successfully.');
        } else {
            return redirect()->route('admin.viewAllDescription')->with('fail', 'Data not updated.');
        }
    }



    //Ielts imagesssss...........................................................................

    public function viewImagePage($id)
    {
        $image = description::find($id);
        if ($image) {
            $photo = testimage::where('img_id', $id)->get();
            $data = compact('image', 'photo');
            return view('test.viewImage')->with($data);
        } else {
            return redirect('admin.viewAllDescription')->with('fail', 'No Data Found.');
        }
    }

    public function addImagePage($id)
    {
        $image = description::find($id);

        return view('test.addImageForm', compact('image'));

    }
    public function postImagePage(Request $request, $id)
    {
        $request->validate([
            'addImage' => 'required|image|mimes:jpeg,jpg,png,gif,webp'
        ]);
        $image = time() . "neod." . $request->file('addImage')->getClientOriginalExtension();
        $path = $request->file('addImage')->storeAs('public/descriptions/images/' . $image);
        $newpath = str_replace('public/', '', $path);

        $photoss = description::find($id);
        $photo = new testimage;
        $photo->images = $newpath;
        $photo->img_id = $request->img_id;
        $save = $photo->save();

        if ($save) {
            return redirect()->route('admin.viewImagePage', ['id' => $photoss->d_id])->with('success', 'Image Uploaded successfully.');
        } else {
            return redirect()->route('admin.addImagePage', ['id' => $photoss->d_id])->with('fail', 'Image not uploaded. You have to delete previous on to add another');
        }
    }



    public function deleteImage($id)
    {
        $test = testimage::find($id);
        if (!is_null($test)) {
            $test->delete();
            return redirect()->route('admin.viewImagePage', ['id' => $test->img_id])->with('success', 'Image deleted Sucessfully.');
        } else {
            return redirect('test.viewImage')->with('fail', 'Reading Description not deleted.');
        }

    }

    // //pteImages..........................................................
    // public function addPteImagePage()
    // {
    //     return view('test.pteForm');

    // }
    // public function postPteImagePage(Request $request)
    // {
    //     $request->validate([
    //         'pteimg' => 'required|image|mimes:jpeg,jpg,png,gif,webp'
    //     ]);
    //     $pteimage = time() . "neod." . $request->file('pteimg')->getClientOriginalExtension();
    //     $path = $request->file('pteimg')->storeAs('public/pteimg/images/' . $pteimage);
    //     $newpath = str_replace('public/', '', $path);

    //     $photo = new testimage;
    //     $photo->images = $newpath;
    //     $photo->Exam = ('pte');

    //     $save = $photo->save();
    //     if ($save) {
    //         return redirect()->route('admin.viewImagePage')->with('success', 'Image Uploaded successfully.');
    //     } else {
    //         return redirect()->route('admin.addPteImagePage')->with('fail', 'Image not uploaded.You have to delete previous on to add another');
    //     }
    // }

    // public function deletePteImage($id)
    // {
    //     $del = testimage::find($id);
    //     if (is_null($del)) {
    //         return redirect()->route('admin.viewImagePage')->with('fail', 'Cannot be deleted.');
    //     } else {
    //         $del->delete();
    //         return redirect()->route('admin.viewImagePage')->with('success', 'Image deleted successfully.');
    //     }
    // }

}
