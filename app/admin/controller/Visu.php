<?php

namespace app\admin\controller;


use app\admin\common\Base;


class Visu extends Base
{
    public function Browser()
    {
        $chrome = db('artsee')->where('type', 'chrome')->count('id');
        $fox    = db('artsee')->where('type', 'fox')->count('id');
        $ie     = db('artsee')->where('type', 'like', '%ie%')->count('id');
        $safari = db('artsee')->where('type', 'safari')->count('id');
        $not    = db('artsee')->where('type', 'notidentify')->count('id');
        
        $this->view->assign([
            'chrome' => $chrome,
            'fox'    => $fox,
            'ie'     => $ie,
            'safari' => $safari,
            'not'    => $not,
        ]);
        
        return $this->view->fetch();
    }
    
    
    public function View()
    {
        //初始化
        $year  = config('date.year') - 1;
        $mouth = config('date.mouth') + 1;
        $see   = $view_date = [];
        
        //按过去一年查询,文章阅读数量
        for ($i = 12; $i > 0; $i --){
            
            $see[] = db('artsee')->whereTime('time', 'between', [''.$year.'-'.$this->mouthDetail($mouth).'-1', ''.$year.'-'.$this->mouthDetail($mouth).'-'.$this->dateDetail($year, $mouth).''])->count();
            $view_date[] = $mouth;
            
            $mouth ++;
            if ($mouth == 13){
                $mouth = 1;
                $year  = config('date.year');
            }
            
        }
        
        $this->view->assign([
            'see'       => $see,
            'view_date' => $view_date,
        ]);
//         dump($see);die;
        return $this->view->fetch();
    }
    
    
    

}
