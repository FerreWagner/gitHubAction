<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\xampp\htdocs\admin\public/../app/admin\view\admin\admin-log.html";i:1514274797;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1514950809;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1514950800;}*/ ?>
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
<link rel="stylesheet" href="__STATIC__/lib/bootstrap/css/bootstrap.css">

    <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>系统日志</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form class="layui-form x-center" action="" style="width:80%">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <label class="layui-form-label">日期范围</label>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
                    </div>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <span class="x-left" style="line-height:40px;">共有数据：<?php echo $log_count; ?> 条</span>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            类型
                        </th>
                        <th>
                            内容
                        </th>
                        <th>
                            用户名
                        </th>
                        <th>
                            客户端IP
                        </th>
                        <th>
                            时间
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($alog) || $alog instanceof \think\Collection || $alog instanceof \think\Paginator): $i = 0; $__LIST__ = $alog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$al): $mod = ($i % 2 );++$i;?>
                    
                    <tr>
                        <td>
                            <input type="checkbox" value="1" name="">
                        </td>
                        <td <?php if($al['type'] == 0): ?>style="color: #de64fb;"<?php endif; ?>>
                            <?php echo $al['id']; ?>
                        </td>
                        <td <?php if($al['type'] == 0): ?>style="color: #de64fb;"<?php endif; ?>>
                            <?php echo $al['type']; ?>
                        </td>
                        <td <?php if($al['type'] == 0): ?>style="color: #de64fb;"<?php endif; ?>>
                           <?php if($al['type'] == 1): ?>登陆成功<?php else: ?><a style="text-decoration: none;color: #de64fb;">登陆失败</a><?php endif; ?>
                        </td>
                        <td <?php if($al['type'] == 0): ?>style="color: #de64fb;"<?php endif; ?>>
                            <?php echo $al['name']; ?>
                        </td>
                        <td <?php if($al['type'] == 0): ?>style="color: #de64fb;"<?php endif; ?>>
                            <?php echo $al['ip']; ?>
                        </td>
                        <td <?php if($al['type'] == 0): ?>style="color: #de64fb;"<?php endif; ?>>
                             <?php echo date("Y-m-d H:i:s",$al['time']); ?>
                        </td>
                    </tr>
                    
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div style="text-align: center"><?php echo $alog->render(); ?></div>

        </div>
                                <script src="__STATIC__/js/jquery.min.js"></script>
        <script src="__STATIC__/lib/layui/layui.js" charset="utf-8"></script>
        <script src="__STATIC__/js/x-admin.js"></script>
        <script src="__STATIC__/js/x-layui.js"></script>
        


        <script>
            layui.use(['element','layer'], function(){
                $ = layui.jquery;//jquery
              lement = layui.element();//面包导航
              layer = layui.layer;//弹出层


            })

              
            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }
           
            /*-删除*/
            function log_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                });
            }
            </script>
    </body>
</html>