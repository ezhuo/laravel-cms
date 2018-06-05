<?php

namespace App\Http\Controllers\Web;

use App\Models\Frame\Base;
use Illuminate\Http\Request;
use App\Http\Controllers\Frame\AppDataController;
use Illuminate\Support\Facades\Session;

class IndexController extends AppDataController {

    public function __construct(Request $request, Base $model) {
        return parent::__construct($request, $model);
    }

    public function index(Request $request) {
        return response()->view('web.index');
    }

    public function err_404(Request $request) {
        return abort(404);
    }

}