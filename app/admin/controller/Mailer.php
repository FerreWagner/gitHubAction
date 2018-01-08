<?php
namespace app\admin\controller;

use app\admin\common\Mail;

class Mailer extends Mail
{
    public function admin()
    {
        if (request()->isPost()){
            
            $this->getParam();
            $this->init();
            
            $this->content();
            $this->setXml();
//             $this->replay();
//             if ($this->send()){
//                 $this->success('success');
//             }else {
//                 $this->error('error');
//             }
        }
        
        
        $this->view->assign([
            'host'     => $this->host,
            'port'     => $this->port,
            'username' => $this->username,
            'password' => $this->password,
            'outtitle' => $this->outtitle,
            'title'    => $this->title,
            'content'  => $this->content,
            'line'     => $this->line,
            
        ]);
        
        return $this->view->fetch();
    }
}