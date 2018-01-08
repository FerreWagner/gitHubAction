<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\xampp\htdocs\admin\public/../app/admin\view\visu\index.html";i:1514950764;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1514950809;}*/ ?>
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
        	        text: '某站点用户访问来源',
        	        subtext: '纯属虚构',
        	        x:'center'
        	    },
        	    tooltip : {
        	        trigger: 'item',
        	        formatter: "{a} <br/>{b} : {c} ({d}%)"
        	    },
        	    legend: {
        	        orient: 'vertical',
        	        left: 'left',
        	        data: ['直接访问','邮件营销','联盟广告','视频广告','搜索引擎']
        	    },
        	    series : [
        	        {
        	            name: '访问来源',
        	            type: 'pie',
        	            radius : '65%',
        	            center: ['50%', '60%'],
        	            data:[
        	                {value:335, name:'直接访问'},
        	                {value:310, name:'邮件营销'},
        	                {value:234, name:'联盟广告'},
        	                {value:135, name:'视频广告'},
        	                {value:1548, name:'搜索引擎'}
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