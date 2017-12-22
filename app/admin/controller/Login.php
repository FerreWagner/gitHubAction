<?php
namespace app\admin\controller;

use think\Request;
use app\admin\common\Base;
use think\Session;
use think\Validate;
use app\admin\model\Admin as AdminModel;

class Login extends Base
{
    
    /**
     * 显示资源列表 && 登录1
     *
     * @return \think\Response
     */
    
    public function index()
    {
        $this->alreadyLogin();
        return $this->view->fetch('login');
    }
    
    
    /**
     * @param Request $request
     */
    
    public function login(Request $request)
    {
        if ($request->isPost()){
            
            $token      = Validate::token('__token__','',['__token__'=>input('param.__token__')]);    //CSRF validate
            if (!$token) die('CSRF ATTACK.');
            
            $admin_data = input('post.');
            $res = AdminModel::where('username', $admin_data['username'])->find(1);
            
            //admin log data add
            db('alog')->insert([
                'type' => $res ? 1 : 0,
                'name' => $admin_data['username'],
                'ip'   => $_SERVER['REMOTE_ADDR'],
                'time' => time()
            ]);
            
            if (!$res){
                $this->error('Error,Dear');
            }elseif ($res['password'] == sha1($admin_data['password'])){
                
                //admin data detail
                AdminModel::where('username', $res['username'])->setInc('count');
                AdminModel::where('username', $res['username'])->update(['update_time' => time()]);
                
                //add session
                Session::set('user_name', $res['username']);
                Session::set('user_data', $res);
                return $this->redirect('admin/index/index');
                
            }else {
                $this->error('Error,Dear');
            }
        }
    }
    
    
    /**
     * logout
     */
    
    public function logout()
    {
        Session::delete('user_name');
        Session::delete('user_data');
        $this->success('Logout Success.Dear.', 'admin/login/index');
    }
}