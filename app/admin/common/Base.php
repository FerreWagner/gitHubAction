<?php
namespace app\admin\common;

use think\Controller;
use think\Request;

class Base extends Controller
{
    public function _initialize()
    {
        parent::_initialize();
        //detail login
        $request = Request::instance();
        if ($request->module() == 'admin' && $request->controller() != 'Login'){    //except Login action,all admin function need validate
            $this->isLogin();
        }

    }

    protected function isLogin()
    {
        //use helper function to validate
        if (empty(\session('user_name'))){
            $this->error('Pls Login First.Dear.', 'admin/login/index');
        }
    }

    protected function alreadyLogin()
    {
        if (!empty(\session('user_name'))){
            $this->error('You Already Login.Dear', 'admin/index/index');
        }
    }

}
