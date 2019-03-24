<?php
namespace app\admin\common;

use think\Controller;
use think\Request;
use app\admin\common\Mail;
use app\admin\Common;


class Base extends Controller
{
    public function _initialize()
    {
        parent::_initialize();
    }
    

    protected function alreadyLogin()
    {
        if (!empty(\session('user_name'))){
            $this->error('You Already Login.Dear', 'admin/index/index');
        }
    }

    
    /**
     * 计算当前月份有几天,返回days
     * @param unknown $year
     * @param unknown $mouth
     * @return string
     */
    protected function dateDetail($year, $mouth)
    {
        //两种方式：cal_days_in_month(CAL_GREGORIAN,1,2017);
        return date('t', strtotime(''.$year.'-'.$mouth.''));
    
    }
    
    
    /**
     * date()方式取当前月份,当0-9月时出现09，去除该显示方式
     * @param unknown $mouth
     * @return string
     */
    protected function mouthDetail($mouth)
    {
        if (substr($mouth, 0, 1) == 0){
            $mouth = substr($mouth, 1, 2);
        }
        return $mouth;
    }
    

}
