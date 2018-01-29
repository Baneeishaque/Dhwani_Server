<?php

include_once 'config.php';

$status_sql = "SELECT `system_status`, `version_code`, `version_name` FROM `configuration`";
$status_result = $con->query($status_sql);

$emptyarray = array();

if (mysqli_num_rows($status_result) != 0) {

    array_push($emptyarray, array("status" => "0"));

    $emptyarray[] = mysqli_fetch_assoc($status_result);
} else {
    array_push($emptyarray, array("status" => "1"));
}

echo json_encode($emptyarray);


