<?php

namespace cxbdasheng\DesignPatterns\Command;

/**
 * 调用类
 */
class Invoker
{
    protected $command = [];

    /**
     * 设置命令
     * @param Command $command
     * @return void
     * @author chendashengpc
     */
    public function setCommand(Command $command)
    {
        $this->command[$command->name] = $command;
    }


    /**
     * 撤销命令
     * @return void
     * @author chendashengpc
     */
    public function revoke(Command $command)
    {
        if (isset($this->command[$command->name])) {
            unset($this->command[$command->name]);
        }
    }

    /**
     * 执行命令
     * @return void
     * @author chendashengpc
     */
    public function execute()
    {
        foreach ($this->command as $command) {
            echo $command->execute() . PHP_EOL;
        }
    }
}