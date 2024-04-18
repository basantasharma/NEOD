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

    public function getData()
    {
        $allDescriptions = Description::with('testdDescription')->get();

        if ($allDescriptions->isNotEmpty()) {
            $responseData = [];

            foreach ($allDescriptions as $item) {
                $descriptionData = [
                    'id' => $item->d_id,
                    'country_id' => $item->country->id,
                    'country_name' => $item->country->name,
                    'country_image' => url(asset('storage/' . $item->country->logo)),
                    'description' => $item->description,
                    'sub_description' => $item->sub_description,
                    'video_link' => $item->video->v_link,
                ];

                if ($item->testdescription->isNotEmpty()) {
                    $test = $item->testdescriptions;
                    $descriptionData['read_link'] = $test->description;
                } else {
                    $descriptionData['read_link'] = null;
                }
                array_push($responseData, $descriptionData);
            }

            return response()->json(['data' => $responseData]);
        } else {
            $response = ['message' => 'Data Not Found'];
            return response()->json($response);
        }
    }

}
