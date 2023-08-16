<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use MongoDB\Client;

class DataController extends Controller
{
    public function index()
    {
        $client = new Client(env('MONGO_CONNECTION_STRING'));
        $collection = $client->Portfolio__Data->Portfolio__Data; // Replace 'my_database' with your database name

        $data = $collection->find([]);

        return response()->json(iterator_to_array($data));
    }
}

