<?php

namespace app\admin\controller;

use think\Request;
use app\admin\common\Base;
use think\Loader;
use app\admin\model\Article as ArticleModel;
use app\admin\common\Mail;

class Article extends Base
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
        $article = db('article')->field('a.*,b.catename')->alias('a')->join('alexa_category b','a.cate=b.id')->order('a.id desc')->paginate(config('conf.page'));
        
        //search function
        if ($request->isPost()){
            $search  = $request->param();
            
            if (empty($search['start']) || empty($search['end'])){
                $article = db('article')->field('a.*,b.catename')->alias('a')->join('alexa_category b','a.cate=b.id')->order('a.id desc')
                                        ->where('title', 'like', '%'.$search['title'].'%')->paginate(config('conf.page'));
                
            }else {
                $article = db('article')->field('a.*,b.catename')->alias('a')->join('alexa_category b','a.cate=b.id')->order('a.id desc')
                                        ->where('time', 'between', [strtotime($search['start']), strtotime($search['end'])])
                                        ->where('title', 'like', '%'.$search['title'].'%')->paginate(config('conf.page'));
                
            }
        }
        
        //list
        $this->view->assign('article', $article);
        return $this->view->fetch('article-list');
    }


    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function add(Request $request)
    {
        //add
        if ($request->isPost()){
            $data = input('post.');
            $data['time'] = time();    //写入时间戳
            $validate = Loader::validate('Article');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $article = new ArticleModel();
            if($article->save($data)){
                $this->redirect('admin/article/index');
            }else{
                $this->error('添加失败');
            }
            return;
        }
        //page
        $cate = db('category')->field(['id', 'catename'])->order('sort', 'asc')->select();
        $this->view->assign('cate', $cate);
        return $this->view->fetch('article-add');
    }
    
    public function upload()
    {
        dump($_FILES);die;
    }


    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit(Request $request, $id)
    {
        if ($request->isPost()){
            $data = $request->param();
            $validate = Loader::validate('Article');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $article = new ArticleModel;
            $save=$article->update($data);
            if($save){
                $this->success('修改文章成功！',url('admin/article/index'));
            }else{
                $this->error('修改文章失败！');
            }
            return;
        }
        //cate data && article data
        $cate    = db('category')->field(['id', 'catename'])->order('sort', 'asc')->select();
        $article = db('article')->find($id);
        $this->assign(['cate' => $cate, 'article' => $article]);
        return $this->view->fetch('article-edit');
    }


    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        if(ArticleModel::destroy($id)){
            $this->success('删除文章成功！',url('admin/article/index'));
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
