<?php
/**
 * Created by PhpStorm.
 * User: m-nishiwaki
 * Date: 14/03/21
 * Time: 17:26
 */

require_once('./SugarWater.php');

/**
 * SugarWater： 砂糖水クラス (ConcreteBuilder：ビルダーの実装部分)
*/
class SugarWaterBuilder {
    /**
     * @var
     */
    private $sugar_water;

    /**
     * @param mixed $sugar_water
     */
    public function setSugarWater($sugar_water)
    {
        $this->sugar_water = $sugar_water;
    }

    /**
     * @return mixed
     */
    public function getSugarWater()
    {
        return $this->sugar_water;
    }

    /**
     *
     */
    function __construct() {
//        $this->sugar_water = new SugarWater();
    }

    /**
     * 砂糖を加える
     * @param $sugar_amount
     */
    function add_sugar($sugar_amount) {
        $this->sugar_water->sugar += $sugar_amount;

    }

    /**
     * 水を加える
     * @param $water_amount
     */
    function add_water($water_amount) {
        $this->sugar_water->water += $water_amount;

    }

    function result() {
        return $this->sugar_water;
    }

}