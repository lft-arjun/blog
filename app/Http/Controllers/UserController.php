<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreUserPostRequest;

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
    	$user = DB::table('users')->find($id);
    	return $this->response()->json($user->toArray());
    }

    /**
     * Edit User By Id
     *
     * Edit the user with form post value
     * 
     * @param int $id userId
     * @return json {userid, status}
     */
    public function edit(StoreUserPostRequest $userPostRequest, $id)
    {

    }
}
