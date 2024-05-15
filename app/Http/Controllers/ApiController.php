<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Models\description;
use App\Models\testdescription;
use App\Models\testimage;
use App\Models\welcomeData;
use App\Models\welcomePages;
use Illuminate\Http\Request;
use App\Models\video;
use App\Models\logo;


class ApiController extends Controller
{

    public function getData($country)
    {
        $findCountry = Country::where('name', $country)->first();
        if ($findCountry) {
            $dataCollection = Description::where('countryDescription_id', $findCountry->id)
                ->with('testDescription', 'testimg')
                ->get();

            $pageData = welcomePages::all();
            $welcome = welcomeData::all();
            $onboarding = [];
            foreach ($pageData as $item) {
                $dataWelcome = [
                    'title' => $item->title,
                    'image' => url(asset('storage/' . $item->image)),
                    'description' => $item->description,
                ];
                array_push($onboarding, $dataWelcome);
            }
            $welcomeData = [];
            foreach ($welcome as $item) {
                $dataWelcome = [
                    'title' => $item->title,
                    'description' => $item->description,
                ];
                array_push($welcomeData, $dataWelcome);
            }

            $dataArray = [];
            $dataArray['country'] = $findCountry->name;
            $dataArray['countryImage'] = url(asset('storage/' . $findCountry->logo));
            $dataArray['descriptions'] = [];
            foreach ($dataCollection as $data) {
                $dataFetch = [
                    'id' => $data->d_id,
                    'title' => $data->description,
                    'subdescription' => $data->sub_description ?? [],
                    'videoLink' => $data->video->v_link,
                    'readingText' => [],
                    'images' => [],
                ];
                if ($data->testDescription) {
                    foreach ($data->testDescription as $readingText) {
                        $dataFetch['readingText'][] = $readingText->description;
                    }
                }
                if ($data->testimg) {
                    foreach ($data->testimg as $image) {

                        // $dataImage = url(asset('storage/' . $image->images));
                        $dataFetch['images'][] = [
                            'title' => $image->title,
                            'image' => url(asset('storage/' . $image->images)),
                        ];
                    }
                }
                array_push($dataArray['descriptions'], $dataFetch);
            }
            return response()->json(['onboarding' => $onboarding, 'welcomedata' => $welcomeData, 'Countries' => $dataArray]);
        } else {
            $response = ['message' => 'Data not found'];
            return response()->json($response, 404); // Adding HTTP status code for data not found
        }
    }



    public function getPage()
    {
        $pageData = welcomePages::all();
        $logo = logo::all();

        if ($pageData->isNotEmpty() && $logo->isNotEmpty()) {
            $onboarding = [];
            $onboarding['pages'] = [];
            foreach ($pageData as $key => $item) {
                $dataWelcome = [
                    'title' => $item->title,
                    'description' => $item->description,
                ];
                if ($key === 0) {
                    $dataWelcome['logo'] = url(asset('storage/' . $logo->first()->logoImage));
                }

                array_push($onboarding['pages'], $dataWelcome);
            }

            return response()->json(['onboarding' => $onboarding]);
        } else {
            $response = ['message' => 'Data not found'];
            return response()->json($response, 404);
        }
    }

    public function mainPage()
    {
        $findCountry = Country::all();

        if ($findCountry) {
            $welcome = welcomeData::all();
            $welcomeData = [];
            foreach ($welcome as $item) {
                $dataWelcome = [
                    'title' => $item->title,
                    'description' => $item->description,
                ];
                array_push($welcomeData, $dataWelcome);
            }
            $dataArray = [];
            foreach ($findCountry as $item) {
                $dataCountry = [
                    'country' => $item->name,
                    'image' => url(asset('storage/' . $item->logo)),
                ];
                array_push($dataArray, $dataCountry);
            }
            return response()->json(['welcomedata' => $dataWelcome, 'countries' => $dataArray]);
        } else {
            $response = ['message' => 'Data not found'];
            return response()->json($response, 404); // Adding HTTP status code for data not found
        }
    }

    public function getCountryData($country)
    {
        $findCountry = Country::where('name', $country)->first();

        if ($findCountry) {
            $dataCollection = Description::where('countryDescription_id', $findCountry->id)
                ->with('testDescription', 'testimg')
                ->get();
            $dataArray = [];
            $dataArray['country'] = $findCountry->name;
            $dataArray['countryImage'] = url(asset('storage/' . $findCountry->logo));
            $dataArray['descriptions'] = [];
            foreach ($dataCollection as $data) {
                $dataFetch = [
                    'id' => $data->d_id,
                    'title' => $data->description,
                    'subdescription' => $data->sub_description ?? [],
                    'videoLink' => $data->video->v_link,
                    'readingText' => [],
                    'images' => [],
                ];
                if ($data->testDescription) {
                    foreach ($data->testDescription as $readingText) {
                        $dataFetch['readingText'][] = $readingText->description;
                    }
                }
                if ($data->testimg) {
                    foreach ($data->testimg as $image) {

                        $dataFetch['images'][] = [
                            'title' => $image->title,
                            'image' => url(asset('storage/' . $image->images)),
                        ];
                    }
                }
                array_push($dataArray['descriptions'], $dataFetch);
            }
            return response()->json(['Countries' => $dataArray]);
        } else {
            $response = ['message' => 'Data not found'];
            return response()->json($response, 404); // Adding HTTP status code for data not found
        }
    }

    // public function getPage()
    // {

    //     $pageData = welcomePages::all();
    //     $logo = logo::all();
    //     if ($pageData) {
    //         $onboarding = [];
    //         $onboarding['logo'] = $logo->logoImage;
    //         foreach ($pageData as $item) {
    //             $dataWelcome = [
    //                 'title' => $item->title,
    //                 'image' => url(asset('storage/' . $item->image)),
    //                 'description' => $item->description,
    //             ];
    //             array_push($onboarding, $dataWelcome);
    //         }
    //         return response()->json(['onboarding' => $onboarding]);
    //     } else {
    //         $response = ['message' => 'Data not found'];
    //         return response()->json($response, 404); // Adding HTTP status code for data not found    
    //     }
    // }

    // public function getData($country)
    // {
    //     $findCountry = country::where('name', $country)->first();
    //     if ($findCountry) {
    //         $findDescriptions = Description::where('countryDescription_id', $findCountry->id)
    //             ->with('testDescription', 'testimg')
    //             ->get();
    //         $allData = [];
    //         foreach ($findDescriptions as $descriptions) {
    //             $storeDescriptions = [
    //                 'country' => $country,
    //                 'country_image' => url(asset('storage/' . $descriptions->country->logo)),
    //                 'descriptions' => [
    //                     'description_id' => $descriptions->d_id,
    //                     'description' => $descriptions->description,
    //                     'video_link' => $descriptions->video->v_link ?? null,
    //                     'sub_decription' => $descriptions->sub_description ?? null,
    //                 ],
    //             ];
    //             if ($descriptions->testimg->isNotEmpty()) {
    //                 $storeDescriptions['descriptions']['images'] = [];
    //                 foreach ($descriptions->testimg as $img) {
    //                     $storeDescriptions['descriptions']['images'][] = url(asset('storage/' . $img->images));
    //                 }
    //             } else {
    //                 $storeDescriptions['images'] = null;
    //             }
    //             if ($descriptions->testDescription->isNotEmpty()) {
    //                 $storeDescriptions['descriptions']['read_list'] = [];
    //                 foreach ($descriptions->testDescription as $details) {
    //                     $storeDescriptions['descriptions']['read_list'][] = $details->description;
    //                 }
    //             } else {
    //                 $storeDescriptions['read_list'] = null;
    //             }
    //             array_push($allData, $storeDescriptions);
    //         }
    //         return response()->json(['data' => $allData]);

    //     } else {
    //         $response = ['message' => 'Data Not Found'];
    //         return response()->json($response);
    //     }
    // }

    // public function getCountry()
    // {
    //     $countryData = country::all();
    //     if ($countryData->isNotEmpty()) {
    //         $country = [];
    //         foreach ($countryData as $items) {
    //             $data = [
    //                 'country' => [
    //                     'name' => $items->name ?? null,
    //                     'image' => url(asset('storage/' . $items->logo)) ?? null
    //                 ]
    //             ];
    //             array_push($country, $data);
    //         }
    //         return response()->json(['data' => $country]);
    //     } else {
    //         $response = ['message' => 'Data not found'];
    //         return response()->json($response);
    //     }
    // }
    // public function getList($country)
    // {
    //     $findCountry = country::where('name', $country)->first();
    //     if ($findCountry) {
    //         $findDescriptions = Description::where('countryDescription_id', $findCountry->id)
    //             ->get();
    //         $allData = [];
    //         foreach ($findDescriptions as $descriptions) {
    //             $storeDescriptions = [
    //                 'description' => $descriptions->description,
    //                 'subdescription' => $descriptions->sub_description ?? null,
    //             ];
    //             array_push($allData, $storeDescriptions);
    //         }
    //         return response()->json(['data' => $allData]);
    //     } else {
    //         $response = ['message' => 'Data Not Found'];
    //         return response()->json($response);
    //     }
    // }
    // public function getListData($country)
    // {
    //     $findCountry = country::where('name', $country)->first();
    //     if ($findCountry) {
    //         $findDescriptions = Description::where('countryDescription_id', $findCountry->id)
    //             ->with('testDescription', 'testimg')
    //             ->get();
    //         $allData = [];
    //         foreach ($findDescriptions as $descriptions) {
    //             $storeDescriptions = [
    //                 'description' => $descriptions->description,
    //                 'video_link' => $descriptions->video->v_link ?? null,
    //                 'sub_decription' => $descriptions->sub_description ?? null,
    //             ];
    //             if ($descriptions->testimg->isNotEmpty()) {
    //                 // $storeDescriptions['images'] = [];
    //                 foreach ($descriptions->testimg as $img) {
    //                     $storeDescriptions['images'][] = url(asset('storage/' . $img->images));
    //                 }
    //             } else {
    //                 $storeDescriptions['images'] = null;
    //             }
    //             if ($descriptions->testDescription->isNotEmpty()) {
    //                 // $storeDescriptions['read_list'] = [];
    //                 foreach ($descriptions->testDescription as $details) {
    //                     $storeDescriptions['readList'][] = $details->description;
    //                 }
    //             } else {
    //                 $storeDescriptions['read_list'] = null;
    //             }
    //             array_push($allData, $storeDescriptions);
    //         }
    //         return response()->json(['data' => $allData]);

    //     } else {
    //         $response = ['message' => 'Data Not Found'];
    //         return response()->json($response);
    //     }
    // }
    // public function getReadListData($id)
    // {
    //     $findDes = testdescription::where('t_id', $id)->first();
    //     if ($findDes) {
    //         $findDescriptions = description::where('d_id', $findDes->t_id)
    //             ->with('testDescription', 'testimg')
    //             ->get();
    //         $allData = [];
    //         foreach ($findDescriptions as $descriptions) {
    //             $storeDescriptions = [
    //             ];
    //             if ($descriptions->testDescription->isNotEmpty()) {
    //                 $storeDescriptions['read_list'] = [];
    //                 foreach ($descriptions->testDescription as $details) {
    //                     $storeDescriptions['read_list'][] = $details->description;
    //                 }
    //             } else {
    //                 $storeDescriptions['read_list'] = null;
    //             }
    //             if ($descriptions->testimg->isNotEmpty()) {
    //                 $storeDescriptions['images'] = [];
    //                 foreach ($descriptions->testimg as $img) {
    //                     $storeDescriptions['images'][] = url(asset('storage/' . $img->images));
    //                 }
    //             } else {
    //                 $storeDescriptions['images'] = null;
    //             }

    //             array_push($allData, $storeDescriptions);
    //         }
    //         return response()->json(['data' => $allData]);

    //     } else {
    //         $response = ['message' => 'Data Not Found'];
    //         return response()->json($response);
    //     }
    // }

    // 
}