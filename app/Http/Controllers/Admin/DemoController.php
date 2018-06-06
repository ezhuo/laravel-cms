<?php

namespace App\Http\Controllers\Admin;

use App\Models\Frame\Base;
use Illuminate\Http\Request;
use App\Http\Controllers\Frame\AppDataController;

class DemoController extends AppDataController {

    public function __construct(Request $request, Base $model) {
        return parent::__construct($request, $model);
    }

    public function dashboard(Request $request) {
        return response()->view('admin.dashboard.index');
    }

    public function table(Request $request) {
        return response()->view('admin.demo.table');
    }

    public function calendar(Request $request) {
        return response()->view('admin.demo.calendar');
    }

    public function form(Request $request) {
        return response()->view('admin.demo.form');
    }

    public function chart(Request $request) {
        return response()->view('admin.demo.chart');
    }

    public function table_list(Request $request) {
        return response()->view('admin.demo.table-list');
    }

    public function table_list_img(Request $request) {
        return response()->view('admin.demo.table-list');
    }

    public function error404(Request $request) {
        return response()->view('admin.demo.error404');
    }

}