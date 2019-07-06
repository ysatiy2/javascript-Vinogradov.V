<?php
class Square {

static function Dat() {
error_reporting(-1);
if (isset($_GET['send'])){
$a = (int) $_GET['a'];
$b = (int) $_GET['b'];
$c = (int) $_GET['c'];
$dq = array ($a, $b, $c);
return $dq;
}

}

static function Eq_roots($dq) {
$a = $dq[0];
$b = $dq[1];
$c = $dq[2];
if ($a==0) return false;

if ($b==0) {
if ($c<0) {
$x1 = sqrt(abs($c/$a));
$x2 = sqrt(abs($c/$a));
} elseif ($c==0) {
$x1 = $x2 = 0;
} else {
$x1 = sqrt($c/$a).'i';
$x2 = -sqrt($c/$a).'i';
}
} else {
$d = $b*$b-4*$a*$c;
if ($d>0) {
$x1 = (-$b+sqrt($d))/2*$a;
$x2 = (-$b-sqrt($d))/2*$a;
} elseif ($d==0) {
$x1 = $x2 = (-$b)/2*$a;
} else {
$x1 = -$b . '+' . sqrt(abs($d)) . 'i';
$x2 = -$b . '-' . sqrt(abs($d)) . 'i';
}
}
return array($x1, $x2);

}
}
$result = Square::Eq_roots(Square::Dat());

?>

<p>Введите коэффициенты :</p>
<h4>a * x<sup>2</sup> + b * x + с = 0</h4>
<form method="GET">
<p>a = <input type="text" name="a" /></p>
<p>b = <input type="text" name="b" /></p>
<p>c = <input type="text" name="c" /></p>
<input type="submit" name="send" value="решить"/>
</form>

<? if (isset($result)): ?>
<hr/>
<p>Корни уравнения :</p>
<p>X<sub>1</sub> = <?=$result[0] ?></p>
<p>X<sub>2</sub> = <?=$result[1] ?></p>
<? endif ?>