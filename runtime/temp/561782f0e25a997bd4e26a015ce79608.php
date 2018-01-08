<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\xampp\htdocs\admin\public/../app/admin\view\system\system-set.html";i:1515383918;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1515122580;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1515144677;}*/ ?>
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
                <li class="layui-this">网站设置</li>

              </ul>
              <div class="layui-tab-content" >
                <div class="layui-tab-item layui-show">
                    <form class="layui-form layui-form-pane" action="<?php echo url('admin/system/index'); ?>" method="post">
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>网站名称
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="title" autocomplete="off" placeholder="控制在25个字、50个字节以内" class="layui-input" value="<?php echo $system->title; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>关键词
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="keywords" autocomplete="off" placeholder="5个左右,8汉字以内,用英文,隔开" class="layui-input" value="<?php echo $system->keywords; ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>描述
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="desc" autocomplete="off" placeholder="空制在80个汉字，160个字符以内"
                                class="layui-input" value="<?php echo $system->desc; ?>">
                            </div>
                        </div>
                        
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                <span class='x-red'>*</span>备案号
                            </label>
                            <div class="layui-input-block">
                                <input type="text" name="record" autocomplete="off" placeholder="空制在80个汉字，160个字符以内"
                                class="layui-input" value="<?php echo $system->record; ?>">
                            </div>
                        </div>


                        <div class="layui-form-item">
                            <label for="AppId" class="layui-form-label">
                                <span class="x-red">*</span>是否开启
                            </label>
                            <div class="layui-input-block">
                                <select name="is_close">
                                    <?php if($system->is_close == '0'): ?>
                                    <option value="0" selected>开启网站</option>
                                    <option value="1">关闭网站</option>
                                    <?php else: ?>
                                    <option value="0" >开启网站</option>
                                    <option value="1" selected>关闭网站</option>
                                    <?php endif; ?>

                                </select>
                            </div>
                		</div>
                		
                       	<div class="layui-form-item">
                            <label for="AppId" class="layui-form-label">
                                <span class="x-red">*</span>邮件服务
                            </label>
                            <div class="layui-input-block">
                                <select name="is_mail">
                                    <?php if($system->is_mail == '0'): ?>
                                    <option value="0" selected>开启邮件</option>
                                    <option value="1">关闭邮件</option>
                                    <?php else: ?>
                                    <option value="0" >开启邮件</option>
                                    <option value="1" selected>关闭邮件</option>
                                    <?php endif; ?>

                                </select>
                            </div>
                		</div>

                		<!--用隐藏域发送is_update字段值-->
                        <input type="hidden" name="is_update" value="<?php echo $system->is_update; ?>">

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