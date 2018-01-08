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
            $this->setAdminXml();
//             $this->replay();
//             if ($this->send()){
//                 $this->success('success');
//             }else {
//                 $this->error('error');
//             }
        }
        
        if (file_exists('admin_mail.xml')){
            $xml_file = simplexml_load_file('admin_mail.xml');
            $xml_file = json_decode(json_encode($xml_file), true);
        }else {
            //data init
            $xml_file = $this->xmlInit();
        }
        
        $this->view->assign('xml_file', $xml_file);
        
        return $this->view->fetch();
    }
    
    public function index()
    {
        if (request()->isPost()){
        
            $this->getParam();
            $this->init();
        
            $this->content();
            $this->setIndexXml();
        }
        
        if (file_exists('index_mail.xml')){
            $xml_file = simplexml_load_file('index_mail.xml');
            $xml_file = json_decode(json_encode($xml_file), true);
        }else {
            //data init
            $xml_file = $this->xmlInit();
        }
        
        $this->view->assign('xml_file', $xml_file);
        
        return $this->view->fetch();
    }
    
    public function xmlInit()
    {
        return [
            'host'     => '',
            'port'     => '',
            'username' => '',
            'password' => '',
            'outtitle' => '',
            'title'    => '',
            'content'  => '',
            'line'     => '',
        ];
    }
}