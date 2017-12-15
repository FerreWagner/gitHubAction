<?php
namespace app\admin\controller;

use think\Request;
use app\admin\common\Base;
use think\Session;

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

            $admin_data = input('post.');
            $res = db('admin')->where('username', $admin_data['username'])->select();
            
            //admin log data add
            db('alog')->insert([
                'type' => $res ? 1 : 0,
                'name' => $admin_data['username'],
                'ip'   => $_SERVER['REMOTE_ADDR'],
                'time' => time()
            ]);
            
            if (!$res){
                $this->error('Error,Dear');
            }elseif ($res[0]['password'] == sha1(md5($admin_data['password'].'alexa'))){
                
                //admin data detail
                db('admin')->where('username', $res[0]['username'])->setInc('count');
                db('admin')->where('username', $res[0]['username'])->update(['lasttime' => date("Y-m-d H:i:s",time())]);
                Session::set('user_name', $res[0]['username']);
                Session::set('user_data', $res[0]);
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