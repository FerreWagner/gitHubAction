<?php

namespace app\admin\controller;


use app\admin\common\Base;


class Visu extends Base
{
    public function Browser()
    {
        
        return $this->view->fetch();
    }
}
