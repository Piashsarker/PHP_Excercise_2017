<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/22/2017
 * Time: 3:08 AM
 */

require_once ('Mail.php');
require_once ('MyAbstractClass.php');

class Report extends MyAbstractClass implements  Mail
{

    public function sendMail()
    {
        // TODO: Implement sendMail() method.
        echo "</br> A Mail is sent to the user ";
    }

    function get()
    {
        // TODO: Implement get() method.
    }
}