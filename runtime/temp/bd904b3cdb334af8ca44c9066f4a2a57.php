<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"D:\xampp\htdocs\admin\public/../app/admin\view\index\welcome.html";i:1514949365;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1515122580;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1514950800;}*/ ?>
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
        <link rel="stylesheet" href="__STATIC__/css/x-admin.css" media="all">
        <script src="__STATIC__/js/echarts.min.js"></script>
    </head>
<script src="__STATIC__/js/echarts.common.min.js"></script>
    <body>
        <div class="x-body">
            <blockquote class="layui-elem-quote">
                欢迎使用x-admin 后台模版！<span class="f-14">v1.0</span>官方交流群： 519492808
            </blockquote>
            <p>登录次数：<?php echo session('user_data.count'); ?></p>
            <p>登录IP：<?php echo $_SERVER['REMOTE_ADDR']; ?>  上次登录时间： <?php echo session('user_data.update_time'); ?></p>
            <fieldset class="layui-elem-field layui-field-title site-title">
              <legend><a name="default">信息统计</a></legend>
            </fieldset>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>统计</th>
                        <th>Article</th>
                        <th>图片库</th>
                        <th>Other</th>
                        <th>用户</th>
                        <th>管理员</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>总数</td>
                        <td>92</td>
                        <td>9</td>
                        <td>0</td>
                        <td>8</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>今日</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>昨日</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>本周</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>本月</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th colspan="2" scope="col">服务器信息</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th width="30%">服务器计算机名</th>
                        <td><span id="lbServerName"><?php echo $_SERVER['REMOTE_ADDR']; ?></span></td>
                    </tr>
                    <tr>
                        <td>服务器IP地址</td>
                        <td><?php echo $_SERVER["SERVER_ADDR"]; ?></td>
                    </tr>
                    <tr>
                        <td>服务器域名</td>
                        <td><?php echo $_SERVER['HTTP_HOST']; ?></td>
                    </tr>
                    <tr>
                        <td>服务器端口 </td>
                        <td><?php echo $_SERVER["SERVER_PORT"]; ?></td>
                    </tr>
                    <tr>
                        <td>服务器版本 </td>
                        <td><?php echo $_SERVER ['SERVER_SOFTWARE']; ?></td>
                    </tr>
                    <tr>
                        <td>本文件所在文件夹 </td>
                        <td><?php echo dirname(__FILE__);?></td>
                    </tr>
                    <tr>
                        <td>服务器操作系统 </td>
                        <td><?php echo PHP_OS;?></td>
                    </tr>
                    <tr>
                        <td>系统所在文件夹 </td>
                        <td><?php echo $_SERVER['DOCUMENT_ROOT']; ?></td>
                    </tr>
                    <tr>
                        <td>脚本运行最大内存 </td>
                        <td><?php echo get_cfg_var ("memory_limit")?get_cfg_var("memory_limit"):"无"?></td>
                    </tr>
                    <tr>
                        <td>最大执行时间</td>
                        <td><?php echo get_cfg_var("max_execution_time")."秒 ";?></td>
                    </tr>
                    <tr>
                        <td>最大上传限制</td>
                        <td><?php echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件";?></td>
                    </tr>
                    <tr>
                        <td>MYSQL数据库持续连接</td>
                        <td><?php echo @get_cfg_var("mysql.allow_persistent")?"是 ":"否"; ?></td>
                    </tr>
                    <tr>
                        <td>MYSQL最大连接数</td>
                        <td><?php echo @get_cfg_var("mysql.max_links")==-1 ? "不限" : @get_cfg_var("mysql.max_links");?></td>
                    </tr>
                    <tr>
                        <td>服务器的语言种类 </td>
                        <td><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></td>
                    </tr>
                    <tr>
                        <td>PHP 版本 </td>
                        <td><?php echo PHP_VERSION;?></td>
                    </tr>
                    <tr>
                        <td>服务器当前时间 </td>
                        <td><?php echo date('Y-m-d H:i:s',time());?></td>
                    </tr>
                    <tr>
                        <td>服务器浏览器版本 </td>
                        <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
                    </tr>
                    <tr>
                        <td>服务器上次启动到现在已运行 </td>
                        <td>7210分钟</td>
                    </tr>
                    <tr>
                        <td>内存存在量 </td>
                        <td><?php echo memory_get_usage();?></td>
                    </tr>
                    <tr>
                        <td>ZEND 引擎版本 </td>
                        <td><?php echo zend_version()?></td>
                    </tr>
                    <tr>
                        <td>当前SessionID </td>
                        <td><?php echo session_id();?></td>
                    </tr>
                    <tr>
                        <td>当前系统用户名 </td>
                        <td><?php echo \think\Session::get('user_name'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="layui-footer footer footer-demo">
            <div class="layui-main">
                <p>感谢layui,百度Echarts,jquery</p>
                <p>
                    <a href="/">
                        Copyright ©2017 x-admin v2.3 All Rights Reserved.
                    </a>
                </p>
                <p>
                    <a href="__STATIC__/" target="_blank">
                        本后台系统由X前端框架提供前端技术支持
                    </a>
                </p>
            </div>
        </div>
                <script src="__STATIC__/js/jquery.min.js"></script>
        <script src="__STATIC__/lib/layui/layui.js" charset="utf-8"></script>
        <script src="__STATIC__/js/x-admin.js"></script>
        <script src="__STATIC__/js/x-layui.js"></script>
        

    </body>
</html>