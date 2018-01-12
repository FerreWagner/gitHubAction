<?php
namespace app\admin\model;
use think\Model;
use think\Request;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class Article extends Model
{
    /**
     *对文章图片的处理 
     */
    
    protected static function init(){
        Article::event('before_insert', function($_data){
            if (request()->param('type') == 0){
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
                        return $_data['thumb'] ? ['err' => 0, 'msg' => '上传完成', 'data' => $_data['thumb']] : ['err' => 1, 'msg' => '本地上传失败', 'data' => ''];
                    }
                }
            }elseif (request()->param('type') == 1){
//                 $request = new Request();
                if (request()->isPost()){
                
                    $file = request()->file('thumb');
                    //本地路径
                    $filePath = $file->getRealPath();
                    //获取后缀
                    $ext = pathinfo($file->getInfo('name'), PATHINFO_EXTENSION);
                    //上传到七牛后保存的文件名(加盐)
                    $key = config('salt.password_salt').substr(md5($file->getRealPath()) , 0, 5). date('YmdHis') . rand(0, 9999) . '.' . $ext;
                
                    $ak = config('qiniu.ak');
                    $sk = config('qiniu.sk');
                
                    //构建鉴权对象
                    $auth = new Auth($ak, $sk);
                    //要上传的空间
                    $bucket = config('qiniu.bucket');
                    $domain = config('qiniu.domain');
                    $token = $auth->uploadToken($bucket);
                
                    //初始化uploadmanager对象并进行文件的上传
                    $uploadMgr = new UploadManager();
                
                    //调用uploadmanager的putfile方法进行文件的上传
                    list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
                
                    $err ? $_data['thumb'] = '图片上传失败' : $_data['thumb'] = $domain.'/'.$ret['key'];
                
                }
            }elseif (request()->param('type') == 2){
                //TODO 阿里云OSS上传功能
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