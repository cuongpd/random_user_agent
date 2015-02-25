<?php

require_once 'uagent.lib.php';


$fp = fopen('user_agent.php', 'w');

$str = "<?php \n\n";
$str .= "";
$str .= "/*\n";
$str .= "|* Tool Name: Random UserAgent For PHP\n";
$str .= "|* Tool Url: https://github.com/cuongpd/random_user_agent\n";
$str .= "|* Tool Version : 1.0 \n";
$str .= "|* Tool Author : Cuong Pham \n";
$str .= "|* Tool URI : https://google.com/+PhamDinhCuong \n";
$str .= "|* Created at " . date('H:i:s d/m/Y', time()) . "  \n";
$str .= "*/\n\n";

$str .= "function random_user_agent() {\n";
$str .= '$list_agent = array();' . "\n";

for( $i = 0; $i < 1000; $i++ ) {
    $str .= '$list_agent[] = "' . random_uagent() . "\";\n";
}
$str .= 'shuffle($list_agent);' . "\n";
$str .= "\n\n";
$str .= 'return $list_agent[0];' . "\n";
$str .= "}";

fwrite($fp, $str);
fclose($fp);
