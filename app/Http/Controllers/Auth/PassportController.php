<?php

namespace App\Http\Controllers\Auth;

use App\Models\Data\SysLogs;
use Illuminate\Http\Request;
use App\Models\Auth\Auth;
use App\Models\Auth\Tokens;
use App\Models\Data\SysMenu;
use App\Http\Controllers\Frame\AppDataController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class PassportController extends AppDataController {
    public function __construct(Request $request, Auth $model) {
        parent::__construct($request, $model);
    }

    public function login(Request $request) {
        Session::put(CONST_SESSION_ID, 'admin');
        return response()->view('theme.passport.login');
    }

    public function reg(Request $request) {
        return response()->view('theme.passport.reg');
    }
}
