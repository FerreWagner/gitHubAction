<?php
namespace app\admin\common;

use PHPMailer\PHPMailer\PHPMailer;
use app\admin\model\System;

class Mail extends Base
{
    #TIPS:QQ邮箱需要做代理邮件的开启，且密码自动生成
    #TIPS:当调用邮件服务类时,初始化设置为：getParam(); init();content();setXml();后台使用服务时，调用replay和send方法；
    
    
    //phpmailer instance
    protected $mail;
    
    //email set
    protected $host;
    protected $port;
    protected $username;
    protected $password;
    //email info
    protected $outtitle;
    protected $title;
    protected $content;
    protected $line;
    
    
    
    /**
     * 
     * 前台可调用方法：信息体；接收方；名，接收方
     */
    public function init()
    {
        
        $this->mail                = new PHPMailer();
        
        //设置字符集
        $this->mail->CharSet       = "utf-8";
        
        $this->mail->IsSMTP();
        
        $this->mail->SMTPAuth      = true;
        $this->mail->SMTPKeepAlive = true;
        
        $this->mail->SMTPSecure    = "SSL";
        
        //初始化，不必在意
        $this->mail->Host          = $this->host ? $this->host : 'smtp.163.com';
        $this->mail->Port          = $this->port ? $this->port : '25';
        
        //填写你的邮箱账号和密码
        $this->mail->Username      = $this->username ? $this->username : '123@163.com';
        $this->mail->Password      = $this->password ? $this->password : '1234';
        
        //设置发送方，最好不要伪造地址
        $this->mail->From          = $this->username ? $this->username : '123@163.com';
    }
    
    
    /**
     * 消息体
     */
    public function content()
    {
        
        $this->mail->FromName      = $this->outtitle ? $this->outtitle : 'Hello';
        //标题，内容，和备用内容
        $this->mail->Subject       = $this->title ? $this->title : 'Hello';
        $this->mail->Body          = $this->content ? $this->content : 'Nice To Meet You';
        
        //如果邮件不支持HTML格式，则替换成该纯文本模式邮件
        $this->mail->AltBody       = time();
        $this->mail->IsHTML(true);
        
        // 设置邮件每行字符数
        $this->mail->WordWrap      = $this->line ? $this->line : 20; 
        //$this->mail->MsgHTML($body);
    }
    

    /**
     * 回复体
     */
    public function replay()
    {
        //设置回复地址
        $this->mail->AddReplyTo("回复地址","from");
    
        //设置收件的地址(to可随意)
        //TODO
        $this->mail->AddAddress("1573646491@qq.com","Alexa-Admin");
        $this->mail->AddAddress("收件人","to");
    
        //添加附件，此处附件与脚本位于相同目录下,否则填写完整路径
        //$this->mail->AddAttachment("attachment.zip");
    
        //使用HTML格式发送邮件
        $this->mail->IsHTML(true);
    }
    
    
    /**
     * 通过Send方法发送邮件,根据发送结果做相应处理
     */
    public function send()
    {
        return $this->mail->send();
    }
    
    /**
     * 获取xml数据
     * TODO
     */
    public function getXml()
    {
        $xml = simplexml_load_file('');
    }
    
    
    
    
    /**
     * 表单参数获取
     */
    public function getParam()
    {
        $this->host      = request()->param('host');
        $this->port      = request()->param('port');
        $this->username  = request()->param('username');
        $this->password  = request()->param('password');
        $this->outtitle  = request()->param('outtitle');
        $this->title     = request()->param('title');
        $this->content   = request()->param('content');
        $this->line      = request()->param('line');
    }
    
    
    /**
     * XML init
     * xml配置文件写入
     */
    public function setXml($module)
    {
        //文件处理
        $file_name = $module.'_mail.xml';
        if (!file_exists($file_name)){
    
            $xml_prepare = '<?xml version="1.0" encoding="UTF-8"?><'.$module.'></'.$module.'>';
            $file_return = file_put_contents($file_name, $xml_prepare);
    
            if (!$file_return) $this->error('XML '.$module.' file write error.');
        }
    
        $xml = simplexml_load_file($file_name);
    
        //写入XML
        $xml->host     = $this->host ? $this->host : 'smtp.163.com';
        $xml->port     = $this->port ? $this->port : '25';
        $xml->username = $this->username ? $this->username : '123@163.com';
        $xml->password = $this->password ? $this->password : '1234';
        $xml->outtitle = $this->outtitle ? $this->outtitle : '你好';
        $xml->title    = $this->title ? $this->title : '你好,我是Ferre';
        $xml->content  = $this->content ? $this->content : '这里是Alexa-Admin.';
        $xml->line     = $this->line ? $this->line : 20;
    
        $res = $xml->asXML($file_name);
    }
    
    
    /*
     * 邮件开启服务
     */
    public static function isMail()
    {
        $is_mail_obj = System::field('is_mail')->find(1);
        return $is_mail_obj->is_mail;
    }
    
    
}
