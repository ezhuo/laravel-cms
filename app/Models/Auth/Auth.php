<?php

namespace App\Models\Auth;

use App\Models\Frame\Data;
use App\Models\Data\Canton;
use Session;
use DB;

class Auth extends Data {

    protected $table = DB_PREFIX . '';

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
        return;
    }

    public static function check() {
        if (Session::has(CONST_SESSION_ID)) {
            return Session::get(CONST_SESSION_ID);
        }
        return false;
    }

    public static function login($request) {
        $user_name = $request['name'];
        $pwd = $request['password'];
        $account = null;
        if (empty($user_name) || empty($pwd)) {
            return ['account' => $account, 'code' => 201];
        }

        $where['login_username'] = $user_name;
        $where['login_pwd'] = password_encode($pwd);
        $where['status'] = 1;

        $account = DB::table(DB_PREFIX . 'sys_account')->where($where)
            ->first([
                "account_id as id", "canton_id", "canton_fdn",
                "login_username", "true_name", "tel", "email",
                "resthome_id", "role_id", "end_time", "images"
            ]);
        if (empty($account)) {
            return ['account' => $account, 'code' => 202];
        }

        $account->role_id = $account->role_id . '';
        $account->admin = ($account->role_id == '1');
        $account->style = $request['login_type'];
        $account->sessionid = uniqid();
        $account->resthome_name = "";
        if (!empty($account->canton_fdn)) {
            $account->canton_name = Canton::get_name_byfdn($account->canton_fdn);
        }
        return ['account' => $account, 'code' => 200];
    }

}
