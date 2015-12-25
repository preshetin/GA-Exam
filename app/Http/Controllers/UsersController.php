<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

use Illuminate\Http\Request;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = User::all()->sortByDesc('updated_at');

        $total_users = count($users);
        $total_replies = \App\Reply::all()->count();

        return view('users.index', compact('users', 'total_users' , 'total_replies'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $topics = \App\Topic::has('questions')->get();

        $user = \App\User::find($id);

        return view('users.show')->with([
            'topics' => $topics,
            'user' => $user
        ]);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	/**
	 * Process datatables ajax request.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyData()
	{
		$users = User::select('*');

		return Datatables::of($users)
	//			->editColumn($user)
				->make(true);
	}

}
