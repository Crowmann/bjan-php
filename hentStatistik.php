<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 30-11-2016
 * Time: 13:20
 */

echo file_get_contents("http://nodservice.cloudapp.net/WebService.svc/statistics/{$_GET['fra']}/{$_GET['til']}");