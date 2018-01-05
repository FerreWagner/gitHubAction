<?php
namespace app\admin\common;

use think\Controller;
use PHPMailer\PHPMailer\PHPMailer;

class Mail extends Controller
{
    protected $mail;
    
    /**
     * 
     * 前台可调用方法：信息体；接收方；名，接收方
     */
    protected function init()
    {
        $this->mail = new PHPMailer();
        
        //设置字符集
        $this->mail->CharSet = "utf-8";
        
        $this->mail->IsSMTP();
        
        $this->mail->SMTPAuth      = true;
        $this->mail->SMTPKeepAlive = true;
        
        $this->mail->SMTPSecure = "SSL"; #待开发
        
        $this->mail->Host       = config('mail.host');
        $this->mail->Port       = config('mail.port');
        
        //填写你的邮箱账号和密码
        $this->mail->Username   = config('mail.username');
        $this->mail->Password   = config('mail.password');
        
        //设置发送方，最好不要伪造地址
        $this->mail->From       = config('mail.username');
    }
    
    
    protected function content()
    {
        
        $outtitle               = request()->param('outtitle');
        $title                  = request()->param('title');
        $content                = request()->param('content');
        $line                   = request()->param('line');
        
        $this->mail->FromName   = $title ? $title : 'Hello';
        //标题，内容，和备用内容
        $this->mail->Subject    = $title ? $title : 'Hello';
        $this->mail->Body       = $content ? $content : 'Nice To Meet You';
        
        //如果邮件不支持HTML格式，则替换成该纯文本模式邮件
        $this->mail->AltBody    = time();
        $this->mail->IsHTML(true);
        
        // 设置邮件每行字符数
        $this->mail->WordWrap   = $line ? $line : 20; 
        //$this->mail->MsgHTML($body);
    }
    
    
    protected function replay()
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
    
    
    protected function send()
    {
        //通过Send方法发送邮件,根据发送结果做相应处理
        return $this->mail->send();
    }
    
    
}
