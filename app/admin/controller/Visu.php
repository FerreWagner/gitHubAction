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
}
