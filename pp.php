<?
//задание 1
$i=0;
while ($i<=10){
    echo $i++
    ,PHP_EOL ;
}

//задание 2.1
$n = 1000;
$num = 0;
$c = 50;
for ($n = 1000; $n >= $c; $num++) {
    $n=$n/2;
}
echo 'Количество итераций: '.$num.PHP_EOL;
echo 'Число < '.$c.' = '.$n.PHP_EOL;
echo '<br>';

//задание 2
$num = 1000;
$n=0;
while ($num>=50)
{
    $num=$num/2;
    $n++;
}
echo 'Число < 50='.PHP_EOL.$num .'<br>';
echo 'Количество итераций: '.$n;
echo '<br>';
//задание 3
for ($i=0;$i+4<=10;$i++){
    echo "$i <br> ";
}









