<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\admin\public/../app/admin\view\feedback\feedback-list.html";i:1513130616;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1512443327;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1512443327;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Alexa
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="/logo.png" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="__STATIC__/css/x-admin.css" media="all">
    </head>
<link rel="stylesheet" href="__STATIC__/lib/bootstrap/css/bootstrap.css">

    <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>意见列表</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button><span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            反馈编号ID
                        </th>
                        <th>
                            反馈IP
                        </th>
                        <th>
                            反馈邮箱
                        </th>
                        <th>
                            反馈网站
                        </th>
                        <th>
                            反馈信息
                        </th>
                        <th>
                            反馈时间
                        </th>
                        <th>
                            状态
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody id="x-link">
                    <?php if(is_array($feed_lst) || $feed_lst instanceof \think\Collection || $feed_lst instanceof \think\Paginator): $i = 0; $__LIST__ = $feed_lst;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feed): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td>
                            <?php echo $feed['id']; ?>
                        </td>
                        <td>
                            <?php echo $feed['ip']; ?>
                        </td>
                        <td >
                            <?php echo $feed['email']; ?>
                        </td>
                        <td >
                            <?php echo $feed['website']; ?>
                        </td>
                        <td >
                            <?php echo $feed['comment']; ?>
                        </td>
                        <td >
                            <?php echo $feed['time']; ?>
                        </td>
                        <td >
                            <span class="layui-btn layui-btn-normal layui-btn-mini">
                                已浏览
                            </span>
                        </td>
                        <td class="td-manage">
                            <a title="处理" href="<?php echo url('admin/feedback/edit', ['id' => $feed['id']]); ?>" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" onclick="return confirm('你确定删除该条反馈？')" href="<?php echo url('admin/feedback/delete',['id' => $feed['id']]); ?>" style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>

            <div style="text-align: center"><?php echo $feed_lst->render(); ?></div>
        </div>
                        <script src="__STATIC__/js/jquery.min.js"></script>
        <script src="__STATIC__/lib/layui/layui.js" charset="utf-8"></script>
        <script src="__STATIC__/js/x-admin.js"></script>
        <script src="__STATIC__/js/x-layui.js"></script>

        


        <script>
            layui.use(['element','laypage','layer','form'], function(){
                $ = layui.jquery;//jquery
              lement = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层
              form = layui.form();//弹出层


          })

            </script>
    </body>
</html>