<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/22/2017
 * Time: 2:50 AM
 */

class Car
{
    private $carNumber;
    private $licenseNumber;

    /**
     * Car constructor.
     * @param $carNumber
     * @param $licenseNumber
     */
    public function __construct($carNumber, $licenseNumber)
    {
        $this->carNumber = $carNumber;
        $this->licenseNumber = $licenseNumber;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.

    }

    /**
     * @return mixed
     */
    public function getCarNumber()
    {
        return $this->carNumber;
    }

    /**
     * @param mixed $carNumber
     */
    public function setCarNumber($carNumber)
    {
        $this->carNumber = $carNumber;
    }

    /**
     * @return mixed
     */
    public function getLicenseNumber()
    {
        return $this->licenseNumber;
    }

    /**
     * @param mixed $licenseNumber
     */
    public function setLicenseNumber($licenseNumber)
    {
        $this->licenseNumber = $licenseNumber;
    }


}