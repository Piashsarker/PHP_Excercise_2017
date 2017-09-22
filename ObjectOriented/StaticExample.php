<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/22/2017
 * Time: 4:11 AM
 */

class StaticExample
{
        public static $staticValue = 20 ;

        public function getStaticValue(){
            return self::$staticValue ;
        }
}