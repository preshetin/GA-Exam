<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class EmailListController extends Controller {

	public function index()
    {
        $users = User::all();

        return view('email_list.index', compact('users'));
    }
}
