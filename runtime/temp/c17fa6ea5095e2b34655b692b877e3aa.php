<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\admin\public/../app/admin\view\category\category-list.html";i:1514274125;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1514950809;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1514950800;}*/ ?>
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
              <a><cite>分类管理</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
        <form class="layui-form x-center" method="post" action="" style="width:70%" id="config">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <label class="layui-form-label">栏目</label>
                    <div class="layui-input-inline">
                      <input type="text" name="catename" placeholder="栏目名" autocomplete="off" class="layui-input">
                    </div>
                    <label class="layui-form-label">排序</label>
                    <div class="layui-input-inline">
                      <input type="text" name="sort" placeholder="排序" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn" lay-submit="" lay-filter="*" id="btnlink"><i class="layui-icon"></i>添加</button>
                    </div>
                  </div>
                </div> 
            </form>
                        <span class="x-left" style="line-height:40px;">共有数据：<?php echo $cate_count; ?> 条</span>
            
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            排序
                        </th>
                        <th>
                            分类名
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody id="x-link">
                    <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ca): $mod = ($i % 2 );++$i;?>
	                    <tr>
	                        <td>
	                            <?php echo $ca['id']; ?>
	                        </td>
	                        <td>
	                            <?php echo $ca['sort']; ?>
	                        </td>
	                        <td><?php if($ca['level'] != 0): ?>*<?php endif; ?><?php echo str_repeat('-',$ca['level']*4);?><?php echo $ca['catename']; ?></td>
	                        <td class="td-manage">
	                            <a title="编辑" href="<?php echo url('admin/category/edit', array('id'=>$ca['id'])); ?>" class="ml-5" style="text-decoration:none">
	                                <i class="layui-icon">&#xe642;</i>
	                            </a>
	                            <a title="删除" onclick="return confirm('你确定删除该栏目？')" href="<?php echo url('admin/category/delete',['id' => $ca['id']]); ?>" style="text-decoration:none">
	                                <i class="layui-icon">&#xe640;</i>
	                            </a>
	                        </td>
	                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
                        <script src="__STATIC__/js/jquery.min.js"></script>
        <script src="__STATIC__/lib/layui/layui.js" charset="utf-8"></script>
        <script src="__STATIC__/js/x-admin.js"></script>
        <script src="__STATIC__/js/x-layui.js"></script>
        


        <script>
            layui.use(['element','layer','form'], function(){
                $ = layui.jquery;//jquery
              lement = layui.element();//面包导航
              layer = layui.layer;//弹出层
              form = layui.form();

              //监听提交
              form.on('submit(add)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                layer.alert("增加成功", {icon: 6});
                $('#x-link').prepend('<tr><td><input type="checkbox"value="1"name=""></td><td>1</td><td>1</td><td>'+data.field.name+'</td><td class="td-manage"><a title="编辑"href="javascript:;"onclick="cate_edit(\'编辑\',\'cate-edit.html\',\'4\',\'\',\'510\')"class="ml-5"style="text-decoration:none"><i class="layui-icon">&#xe642;</i></a><a title="删除"href="javascript:;"onclick="cate_del(this,\'1\')"style="text-decoration:none"><i class="layui-icon">&#xe640;</i></a></td></tr>');
                return false;
              });


            })



              
            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }

             //-编辑
            function cate_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
           
            /*-删除*/
            function cate_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                });
            }
            </script>
    </body>
</html>