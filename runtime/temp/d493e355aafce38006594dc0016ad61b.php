<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\xampp\htdocs\admin\public/../app/admin\view\visu\end.html";i:1515052190;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1515122580;}*/ ?>
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
        <div class="x-body">
            <blockquote class="layui-elem-quote">
            Echarts 实例：浏览器源数据：
            </blockquote>
            <!-- 为 ECharts 准备一个具备大小（宽高）的 DOM -->
            <div id="main" style="width: 100%;height:500px;"></div>
        </div>
        <script type="text/javascript">
        var myChart = echarts.init(document.getElementById('main'));
        option = {
        	    title : {
        	        text: '管理员日志',
        	        subtext: '登录情况'
        	    },
        	    tooltip : {
        	        trigger: 'axis'
        	    },
        	    legend: {
        	        data:['成功','失败','我的登录']
        	    },
        	    toolbox: {
        	        show : true,
        	        feature : {
        	            mark : {show: true},
        	            dataView : {show: true, readOnly: false},
        	            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
        	            restore : {show: true},
        	            saveAsImage : {show: true}
        	        }
        	    },
        	    calculable : true,
        	    xAxis : [
        	        {
        	            type : 'category',
        	            boundaryGap : false,
        	            data : ['-7天','-6天','-5天','-4天','-3天','-2天','昨天']
        	        }
        	    ],
        	    yAxis : [
        	        {
        	            type : 'value'
        	        }
        	    ],
        	    series : [
        	        {
        	            name:'成功',
        	            type:'line',
        	            smooth:true,
        	            itemStyle: {normal: {areaStyle: {type: 'default'}}},
        	            data:[<?php if(is_array($normal) || $normal instanceof \think\Collection || $normal instanceof \think\Paginator): $i = 0; $__LIST__ = $normal;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$no): $mod = ($i % 2 );++$i;?><?php echo $no; ?>,<?php endforeach; endif; else: echo "" ;endif; ?>]
        	        },
        	        {
        	            name:'失败',
        	            type:'line',
        	            smooth:true,
        	            itemStyle: {normal: {areaStyle: {type: 'default'}}},
        	            data:[<?php if(is_array($error) || $error instanceof \think\Collection || $error instanceof \think\Paginator): $i = 0; $__LIST__ = $error;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$er): $mod = ($i % 2 );++$i;?><?php echo $er; ?>,<?php endforeach; endif; else: echo "" ;endif; ?>]
        	        },
        	        {
        	            name:'我的登录',
        	            type:'line',
        	            smooth:true,
        	            itemStyle: {normal: {areaStyle: {type: 'default'}}},
        	            data:[<?php if(is_array($my) || $my instanceof \think\Collection || $my instanceof \think\Paginator): $i = 0; $__LIST__ = $my;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$my): $mod = ($i % 2 );++$i;?><?php echo $my; ?>,<?php endforeach; endif; else: echo "" ;endif; ?>]
        	        }
        	    ]
        	};
        	                    
        myChart.setOption(option);
    	</script>
    </body>
</html>