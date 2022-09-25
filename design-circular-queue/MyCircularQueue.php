<?php

/**
 * https://leetcode.com/problems/design-circular-queue/
 */

class MyCircularQueue {

    private $queueSize;
    private $queue = [];

    function __construct($k) {
        $this->queueSize = $k;
    }

    function enQueue($value) {
        if ($this->isFull()) return false;

        $this->queue[] = $value;
        return true;
    }

    function deQueue() {
        if ($this->isEmpty()) return false;
        array_shift($this->queue);
        return true;
    }

    function Front() {
        if ($this->isEmpty()) return -1;
        return reset($this->queue);
    }

    function Rear() {
        if ($this->isEmpty()) return -1;
        return end($this->queue);
    }

    function isEmpty() {
        return empty($this->queue);
    }

    function isFull() {
        return count($this->queue) === $this->queueSize;
    }
}

 ob_start();
 $obj = new MyCircularQueue(3);
 var_dump($obj->enQueue(10));
 var_dump($obj->enQueue(20));
 var_dump($obj->enQueue(30));
 var_dump($obj->enQueue(40));
 var_dump($obj->Rear());
 var_dump($obj->isFull());
 var_dump($obj->deQueue());
 var_dump($obj->enQueue(40));
 var_dump($obj->Rear());
$dump = ob_get_contents();

var_dump($dump);