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
                        'sub_decription' => $descriptions->sub_description ?? null,
                    ],
                ];
                if ($descriptions->testimg->isNotEmpty()) {
                    $storeDescriptions['descriptions']['images'] = [];
                    foreach ($descriptions->testimg as $img) {
                        $storeDescriptions['descriptions']['images'][] = url(asset('storage/' . $img->images));
                    }
                } else {
                    $storeDescriptions['images'] = null;
                }
                if ($descriptions->testDescription->isNotEmpty()) {
                    $storeDescriptions['descriptions']['read_list'] = [];
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

    public function getCountry()
    {
        $countryData = country::all();
        if ($countryData->isNotEmpty()) {
            $country = [];
            foreach ($countryData as $items) {
                $data = [
                    'country' => [
                        'name' => $items->name ?? null,
                        'image' => url(asset('storage/' . $items->logo)) ?? null
                    ]
                ];
                array_push($country, $data);
            }
            return response()->json(['data' => $country]);
        } else {
            $response = ['message' => 'Data not found'];
            return response()->json($response);
        }
    }
    public function getList($country)
    {
        $findCountry = country::where('name', $country)->first();
        if ($findCountry) {
            $findDescriptions = Description::where('countryDescription_id', $findCountry->id)
                ->get();
            $allData = [];
            foreach ($findDescriptions as $descriptions) {
                $storeDescriptions = [
                    'description' => $descriptions->description,
                    'subdescription' => $descriptions->sub_description ?? null,
                ];
                array_push($allData, $storeDescriptions);
            }
            return response()->json(['data' => $allData]);

        } else {
            $response = ['message' => 'Data Not Found'];
            return response()->json($response);
        }
    }
    public function getListData($country)
    {
        $findCountry = country::where('name', $country)->first();
        if ($findCountry) {
            $findDescriptions = Description::where('countryDescription_id', $findCountry->id)
                ->with('testDescription', 'testimg')
                ->get();
            $allData = [];
            foreach ($findDescriptions as $descriptions) {
                $storeDescriptions = [
                    'description' => $descriptions->description,
                    'video_link' => $descriptions->video->v_link ?? null,
                    'sub_decription' => $descriptions->sub_description ?? null,
                ];
                if ($descriptions->testimg->isNotEmpty()) {
                    // $storeDescriptions['images'] = [];
                    foreach ($descriptions->testimg as $img) {
                        $storeDescriptions['images'][] = url(asset('storage/' . $img->images));
                    }
                } else {
                    $storeDescriptions['images'] = null;
                }
                if ($descriptions->testDescription->isNotEmpty()) {
                    // $storeDescriptions['read_list'] = [];
                    foreach ($descriptions->testDescription as $details) {
                        $storeDescriptions['readList'][] = $details->description;
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
    public function getReadListData($id)
    {
        $findDes = testdescription::where('t_id', $id)->first();
        if ($findDes) {
            $findDescriptions = description::where('d_id', $findDes->t_id)
                ->with('testDescription', 'testimg')
                ->get();
            $allData = [];
            foreach ($findDescriptions as $descriptions) {
                $storeDescriptions = [
                ];
                if ($descriptions->testDescription->isNotEmpty()) {
                    $storeDescriptions['read_list'] = [];
                    foreach ($descriptions->testDescription as $details) {
                        $storeDescriptions['read_list'][] = $details->description;
                    }
                } else {
                    $storeDescriptions['read_list'] = null;
                }
                if ($descriptions->testimg->isNotEmpty()) {
                    $storeDescriptions['images'] = [];
                    foreach ($descriptions->testimg as $img) {
                        $storeDescriptions['images'][] = url(asset('storage/' . $img->images));
                    }
                } else {
                    $storeDescriptions['images'] = null;
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