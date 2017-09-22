<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/22/2017
 * Time: 2:57 AM
 */

class Novel extends Books
{
    var $publisher;

    function setPublisher($par){
        $this->publisher = $par;
    }

    function getPublisher(){
        return $this->publisher;
    }

}