<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"D:\xampp\htdocs\admin\public/../app/admin\view\mailer\admin.html";i:1515404306;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1515122580;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1515144677;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Alexa-Admin
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/static/admin/css/x-admin.css" media="all">
        <script src="/static/admin/js/echarts.min.js"></script>
    </head>
    <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>基本设置</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
              <ul class="layui-tab-title">
                <li class="layui-this">后台root用户邮箱设置(Tips:每项必填)</li>
              </ul>
              <div class="layui-tab-content" >
                <div class="layui-tab-item layui-show">
                    <form class="layui-form layui-form-pane" action="" method="post">
                    <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>邮箱主机
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="host" autocomplete="off" placeholder="smtp.gmail.com" class="layui-input" value="<?php echo $xml_file['host']; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>端口号
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="port" autocomplete="off" placeholder="25" class="layui-input" value="<?php echo $xml_file['port']; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>用户名
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="username" autocomplete="off" placeholder="xxx@gmail.com" class="layui-input" value="<?php echo $xml_file['username']; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>密码
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="password" autocomplete="off" placeholder="******" class="layui-input" value="<?php echo $xml_file['password']; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>外部标题
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="outtitle" autocomplete="off" placeholder="您好我是Ferre,欢迎注册Alexa_Admin后台" class="layui-input" value="<?php echo $xml_file['outtitle']; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>邮件标题
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="title" autocomplete="off" placeholder="您好我是Ferre,欢迎注册Alexa_Admin后台" class="layui-input" value="<?php echo $xml_file['title']; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>邮件内容
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="content" autocomplete="off" placeholder="Welcome" class="layui-input" value="<?php echo $xml_file['content']; ?>">
                            </div>
                        </div>
                        
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>邮件每行字数
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="line" autocomplete="off" placeholder="50" class="layui-input" value="<?php echo $xml_file['line']; ?>">
                            </div>
                        </div>



                        <div class="layui-form-item">
                            <input class="layui-btn" type="submit" lay-submit="" lay-filter="*" value="保存">
                        </div>
                    </form>
                    <div style="height:100px;"></div>
                </div>


              </div>
            </div>
        </div>
        <script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
<script src="/static/admin/js/x-admin.js"></script>
<script src="/static/admin/js/x-layui.js"></script>

        <script>
            layui.use(['element','layer','form'], function(){
                $ = layui.jquery;//jquery
              lement = layui.element();//面包导航
              layer = layui.layer;//弹出层
              form = layui.form()

              })
            </script>

    </body>
</html>