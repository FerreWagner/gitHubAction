<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\xampp\htdocs\admin\public/../app/admin\view\system\sys-link.html";i:1514274230;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1514950809;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1514950800;}*/ ?>
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
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>友情链接</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form class="layui-form x-center" method="post" action="" style="width:70%" id="config">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <label class="layui-form-label">链接名</label>
                    <div class="layui-input-inline">
                      <input type="text" name="name"  placeholder="链接名" autocomplete="off" class="layui-input">
                    </div>
                    <label class="layui-form-label">URL</label>
                    <div class="layui-input-inline">
                      <input type="text" name="url"  placeholder="http://www.baidu.com" autocomplete="off" class="layui-input">
                    </div>
                    <label class="layui-form-label">排序</label>
                    <div class="layui-input-inline">
                      <input type="text" name="sort"  placeholder="排序" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn" lay-submit="" lay-filter="*" id="btnlink"><i class="layui-icon">&#xe608;</i>添加</button>
                    </div>
                  </div>
                </div> 
            </form>
            <span class="x-left" style="line-height:40px;">共有数据：<?php echo $link_count; ?> 条</span>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            链接名
                        </th>
                        <th>
                            url
                        </th>
                        <th>
                            排序
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody id="x-link">
                    <?php if(is_array($link_list) || $link_list instanceof \think\Collection || $link_list instanceof \think\Paginator): $i = 0; $__LIST__ = $link_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td>
                            <?php echo $link['id']; ?>
                        </td>
                        <td>
                           <?php echo $link['name']; ?>
                        </td>
                        <td >
                            <a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $link['url']; ?></a>
                        </td>
                        <td >
                            <?php echo $link['sort']; ?>
                        </td>
                        <td class="td-manage">
                            <a title="编辑" href="<?php echo url('system/linkedit', array('id'=>$link['id'])); ?>" class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" onclick="return confirm('你确定删除该友链？')" href="<?php echo url('admin/system/linkdelete',['id' => $link['id']]); ?>" style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>

            <div id="page"></div>
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

              //以上模块根据需要引入

            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }
            
            

            // 用户-编辑
            
            /*删除*/
            function link_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                });
            }
            </script>
    </body>
</html>