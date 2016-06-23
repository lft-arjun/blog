<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
	/**
	 * Get all user
	 *
	 * Fetch all the user available on system
	 * 
	 * @return Response
	 */
    public function allUser()
    {
    	return $this->response()->json(['id'=> 1, 'name' => 'arju ']);
    }
    /**
     * Get user detail by Id
     *
     * Fetch user detail by id from row
     * 
     * @param  int $id
     * @return json Response
     */
    public function show($id)
    {
    	return $this->response()->json(['id'=> 1, 'name' => 'arju ']);
    }
}
