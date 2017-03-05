<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AjaxController extends BaseController
{
    public function index()
    {
        return view("ajax");
    }

    public function get_ajax_data() {

    }
}
