<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cases;

class ApiController extends Controller
{
  public function getAllCases() {
    // logic to get all case goes here
    $cases = Cases::get()->toJson(JSON_PRETTY_PRINT);
    return response($cases, 200);
  }

  public function createCase(Request $request) {
    // logic to create a case record goes here
    $case = new Cases;
    $case->province = $request->province;
    $case->city = $request->city;
    $case->age = $request->age;
    $case->travel_history = $request->travel_history;
    $case->save();

    return response()->json([
        "message" => "student record created"
    ], 201);
  }

  public function getCase($id) {
    // logic to get a case record goes here
  }
}
