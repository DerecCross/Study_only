<?php
$str = 'ahb acb aeb aeeb adcb axeb';
$newStr = preg_match_all('/a..b/', $str);
print_r($newStr);