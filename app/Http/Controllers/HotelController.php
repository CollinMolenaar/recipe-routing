<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    private array $data = [
        ['city' => 'Amsterdam', 'hotel' => 'Crown Plaza',  'availability' => 5],
        ['city' => 'Amsterdam', 'hotel' => 'Hotel Bliss',  'availability' => 28],
        ['city' => 'Beijing',   'hotel' => 'Sunset Lodge', 'availability' => 35],
        ['city' => 'Beijing',   'hotel' => 'The New View', 'availability' => 6],
        ['city' => 'Chicago',   'hotel' => 'Hotel Elite',  'availability' => 10]
    ];
        /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
 
        //
    }
    public function __invoke(Request $request)
    {
            //
    }

    public function index($city)
    {
        if (isset($_GET["order"])) {
            if ($_GET["order"] == "availability") {
                $key_values = array_column($numbers, 'availability'); 
                array_multisort($key_values, SORT_ASC, $numbers);
            }
        }
        foreach ($data as $hotels) {
            if ($hotels['city'] == $city) {
                echo $hotels['hotel'] . "<br>";
            }
        }
    }
}
