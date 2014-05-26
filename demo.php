<?php

require "UserLang.class.php";

$obj = new UserLang('sitelang', 3600);
echo $obj->get().'<br>';

?>