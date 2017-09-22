<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/22/2017
 * Time: 2:30 AM
 */

class Books
{
    var $price ;
    var $title ;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


}