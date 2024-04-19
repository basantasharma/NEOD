<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Models\description;
use App\Models\testdescription;
use App\Models\testimage;
use Illuminate\Http\Request;
use app\Models\video;

class ApiController extends Controller
{
    public function getData($country)
    {
        $findCountry = country::where('name', $country)->first();
        if ($findCountry) {
            $findDescriptions = Description::where('countryDescription_id', $findCountry->id)
                ->with('testDescription', 'testimg')
                ->get();
            $allData = [];
            foreach ($findDescriptions as $descriptions) {
                $storeDescriptions = [
                    'country' => $country,
                    'country_image' => url(asset('storage/' . $descriptions->country->logo)),
                    'descriptions' => [
                        'description_id' => $descriptions->d_id,
                        'description' => $descriptions->description,
                        'video_link' => $descriptions->video->v_link ?? null,
                        'sub_decription' => $descriptions->subdescripitons ?? null,
                        'images' => [],
                        'read_list' => [],
                    ],
                ];
                if ($descriptions->testimg->isNotEmpty()) {

                    foreach ($descriptions->testimg as $img) {
                        // $storeDescriptions['descriptions']['images'] = [];
                        $storeDescriptions['descriptions']['images'][] = url(asset('storage/' . $img->images));
                    }
                } else {
                    $storeDescriptions['images'] = null;
                }
                if ($descriptions->testDescription->isNotEmpty()) {
                    // $storeDescriptions['descriptions']['read_list'] = [];
                    foreach ($descriptions->testDescription as $details) {
                        $storeDescriptions['descriptions']['read_list'][] = $details->description;
                    }
                } else {
                    $storeDescriptions['read_list'] = null;
                }
                array_push($allData, $storeDescriptions);
            }
            return response()->json(['data' => $allData]);

        } else {
            $response = ['message' => 'Data Not Found'];
            return response()->json($response);
        }
    }
}
