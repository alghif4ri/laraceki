<?php

namespace App\Http\Controllers;

use App\City;
use App\Courier;
use App\Province;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $province = $this->getProvince();
        $courier = $this->getCourier();
        return view('home', compact('province', 'courier'));
    }

    public function store(Request $request)
    {
        $courier = $request->input('courier');

        if ($courier) {
            $result = [];

            foreach ($courier as $row) {
                $ongkir = RajaOngkir::ongkosKirim([
                    'origin' => $request->origin_city,
                    'destination' => $request->destination_city,
                    'weight' => 1300,
                    'courier' => $row,
                ])->get();
                $result[] = $ongkir;
            }
        }
        return $result;
    }

    public function getCourier()
    {
        return Courier::all();
    }

    public function getProvince()
    {
        return Province::pluck('title', 'code');
    }

    public function getCities($id)
    {
        return City::where('province_code', $id)->pluck('title', 'code');
    }

    public function searchCities(Request $request)
    {
        $search = $request->search;

        if (empty($search)) {
            $cities = City::orderby('title', 'asc')
                ->select('id', 'title')
                ->limit(5)
                ->get();
        } else {
            $cities = City::orderby('title', 'asc')
                ->where('title', 'like', '%' . $search . '%')
                ->select('id', 'title')
                ->limit(5)
                ->get();
        }

        $response = [];

        foreach ($cities as $city) {
            $response[] = [
                'id' => $city->id,
                'text' => $city->title
            ];
        }

        return json_encode($response);
    }
}
