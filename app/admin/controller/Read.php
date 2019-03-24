<?php

namespace app\admin\controller;

use think\Request;
use app\admin\common\Base;
use think\Loader;
use app\admin\model\Read as readModel;
use think\Validate;

class Read extends Base
{
    
    /**
     * 前置操作
     */
//     protected $beforeActionList  = [
//         'mailServe' => ['only' => 'delete'],    //前置操作的方法请勿在前添加空格
//     ];
    
    
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request)
    {
        $read  = db('read')->field('sort', true)->order('sort desc')->paginate(config('conf.page'));
        $count = db('read')->count();
        //search function
        if ($request->isPost()){
            $search  = $request->param();
            //TODO
        }
        
        //list
        $this->view->assign([
            'reads'  => $read,
            'count' => $count,
        ]);
        return $this->view->fetch('read-list');
    }

    /**
     * @return string|\think\response\Json
     * add view page
     */
    public function add()
    {
        //add
        if (\request()->isPost()){
            $data     = input('post.');
            $validate = Loader::validate('read');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $read = new readModel();
            if($read->allowField(true)->save($data)) return json(['code' => 0, 'msg' => '新增成功']);
            return json(['code' => 1, 'msg' => '新增失败']);
        }
        return $this->view->fetch('read-add');
    }

    /**
     * @return string|\think\response\Json
     * update data
     */
    public function edit()
    {
        $id = \request()->param('id');
        if (\request()->isPost()){
            $data     = \request()->param();
            $validate = Loader::validate('read');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $read = new readModel;
            $save = $read->update($data);
            if($save) return json(['code' => 0, 'msg' => '更新成功']);
            return json(['code' => 1, 'msg' => '更新失败']);
        }
        $read = db('read')->find($id);
        $this->assign(['read' => $read]);
        return $this->view->fetch('read-edit');
    }

    public function switches()
    {
        if (\request()->isAjax()){
            $id = \request()->param('id');
            $re = db('read')->find($id);
            if ($id && !empty($re)){
                $is_del = $re['is_del'] == 0 ? 1 : 0;
                $result = readModel::update(['id' => $id, 'is_del' => $is_del]);
                if ($result) return json(['code' => 0, 'msg' => '更新成功']);
                return json(['code' => 0, 'msg' => '更新失败']);
            }
        }
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        if(readModel::destroy($id)){
            $this->success('删除文章成功！',url('admin/read/index'));
        }else{
            $this->error('删除文章失败！');
        }
    }
    
}
