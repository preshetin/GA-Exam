<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    /**
     * About static page.
     *
     */
    public function about()
    {
        return view('pages.about');
    }

    public function aboutGaiqExam()
    {
        return view('pages.about-gaiq-exam');
    }

}
