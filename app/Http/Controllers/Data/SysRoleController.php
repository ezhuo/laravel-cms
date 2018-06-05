<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Models\Data\SysRole;
use App\Http\Controllers\Frame\AppDataController;

class SysRoleController extends AppDataController {

    public function __construct(Request $request, SysRole $model) {
        parent::__construct($request, $model);
        $this->middleware('auth');
    }

    public function get_where($request, $dataset) {
        $where = parent::get_where($request, $dataset); // TODO: Change the autogenerated stub
        if ($request->__user->role_id != 1) {
            $where['neq']['role_id'] = 1;
        }
        return $where;
    }

    public function store(Request $request) {
        return parent::store($request);
    }

    // 新增之后
    protected function after_insert($result) {
        $this->after_update($result);
        return true;
    }

    //更新之后
    protected function after_update($request, $dataset, $id) {
        return false;
//        if ((int)$id > 0) {
//            $menu_list = $_REQUEST['menu_ids'];
//            if (is_string($menu_list)) {
//                $menu_list = explode(',', $menu_list);
//            }
//            $arr = array();
//            foreach ($menu_list as $val) {
//                $tmp = array();
//                $tmp['role_id'] = $id;
//                $tmp['menu_id'] = $val;
//                $tmp['child_key'] = '1,2,3,4,5,6,7';
//                $arr[] = $tmp;
//            }
//            $rm = M('SysRoleMenu');
//            $where['role_id'] = $id;
//            $rm->where($where)->delete();
////            print_r($rm->getLastSql());
//            $res = $rm->addAll($arr);
////            print_r($rm->getLastSql());
//            return $res;
//        }
//        return true;
    }


    protected function after_delete($result) {
        return false;
//        if ((int)$result < 1) return false;
//        $rm = D('SysRoleMenu');
//        $where['role_id'] = $result;
//        $rm->where($where)->delete();
//        return true;
    }

}
