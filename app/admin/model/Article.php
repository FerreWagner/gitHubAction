<?php
namespace app\admin\model;
use think\Model;

class Article extends Model
{
    /**
     *对文章图片的处理 
     */
    
    protected static function init(){
        Article::event('before_insert', function($_data){
            if(@$_FILES['thumb']['tmp_name']){
                $_file = request()->file('thumb');
                $_info = $_file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($_info){    //upload success
                    $detail_pic     = 'uploads/'.$_info->getSaveName();  //缩略图原图地址
                    //pic zip
                    $ferreImg       = new \ferreImgDetail();
                    $ferrePath      = 'uploads/thumb';
                    $ferrePic       = $ferreImg->cutImg($detail_pic, 570, 750, 'alexa', 20, $ferrePath);    //具体详见参数
                    $_data['thumb'] = '/uploads/thumb/'.$ferrePic;
                    $_data['pic']   = '/uploads/' . $_info->getSaveName();
                }
            }
        });
        

        
        Article::event('before_update', function($_data){
            if($_FILES['thumb']['tmp_name']){
                $_arts = Article::find($_data->id);
                $_thumbpath = $_SERVER['DOCUMENT_ROOT'].$_arts['thumb'];
                if(file_exists($_thumbpath)){
                    @unlink($_thumbpath);
                }
                
                $_file = request()->file('thumb');
                $_info = $_file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($_info){
                    $detail_pic     = 'uploads'.'/'.$_info->getSaveName();  //缩略图原图地址
                    //pic zip
                    $ferreImg       = new \ferreImgDetail();
                    $ferrePath      = 'uploads/thumb';
                    $ferrePic       = $ferreImg->cutImg($detail_pic, 390, 490, 'alexa', 20, $ferrePath);
                    $_data['thumb'] = '/uploads/thumb/'.$ferrePic;
                    $_data['pic']   = '/uploads/' . $_info->getSaveName();
                    @unlink($_SERVER['DOCUMENT_ROOT'].$_arts['pic']);
                }
            }
        });
        
        Article::event('before_delete', function($_data){
                
                $_arts = Article::find($_data->id); //按照id找到待修改图片的id值，为了进一步的修改图片位置
                $_thumbpath = $_SERVER['DOCUMENT_ROOT'].$_arts['thumb'];
                if(file_exists($_thumbpath)){
                    @unlink($_thumbpath);
                    @unlink($_SERVER['DOCUMENT_ROOT'].$_arts['pic']);
                }
                
        });
        
        
    }
}