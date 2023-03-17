<?php


namespace cxbdasheng\DesignPatterns\Flyweight;


class BulletFactory
{
    protected $bullets = [];

    /**
     * 获取弹类
     * @param string $color
     * @param string $background
     * @param $bullet
     * @return mixed
     */
    public function getBullet(string $color, string $background, $bullet)
    {
        $no = md5($color . $background);
        if (isset($this->bullets[$no]) && $this->bullets[$no] instanceof $bullet) {
            return $this->bullets[$no];
        }
        $obj = new $bullet($color, $background);
        $this->bullets[$no] = $obj;
        return $this->bullets[$no];
    }
}