<?php

namespace app\admin\controller;

use think\Request;
use app\admin\common\Base;
use think\Loader;
use app\admin\model\read as readModel;
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
            if($read->allowField(true)->save($data)){
                return json(['code' => 0, 'msg' => '新增成功']);
            }
            return json(['code' => 1, 'msg' => '新增失败']);
        }
        return $this->view->fetch('read-add');
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
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
            if($save){
                return json(['code' => 0, 'msg' => '更新成功']);
            }
            return json(['code' => 1, 'msg' => '更新失败']);
        }
        $read = db('read')->find($id);
        $this->assign(['read' => $read]);
        return $this->view->fetch('read-edit');
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit1(Request $request, $id)
    {
        if ($request->isPost()){
            $data = $request->param();
            $validate = Loader::validate('read');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $read = new readModel;
            $save=$read->update($data);
            if($save){
                $this->success('修改文章成功！',url('admin/read/index'));
            }else{
                $this->error('修改文章失败！');
            }
            return;
        }
        //cate data && read data
        $cate    = db('category')->field(['id', 'catename'])->order('sort', 'asc')->select();
        $read = db('read')->find($id);
        
        $type    = readModel::getSystem()['type'];   //缩略图type
        
        //当然这里只是做简略处理，为了不让read表性能变低，我们将type字段分离到system表，如果在三方服务器和本地均存有图片，那么我们可以通过判断路径名来确定是否添加http://这样的完整路径
        $read['thumb'] = $type == 0 ? $read['thumb'] : 'http://'.$read['thumb'];
        $this->assign(['cate' => $cate, 'read' => $read]);
        return $this->view->fetch('read-edit');
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
    
    /**
     * 邮件服务
     */
//     public function mailServe()
//     {
//         if (Mail::isMail() == config('mail.close')) return true;
        
//         $user_email = session('user_data')['email'];
// //         halt($user_email);
//         $mail = new Mail();
//         $mail->getXml('admin');
//         $mail->recive = $user_email;
//         $mail->init();
//         $mail->content();
//         $mail->replay();
//         if (!$mail->send()){
//             $this->error('Mail Server Error.');
//         }
        
//     }
}
