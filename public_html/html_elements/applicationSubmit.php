<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 3/24/17
 * Time: 6:58 PM
 */

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    header("HTTP/1.1 403 Forbidden");
    exit;
}

require "../../vendor/autoload.php";

