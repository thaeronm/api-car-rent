<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\Http\Resources\LocationResource;

class LocationController extends Controller
{
    public function index()
    {
    	return LocationResource::collection(Location::all());
    }
}
