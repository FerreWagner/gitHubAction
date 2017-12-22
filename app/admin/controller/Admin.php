<?php

namespace app\admin\controller;


use app\admin\common\Base;
use app\admin\model\Admin as AdminModel;
use think\Request;


class Admin extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        
        $admin = AdminModel::all();
        $this->view->assign('admin', $admin);
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
            $update['password'] = empty($update['password']) ? $admin['password'] : $update['password'];
            
            $res = AdminModel::update($update);
            $res ? $this->redirect('admin/admin/index') : $this->error('数据更新失败');
        }
        
        
        $this->view->assign('admin', $admin);
        return $this->view->fetch('admin-edit');
    }
    
    public function trans($id)
    {
        $admin = AdminModel::where('id', $id)->field(['switch', 'id'])->find(1);
        $admin['switch'] = $admin['switch'] == 'true' ? 'false' : 'true';
        $res = AdminModel::update(['switch' => $admin['switch']], ['id' => $admin['id']]); //update
        
        $res ? $this->redirect('admin/admin/index') : $this->error('更新失败');
        
    }
    
    
    
    /**
     * admin log data list
     */
    public function logList()
    {
        $log_data = db('alog')->paginate(8);
        $this->view->assign('alog', $log_data);
        return $this->view->fetch('admin-log');
    }
    

    
}
