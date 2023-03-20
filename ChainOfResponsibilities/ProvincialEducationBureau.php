<?php

namespace cxbdasheng\DesignPatterns\ChainOfResponsibilities;

/**
 * 省教育局
 */
class ProvincialEducationBureau extends BaseHandler
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
        echo '我是省教育局，我这能办，提交资料就能办了' . PHP_EOL;
    }
}