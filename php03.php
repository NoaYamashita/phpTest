<?php
function multiple($num) {
    $result = $num*2;
    return $result;
}
echo multiple(200) . "\n";
?>
<br><br/>
2.
<?php
function add($a, $b) {
    $result = $a + $b;
    return $result;
}
echo add(8, 12) . "\n"
?>
<br><br/>
3.
<?php
$arr = array(1, 3, 5 ,7, 9) ;
function multiplication($arr) {
    $result = 1;
    foreach ($arr as $num) {
        $result *= $num;
    }
    return $result;    
}
echo multiplication($arr) . "\n"
?>
<br><br/>
4.
<?php
$arr = array(7, 4, 2, 43, 87, 3, 15);
function max_array($arr) {
    $max_number = $arr[0];
    foreach ($arr as $a) { 
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;    
}
echo max_array($arr) . "\n"
?>
<br><br/>
5.
<br><br/>
<?php
$str = "<h1>run,</h1>"
  . "<p>definitely</p>";
echo strip_tags($str) ."\n";
?>
<br><br/>
<?php
$week = array("mon", "tue", "wed", "thu");
array_push($week, "fri", "sat");
print_r ($week)
?>
<br><br/>
<?php
$month1 = array("mar", "jun");
$month2 = array("sep", "dec");
print_r(array_merge($month1, $month2));
?>
<br><br/>
<?php
$time = mktime(00, 00, 00, 1, 1, 1970);
print_r($time);
?>
<br><br/>
<?php
echo date('Y/m/d');
echo '<br>';
echo date('Y-m-d H:i:s');
?>
