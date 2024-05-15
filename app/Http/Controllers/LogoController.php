<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class LogoController extends Controller
{
    public function addLogo()
    {
        return view('logo.addLogo');
    }

    public function postLogo(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'required|image|mimes:jpeg,jpg,png,gif,webp'
        ]);

        // $images = "neodlogo." . $request->file('logo')->getClientOriginalExtension();
        // $path = $request->file('logo')->storeAs('public/logos/' . $images);
        // $newpath = str_replace('public/', '', $path);


        // $neodlogo = pathinfo($request->file('logo')->getClientOriginalName(), PATHINFO_FILENAME);
        // $images = $neodlogo . '.png';
        // $path = $request->file('logo')->storeAs('public/logos/' . $images);
        // $newpath = str_replace('public/', '', $path);

        $image = 'neodlogo';
        $imagePath = $request->file('logo')->storeAs('logos', $image . '.png', 'public');

        $logo = new logo;
        $logo->name = $request->name;
        $logo->logoImage = $imagePath;
        $saved = $logo->save();

        if ($saved) {
            return redirect()->back()->with('success', 'Logo added successfully.');
        } else {
            return redirect()->back()->with('fail', 'Logo not saved.');
        }

    }

    public function viewLogo()
    {
        $logo = logo::all();
        $data = compact('logo');
        return view('logo.viewLogo')->with($data);
    }

    public function deleteLogo(Request $request)
    {
        $id = $request->id;

        $del = logo::find($id);
        if (!is_null($del)) {
            $del->delete();
            return redirect()->back()->with('success', 'logo deleted successfully.');
        }
        return redirect()->back()->with('fail', 'Logo is not deleted.');
    }

    public function updateLogo(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'name' => 'required',
            'logo' => 'required|image|mimes:jpeg,jpg,png,gif,webp'
        ]);
        $image = 'neodlogo';
        $imagePath = $request->file('logo')->storeAs('logos', $image . '.png', 'public');

        $logo = logo::find($id);
        $logo->name = $request->name;
        $logo->logoImage = $imagePath;
        $saved = $logo->save();

        if ($saved) {
            return redirect()->back()->with('success', 'Logo updated successfully.');
        } else {
            return redirect()->back()->with('fail', 'Logo not updated.');
        }
    }
    public function editLogo(Request $request)
    {
        $id = $request->id;
        $updateLogo = logo::find($id);
        $data = compact('updateLogo');
        if (!is_null($updateLogo)) {
            return view('logo.editLogo')->with($data);
        }
    }
}
