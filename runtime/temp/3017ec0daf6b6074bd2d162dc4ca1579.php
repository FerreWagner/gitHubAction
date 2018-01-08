<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\xampp\htdocs\admin\public/../app/admin\view\admin\admin-list.html";i:1515144522;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1515122580;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1515144677;}*/ ?>
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
<link rel="stylesheet" href="/static/admin/lib/bootstrap/css/bootstrap.css">

    <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>管理员列表</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
        <form class="layui-form x-center" action="" method="post" style="width:800px">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <label class="layui-form-label">最后登录日期</label>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="开始日" name="start" id="LAY_demorange_s">
                    </div>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="截止日" name="end" id="LAY_demorange_e">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="username" placeholder="用户名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon"></i></button>
                    </div>
                  </div>
                </div>
            </form>
        <?php if(\think\Session::get('user_data.role') == 0): ?>
	        <xblock>
		        <a href="<?php echo url('admin/admin/add'); ?>"><button class="layui-btn"><i class="layui-icon"></i>添加</button></a>
		        <span class="x-right" style="line-height:40px">共有管理员：<?php echo $count; ?> 位</span>
	        </xblock>
    	<?php endif; ?>    
        
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            登录名
                        </th>
                        <th>
                            邮箱
                        </th>
                        
                        
                        
                        
                        <?php if(\think\Session::get('user_data.role') == 0): ?>
                        <th>
                            角色
                        </th>
                        <th>
                            加入时间
                        </th>
                        <?php endif; ?>
                        
                        
                                                <th>
                            最后登录时间
                        </th>
                        
                        
                        <?php if(\think\Session::get('user_data.role') == 0): ?>
                        <th>
                            状态
                        </th>
                        
                        <th>
                            操作
                        </th>
                        <?php endif; ?>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($admin) || $admin instanceof \think\Collection || $admin instanceof \think\Paginator): $i = 0; $__LIST__ = $admin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ad): $mod = ($i % 2 );++$i;?>
                    
                    <tr>
                        <td>
                            <?php echo $ad['id']; ?>
                        </td>
                        <td>
                            <?php echo $ad['username']; ?>
                        </td>
                        <td>
                            <?php echo $ad['email']; ?>
                        </td>
                        
                        
                        <?php if(\think\Session::get('user_data.role') == 0): ?>
	                        <td>
	                        <?php if($ad['role'] !== 1): ?>超级管理员<?php else: ?>管理员<?php endif; ?>
	                        </td>
	                        <td>
	                            <?php echo $ad['create_time']; ?>
	                        </td>
                        <?php endif; ?>
                        <td>
                            <?php echo $ad['update_time']; ?>
                        </td>
                        
                        <?php if(\think\Session::get('user_data.role') == 0): ?>
                        <td class="td-status">
                            <span class="layui-btn <?php if($ad['switch'] == 'false'): ?>layui-btn-danger<?php endif; ?> layui-btn-mini">
                              <a href="<?php echo url('admin/admin/trans', ['id' => $ad['id']]); ?>" style="color: white;"> <?php if($ad['switch'] == 'false'): ?>卸任状态<?php else: ?>在职状态<?php endif; ?></a>
                            </span>
                        </td>
                        <td class="td-manage">
                            <a title="编辑" href="<?php echo url('admin/admin/edit', ['id' => $ad['id']]); ?>" class="ml-5" style="text-decoration:none">
                                <i class="layui-icon"></i>
                            </a>
                            <a title="删除" onclick="return confirm('你确定删除该管理员？')" href="<?php echo url('admin/admin/delete', ['id' => $ad['id']]); ?>" style="text-decoration:none">
                                <i class="layui-icon"></i>
                            </a>
                        </td>
                        <?php endif; ?>
                        
                    </tr>
                    
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            
			<div style="text-align: center;"><?php echo $admin->render(); ?></div>
					
            <div id="page"></div>
        </div>
        <script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
<script src="/static/admin/js/x-admin.js"></script>
<script src="/static/admin/js/x-layui.js"></script>

    </body>
</html>