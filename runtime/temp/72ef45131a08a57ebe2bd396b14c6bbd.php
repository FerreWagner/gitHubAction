<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"D:\xampp\htdocs\admin\public/../app/admin\view\visu\view.html";i:1515041321;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1515122580;}*/ ?>
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
            Echarts 实例：文章源数据：
            </blockquote>
            <!-- 为 ECharts 准备一个具备大小（宽高）的 DOM -->
            <div id="main" style="width: 100%;height:500px;"></div>
        </div>
        <script type="text/javascript">
        var myChart = echarts.init(document.getElementById('main'));

        option = {
            color: ['#0c6588'],
            tooltip : {
                trigger: 'axis',
                axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                    type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis : [
                {
                    type : 'category',
                    data : [<?php if(is_array($view_date) || $view_date instanceof \think\Collection || $view_date instanceof \think\Paginator): $i = 0; $__LIST__ = $view_date;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$da): $mod = ($i % 2 );++$i;?><?php echo $da; ?>,<?php endforeach; endif; else: echo "" ;endif; ?>],
                    axisTick: {
                        alignWithLabel: true
                    }
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    name:'过去一年访问量',
                    type:'bar',
                    barWidth: '40%',
                    data:[<?php if(is_array($see) || $see instanceof \think\Collection || $see instanceof \think\Paginator): $i = 0; $__LIST__ = $see;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$see): $mod = ($i % 2 );++$i;?><?php echo $see; ?>,<?php endforeach; endif; else: echo "" ;endif; ?>]
                }
            ]
        };


        myChart.setOption(option);
    	</script>
    </body>
</html>