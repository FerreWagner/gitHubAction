<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"D:\xampp\htdocs\admin\public/../app/admin\view\visu\browser.html";i:1514973576;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1515119827;}*/ ?>
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
        <link rel="shortcut icon" href="__STATIC__/images/a.svg" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="__STATIC__/css/x-admin.css" media="all">
        <script src="__STATIC__/js/echarts.min.js"></script>
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
        	        text: 'Browser访问来源',
        	        subtext: 'Alexa',
        	        x:'center'
        	    },
        	    tooltip : {
        	        trigger: 'item',
        	        formatter: "{a} <br/>{b} : {c} ({d}%)"
        	    },
        	    legend: {
        	        orient: 'horizontal',
        	        left: 'left',
        	        data: ['Chrome','FireFox','IE','Safari','未认证']
        	    },
        	    series : [
        	        {
        	            name: '访问来源',
        	            type: 'pie',
        	            radius : '55%',
        	            center: ['50%', '60%'],
        	            data:[
        	                {value:<?php echo $chrome; ?>, name:'Chrome'},
        	                {value:<?php echo $fox; ?>, name:'FireFox'},
        	                {value:<?php echo $ie; ?>, name:'IE'},
        	                {value:<?php echo $safari; ?>, name:'Safari'},
        	                {value:<?php echo $not; ?>, name:'未认证'}
        	            ],
        	            itemStyle: {
        	                emphasis: {
        	                    shadowBlur: 10,
        	                    shadowOffsetX: 0,
        	                    shadowColor: 'rgba(0, 0, 0, 0.5)'
        	                }
        	            }
        	        }
        	    ]
        	};
        myChart.setOption(option);
    	</script>
    </body>
</html>