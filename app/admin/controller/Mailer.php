<?php
namespace app\admin\controller;

use app\admin\common\Mail;

class Mailer extends Mail
{
    public function admin()
    {
        if (request()->isPost()){
        
//             halt(request()->param());
            $this->init();
            $this->content();
            $this->replay();
            
            if ($this->send()){
                $this->success('success');
            }else {
                $this->error('error');
            }
        }
        
        return $this->view->fetch();
    }
}