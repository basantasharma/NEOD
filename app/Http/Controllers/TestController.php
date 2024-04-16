<?php

namespace App\Http\Controllers;

// 
use App\Models\testdescription;
use App\Models\testimage;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //



    //Ielts imagesssss...........................................................................

    // public function viewImagePage()
    // {

    //     // $ieltsimg = testimage::where('Exam', 'ielts')->first();
    //     $ieltsimg = testimage::where('Exam', 'ielts')->take(1)->get();
    //     $pteimg = testimage::where('Exam', 'pte')->take(1)->get();
    //     $data = compact('ieltsimg', 'pteimg');
    //     // dd($data);
    //     return view('test.viewImage')->with($data);
    // }

    // public function addIeltsImagePage()
    // {
    //     return view('test.ieltsForm');
    // }
    // public function postIeltsImagePage(Request $request)
    // {
    //     $request->validate([
    //         'ieltsimg' => 'required|image|mimes:jpeg,jpg,png,gif,webp'
    //     ]);
    //     $image = time() . "neod." . $request->file('ieltsimg')->getClientOriginalExtension();
    //     $path = $request->file('ieltsimg')->storeAs('public/ieltsimg/images/' . $image);
    //     $newpath = str_replace('public/', '', $path);

    //     // Now you can save $filePath in your database


    //     $photo = new testimage;
    //     $photo->images = $newpath;
    //     $photo->Exam = 'ielts';

    //     $save = $photo->save();

    //     if ($save) {
    //         return redirect()->route('admin.viewImagePage')->with('success', 'Image Uploaded successfully.');
    //     } else {
    //         return redirect()->route('admin.addIeltsImagePage')->with('fail', 'Image not uploaded. You have to delete previous on to add another');
    //     }
    // }


    // public function deleteIeltsImage($id)
    // {
    //     $del = testimage::find($id);
    //     if (is_null($del)) {
    //         return redirect()->route('admin.viewImagePage')->with('fail', 'Cannot be deleted.');
    //     } else {
    //         $del->delete();
    //         return redirect()->route('admin.viewImagePage')->with('success', 'Image deleted successfully.');
    //     }
    // }

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
