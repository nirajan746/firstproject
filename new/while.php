<?php
$employee;
$employee['Name']='Age';
$employee['Nirajan']='28';
$employee['Deepin']='29';
$employee ['Anjan']='30';
$employee['Sandip']='31';
foreach($employee as $k=>$v)
{
echo $k.str_repeat('&nbsp;',10).$v.'<br>';
}

?>
