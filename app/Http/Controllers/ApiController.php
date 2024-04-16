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
                    'descriptions' => [
                        'description' => $description->description,
                        'links' => [
                            'video_link' => $description->video->v_link,
                            'read_link' => $description->read->r_link,
                            'sub_description ' => $description->sub_description,
                        ],
                    ],
                ];
                array_push($responseData, $descriptionData);
            }

            return response()->json(['data' => $responseData]);
        } else {
            $response = ['message' => 'Data Not Found'];
            return response()->json($response);
        }
    }

    public function viewData($id)
    {
        $descriptions = Description::where('countryDescription_id', $id)->get();

        if ($descriptions->count() > 0) {
            $responseData = [];

            foreach ($descriptions as $description) {
                $descriptionData = [
                    'id' => $description->country->id,
                    'country_name' => $description->country->name,
                    'country_image' => url(asset('storage/' . $description->country->logo)),
                    'descriptions' => [
                        'description' => $description->description,
                        'links' => [
                            'video_link' => $description->video->v_link,
                            'read_link' => $description->read->r_link,
                            'sub_description' => $description->sub_description,
                        ],
                    ],
                ];
                array_push($responseData, $descriptionData);
            }

            return response()->json(['data' => $responseData]);
        } else {
            $response = ['message' => 'Data Not Found', 404];
            return response()->json($response);
        }
    }


    public function testGetData()
    {
        $testDetails = testdescription::all();
        if (count($testDetails) > 0) {
            $responseData = [];
            foreach ($testDetails as $test) {
                $testdata = [
                    'id' => $test->id,
                    'description' => $test->description
                ];
                array_push($responseData, $testdata);
            }
            return response()->json(['data' => $responseData]);
        } else {
            $response = ['message' => 'Data not Found', 404];
            return response()->json($response);
        }
    }

    public function testGetPhoto($exam)
    {
        $photos = testimage::all()->where('Exam', $exam);
        if (count($photos) > 0) {
            $responseData = [];
            foreach ($photos as $photo) {
                $photodata = [
                    'id' => $photo->id,
                    // 'images' => url($photo->images),
                    'images' => url(asset('storage/' . $photo->images)),
                ];
                array_push($responseData, $photodata);
            }
            return response()->json(['data' => $responseData]);
        } else {
            $response = ['message' => 'Photo not Found', 404];
            return response()->json($response);
        }
    }


}