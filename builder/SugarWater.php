<?php
/**
 * Created by PhpStorm.
 * User: m-nishiwaki
 * Date: 14/03/21
 * Time: 17:26
 */

/**
 * SugarWater： 砂糖水クラス (ConcreteBuilder：ビルダーの実装部分)
*/
class SugarWater {
    /**
     * @var
     */
    private $water;
    /**
     * @var
     */
    private $sugar;

    /**
     * @param mixed $sugar
     */
    public function setSugar($sugar)
    {
        $this->sugar = $sugar;
    }

    /**
     * @return mixed
     */
    public function getSugar()
    {
        return $this->sugar;
    }

    /**
     * @param mixed $water
     */
    public function setWater($water)
    {
        $this->water = $water;
    }

    /**
     * @return mixed
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * @param $water
     * @param $sugar
     */
    function __construct($water, $sugar) {
        $this->water = $water;
        $this->sugar = $sugar;
    }
}