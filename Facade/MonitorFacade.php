<?php

namespace cxbdasheng\DesignPatterns\Facade;

class MonitorFacade
{
    protected $zhansan;
    protected $lisi;
    protected $wangwu;

    public function __construct()
    {
        $this->zhansan = new ZhangSan();
        $this->lisi = new LiSi();
        $this->wangwu = new WangWu();
    }

    public function getName()
    {
        return '班长';
    }

    /**
     * 羽毛球
     * @return string
     * @author chendashengpc
     */
    public function badminton()
    {
        return $this->zhansan->getName() .'、'. $this->lisi->getName();
    }

    /**
     * 乒乓球
     * @return string
     * @author chendashengpc
     */
    public function ableTennis()
    {
        return $this->wangwu->getName() .'、'. $this->lisi->getName();
    }
}