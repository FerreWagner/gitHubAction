<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"D:\xampp\htdocs\admin\public/../app/admin\view\index\index.html";i:1512109940;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1515122580;s:58:"D:\xampp\htdocs\admin\app\admin\view\public\left-menu.html";i:1515049263;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1514950800;}*/ ?>
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
    <body>
        <div class="layui-layout layui-layout-admin">
            <div class="layui-header header header-demo">
                <div class="layui-main">
                    <a class="logo" href="<?php echo url('index/index'); ?>">
                        X-admin v1.0
                    </a>
                    <ul class="layui-nav" lay-filter="">
                      <li class="layui-nav-item"><img src="__STATIC__/images/logo.png" class="layui-circle" style="border: 2px solid #A9B7B7;" width="35px" alt=""></li>
                      <li class="layui-nav-item">
                        <a href="javascript:;"><?php echo \think\Session::get('user_name'); ?></a>
                        <dl class="layui-nav-child"> <!-- 二级菜单 -->
                          <dd><a href="">个人信息</a></dd>
                          <dd><a href="">切换帐号</a></dd>
                          <dd><a href="<?php echo url('admin/login/logout'); ?>">退出</a></dd>
                        </dl>
                      </li>
                      <li class="layui-nav-item x-index"><a href="/">前台首页</a></li>
                    </ul>
                </div>
            </div>
            
			<div class="layui-side layui-bg-black x-side">
                <div class="layui-side-scroll">
                    <ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">
                    <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe629;</i><cite>可视化数据</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="<?php echo url('visu/browser'); ?>">
                                            <cite>数据来源</cite>
                                        </a>
                                    </dd>
                                    <dd class="">
                                        <a href="javascript:;" _href="<?php echo url('visu/view'); ?>">
                                            <cite>PV数据</cite>
                                        </a>
                                    </dd>
                                    <dd class="">
                                        <a href="javascript:;" _href="<?php echo url('visu/end'); ?>">
                                            <cite>PV详细</cite>
                                        </a>
                                    </dd>
                                    <dd class="">
                                        <a href="javascript:;" _href="<?php echo url('visu/area'); ?>">
                                            <cite>访问地域</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe621;</i><cite>文章管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="<?php echo url('article/index'); ?>">
                                            <cite>文章列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        
                        
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe630;</i><cite>分类管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('category/index'); ?>">
                                        <cite>分类列表</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe613;</i><cite>管理员管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('admin/index'); ?>">
                                        <cite>管理员列表</cite>
                                    </a>
                                </dd>
                            </dl>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('admin/loglist'); ?>">
                                        <cite>管理员日志</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe614;</i><cite>系统设置</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('system/index'); ?>">
                                        <cite>系统设置</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('system/linklist'); ?>">
                                        <cite>友情链接</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>

            </div>            
            
            
            <div class="layui-tab layui-tab-card site-demo-title x-main" lay-filter="x-tab" lay-allowclose="true">
                <div class="x-slide_left"></div>
                <ul class="layui-tab-title">
                    <li class="layui-this">
                        我的桌面
                        <i class="layui-icon layui-unselect layui-tab-close">ဆ</i>
                    </li>
                </ul>
                <div class="layui-tab-content site-demo site-demo-body">
                    <div class="layui-tab-item layui-show">
                        <iframe frameborder="0" src="<?php echo url('index/welcome'); ?>" class="x-iframe"></iframe>
                    </div>
                </div>
            </div>
            <div class="site-mobile-shade">
            </div>
        </div>
                <script src="__STATIC__/js/jquery.min.js"></script>
        <script src="__STATIC__/lib/layui/layui.js" charset="utf-8"></script>
        <script src="__STATIC__/js/x-admin.js"></script>
        <script src="__STATIC__/js/x-layui.js"></script>
        


    </body>
</html>