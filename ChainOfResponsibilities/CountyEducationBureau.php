<?php

namespace cxbdasheng\DesignPatterns\ChainOfResponsibilities;
/**
 * 县教育局
 */
class CountyEducationBureau extends BaseHandler
{
    /**
     * 下一个请求
     * @return mixed
     * @author chendashengpc
     */
    public function setNext(Handler $handler)
    {
        $this->next = $handler;
    }

    /**
     * 当前处理
     * @return mixed
     * @author chendashengpc
     */
    public function handler()
    {
        echo '我是县教育局，我这办不了，你去市教育局' . PHP_EOL;
        if ($this->next != null) {
            $this->next->handler();
        }

    }
}