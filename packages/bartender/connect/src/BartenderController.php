<?php

namespace Bartender\Connect;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class BartenderController extends Controller
{
    public function add($elem1, $elem2){
        $result = $elem1 + $elem2;
        return $result;
    }
}
