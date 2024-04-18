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
        $descriptions = Description::all()->sortBy(function ($query) {
            return $query->country->id;
        });
        if (count($descriptions) > 0) {
            $responseData = [];

            foreach ($descriptions as $description) {
                $descriptionData = [
                    'id' => $description->country->id,
                    'country_name' => $description->country->name,
                    'country_image' => url(asset('storage/' . $description->country->logo)),
                    'description' => $description->description,
                    'video_link' => $description->video->v_link,
                    // 'read_link' => $description->testdescription->description,
                    'sub_description ' => $description->sub_description,
                ];
                array_push($responseData, $descriptionData);
            }

            return response()->json(['data' => $responseData]);
        } else {
            $response = ['message' => 'Data Not Found'];
            return response()->json($response);
        }
    }
}
// public function getData()
// {
//     $descriptions = Description::all()->sortBy(function ($query) {
//         return $query->country->id;
//     });
//     if ($descriptions->isNotEmpty()) {
//         $responseData = [];

//         foreach ($descriptions as $description) {
//             $descriptionData = [
//                 'id' => $description->country->id,
//                 'country_name' => $description->country->name,
//                 'country_image' => url(asset('storage/' . $description->country->logo)),
//                 'description' => $description->description,
//                 'video_link' => $description->video->v_link,
//                 'sub_description' => $description->sub_description,
//             ];

//             // Assuming there's a relationship between Description and TestDescription
//             $testDescription = $description->testdescription;
//             if ($testDescription) {
//                 $readData = [
//                     'id' => $testDescription->id,
//                     'readdescription' => $testDescription->description,
//                 ];
//                 $descriptionData['test_description'] = $readData; // Associate readData with descriptionData
//             }

//             $responseData[] = $descriptionData; // Push descriptionData into responseData
//         }

//         return response()->json(['data' => $responseData]);
//     } else {
//         $response = ['message' => 'Data Not Found'];
//         return response()->json($response);
//     }
// }

