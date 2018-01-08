<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\xampp\htdocs\admin\public/../app/admin\view\system\link-edit.html";i:1511253490;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1514950809;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1514950800;}*/ ?>
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
        <link rel="shortcut icon" href="/logo.png" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="__STATIC__/css/x-admin.css" media="all">
        <script src="__STATIC__/js/echarts.common.min.js"></script>
    </head>

    
    <body>
        <div class="x-body">
            <form class="layui-form" method="post" action="<?php echo url('system/linkupdate'); ?>">
                <input type="hidden" name="id" value="<?php echo $link['id']; ?>">
                <div class="layui-form-item">
                    <label for="name" class="layui-form-label">
                        <span class="x-red">*</span>链接名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="name" name="name" required="" lay-verify="required" autocomplete="off"  value="<?php echo $link['name']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="link" class="layui-form-label">
                        <span class="x-red">*</span>URL
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="link" name="url" required="" lay-verify="required"
                        autocomplete="off" value="<?php echo $link['url']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="sort" class="layui-form-label">
                        <span class="x-red">*</span>排序
                    </label>
                    <div class="layui-input-inline">
                        <input type="number" id="sort" name="sort" required="" lay-verify="required"
                        autocomplete="off" value="<?php echo $link['sort']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <input class="layui-btn" type="submit" lay-filter="save" lay-submit="">
                </div>
            </form>
        </div>

                                <script src="__STATIC__/js/jquery.min.js"></script>
        <script src="__STATIC__/lib/layui/layui.js" charset="utf-8"></script>
        <script src="__STATIC__/js/x-admin.js"></script>
        <script src="__STATIC__/js/x-layui.js"></script>
        



        <script>
            layui.use(['form','layer'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer;
            

              //监听提交
              
              
            });
        </script>
    </body>

</html>