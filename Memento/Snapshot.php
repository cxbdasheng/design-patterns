<?php

namespace cxbdasheng\DesignPatterns\Memento;

class Snapshot
{

    /**
     * 血量值
     * @var
     */
    private $hp;

    /**
     * 体力值
     * @var
     */
    private $lp;

    /**
     * 力量
     * @var
     */
    private $power;

    /**
     * 初始化备忘录
     * @param $hp
     * @param $lp
     * @param $power
     */
    public function __construct($hp, $lp, $power)
    {
        $this->hp = $hp;
        $this->lp = $lp;
        $this->power = $power;
    }

    /**
     * 获取备忘录HP
     * @return mixed
     * @author chendashengpc
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * 获取备忘录LP
     * @return mixed
     * @author chendashengpc
     */
    public function getLp()
    {
        return $this->hp;
    }
    /**
     * 获取备忘录POWER
     * @return mixed
     * @author chendashengpc
     */
    public function getPower()
    {
        return $this->power;
    }

}