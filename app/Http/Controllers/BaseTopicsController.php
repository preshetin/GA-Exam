<?php namespace App\Http\Controllers;

use App\BaseTopic;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BaseTopicsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$baseTopics = BaseTopic::all()->sortByDesc('updated_at');

        return view('base-topics.index', compact('baseTopics'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('base-topics.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $this->validate($request, [
            'name' => 'required|unique:base_topics',
            'title' => 'required|unique:base_topics'
        ]);

        $baseTopic = BaseTopic::create($request->all());

        \Session::flash('success', $baseTopic->name . ' topic is successfully created.');

        return redirect('admin/base-topics');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$baseTopic = BaseTopic::find($id);

        return view('base-topics.edit', compact('baseTopic'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required'
        ]);

        $baseTopic = BaseTopic::find($id);

        $baseTopic->update($request->all());

        \Session::flash('success', $baseTopic->name . ' topic is successfully updated.');

        return redirect('admin/base-topics');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		BaseTopic::destroy($id);

        \Session::flash('success', 'Topic is successfully deleted.');

        return redirect('admin/base-topics');
	}

}
