<?php

namespace app\admin\controller;


use app\admin\common\Base;
use app\admin\model\Admin as AdminModel;
use think\Request;
use think\Loader;


class Admin extends Base
{
    
    #Tips:超级管理员为root权限，理论仅允许开放一个账户，请谨慎添加
    
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        
        $admin = AdminModel::all();
        $count = AdminModel::count();
        
        $this->view->assign([
            'admin' => $admin,
            'count' => $count,
        ]);
        
        return $this->view->fetch('admin-list');
        
    }
    
    /**
     * 
     * @param Request $request
     * @param unknown $id
     * @return string
     */
    public function edit(Request $request, $id)
    {
        $admin = AdminModel::find(request()->input($id));
        
        if ($request->isPost()){
            $update = $request->param();
            $update['password']    = empty($update['password']) ? $admin['password'] : sha1($update['password']);
            $update['update_time'] = time();
            
            $res = AdminModel::update($update);
            $res ? $this->redirect('admin/admin/index') : $this->error('数据更新失败');
        }
        
        
        $this->view->assign('admin', $admin);
        return $this->view->fetch('admin-edit');
    }
    
    
    /**
     * 
     * @param Request $request
     * @return string
     */
    public function add(Request $request)
    {
        if ($request->isPost()){
            $data = $request->param();
            
            if ($data['password'] != $data['repass']) $this->error('两次密填写不一致');
            
            $data['password']      = sha1($data['password']);
            $data['create_time']   = time();
            $data['update_time']   = time();
            
            
            $validate = Loader::validate('Admin');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            
            $model = new AdminModel();
            $res   = $model->allowField(true)->save($data);
            $res ? $this->redirect('admin/admin/index') : $this->error('管理员添加失败.');
        }
        
        return $this->view->fetch('admin-add');
    }
    
    public function delete($id)
    {
        $res = AdminModel::destroy($id);
        $res ? $this->redirect('admin/admin/index') : $this->error('删除管理员失败');
    }
    
    
    /**
     * admin switch
     * @param unknown $id
     */
    public function trans($id)
    {
        $admin = AdminModel::where('id', $id)->field(['switch', 'id'])->find();
        $admin['switch'] = $admin['switch'] == 'true' ? 'false' : 'true';
        $res = AdminModel::update(['switch' => $admin['switch']], ['id' => $admin['id']]); //update
        
        $res ? $this->redirect('admin/admin/index') : $this->error('更新失败');
    }
    
    
    
    /**
     * admin log data list
     */
    public function logList()
    {
        $log_data = db('alog')->where('name', session('user_name'))->paginate(8);
        
        if (session('user_data')['role'] == 0){
            $log_data = db('alog')->paginate(8);
        }
        
        $this->view->assign('alog', $log_data);
        return $this->view->fetch('admin-log');
    }
    

    
}
