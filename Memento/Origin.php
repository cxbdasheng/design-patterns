<?php

namespace cxbdasheng\DesignPatterns\Memento;

class Origin
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

    public function __construct()
    {
        // 初始化时 HP:100、LP:100、power:50
        $this->hp = 100;
        $this->lp = 100;
        $this->power = 50;
    }

    /**
     * 设置 HP
     * @param $hp
     * @return void
     * @author chendashengpc
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    /**
     * 设置 LP
     * @param $lp
     * @return void
     * @author chendashengpc
     */
    public function setLp($lp)
    {
        $this->lp = $lp;
    }

    /**
     * 设置 Power
     * @param $power
     * @return void
     * @author chendashengpc
     */
    public function setPower($power)
    {
        $this->power = $power;
    }

    /**
     * 制作备份
     * @return void
     * @author chendashengpc
     */
    public function makeSnapshot()
    {
        return new Snapshot($this->hp, $this->lp, $this->power);
    }

    /**
     * 回滚备份
     * @return void
     * @author chendashengpc
     */
    public function restore(Snapshot $snapshot)
    {
        $this->hp = $snapshot->getHp();
        $this->lp = $snapshot->getLp();
        $this->power = $snapshot->getPower();
    }

    /**
     * 魔术方法设置字符串
     * @return string
     * @author chendashengpc
     */
    public function __toString()
    {
        return 'HP：' . $this->hp . PHP_EOL . 'LP：' . $this->lp . PHP_EOL . 'POWERL：' . $this->power . PHP_EOL;
    }
}