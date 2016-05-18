<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yourController extends Controller
{
	public function saveApiData()
	{
		$url = "https://api.github.com/users/nategood";
		$response = \Httpful\Request::get($url)
		->expectsJson()
		->withXTrivialHeader('Just as a demo')
		->send();

		echo "{$response->body->name} joined GitHub on " .
		date('M jS', strtotime($response->body->created_at)) ."\n";

	}
}

