<?php

namespace cxbdasheng\DesignPatterns\Memento;

class History
{
    public $list = [

    ];

    /**
     * 设置快照
     * @param Snapshot $snapshot
     * @return void
     * @author chendashengpc
     */
    public function makeBackup(Snapshot $snapshot)
    {
        $this->list[] = $snapshot;
    }

    /**
     * 返回备忘录
     * @return mixed|null
     * @author chendashengpc
     */
    public function undo()
    {
        if (count($this->list)) {
            $snapshot = array_pop($this->list);
            return $snapshot;
        }
        return null;
    }

}