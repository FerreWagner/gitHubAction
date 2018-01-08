<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\xampp\htdocs\admin\public/../app/admin\view\article\article-edit.html";i:1512525800;s:55:"D:\xampp\htdocs\admin\app\admin\view\public\header.html";i:1514172060;s:56:"D:\xampp\htdocs\admin\app\admin\view\public\base_js.html";i:1512443327;}*/ ?>
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
    </head>
<script src="__STATIC__/ueditor/ueditor.config.js"></script>
<script src="__STATIC__/ueditor/ueditor.all.min.js"></script>
<script src="__STATIC__/ueditor/lang/zh-cn/zh-cn.js"></script>
<body>
        <div class="x-body">
            <form class="layui-form layui-form-pane" action="" method="post" enctype="multipart/form-data">
                <div class="layui-form-item">
                    <label for="L_title" class="layui-form-label">
                        标题
                    </label>
                    <div class="layui-input-block">
                        <input type="text" id="title" name="title" value="<?php echo $article['title']; ?>" required lay-verify="title" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="author" class="layui-form-label">
                        作者
                    </label>
                    <div class="layui-input-block">
                        <input type="text" name="author" value="<?php echo $article['author']; ?>" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="order" class="layui-form-label">
                       排序
                    </label>
                    <div class="layui-input-block">
                        <input type="text" name="order" value="<?php echo $article['order']; ?>" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="keywords" class="layui-form-label">
                        关键词
                    </label>
                    <div class="layui-input-block">
                        <input type="text" name="keywords" value="<?php echo $article['keywords']; ?>" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="kkeywords" class="layui-form-label">
                        缩略图
                    </label>
                    <div class="layui-input-block">
                        <input type="file" name="thumb">
                        <?php if($article['thumb'] != ''): ?>
                        <img style="float:left;" src="<?php echo $article['thumb']; ?>" width="200">
                        <?php else: ?>
                        暂无缩略图
                        <?php endif; ?>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="desc" class="layui-form-label">
                        描述
                    </label>
                    <div class="layui-input-block">
                        <input type="text" name="desc" value="<?php echo $article['desc']; ?>" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="see" class="layui-form-label">
                        浏览
                    </label>
                    <div class="layui-input-block">
                        <input type="text" name="see" value="<?php echo $article['see']; ?>" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <div class="layui-input-block">
                        <textarea id="content" name="content"><?php echo $article['content']; ?></textarea>
                    </div>
                    <label for="content" class="layui-form-label" style="top: -2px;">
                        描述
                    </label>
                </div>
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">
                            所在类别
                        </label>
                        <div class="layui-input-block">
                            <select lay-verify="required" name="cate">
                                <option>
                                </option>
                                <optgroup label="Alexa相关">
                                <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ca): $mod = ($i % 2 );++$i;?>
                                	<option value="<?php echo $ca['id']; ?>" <?php if($ca['id'] == $article['cate']): ?>selected=""<?php endif; ?>><?php echo $ca['catename']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <input class="layui-btn" type="submit" value="立即发布" lay-filter="add" lay-submit>
                       
                </div>
            </form>
        </div>
                        <script src="__STATIC__/js/jquery.min.js"></script>
        <script src="__STATIC__/lib/layui/layui.js" charset="utf-8"></script>
        <script src="__STATIC__/js/x-admin.js"></script>
        <script src="__STATIC__/js/x-layui.js"></script>

        


        <script>
            layui.use(['form','layer','layedit'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer
              ,layedit = layui.layedit;


                layedit.set({
                  uploadImage: {
                    url: "./upimg.json" //接口url
                    ,type: 'post' //默认post
                  }
                })
  
            });
        </script>
        <script type="text/javascript">

            //实例化编辑器
            //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
            UE.getEditor('content',{initialFrameWidth:1000,initialFrameHeight:300,});
        </script>
    </body>

</html>