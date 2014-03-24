<?php
/**
 * Created by PhpStorm.
 * User: nishiwaki
 * Date: 2014/03/23
 * Time: 16:40
 */

class Singleton {
    public static $instance = null;
    private $counter;

    private function __construct() {
        $this->counter = 0;
    }

    public static function get() {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getCounter() {
        echo 'Counter:'.$this->counter.PHP_EOL;
    }

    public function plusCounter() {
        $this->counter++;
    }
}

$obj = Singleton::get();
$obj->plusCounter();
$obj->getCounter();

$obj2 = Singleton::get();
$obj2->plusCounter();
$obj2->getCounter();


