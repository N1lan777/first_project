<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>
<?php
//                1
/**$a=sqrt(379)  ;
echo round($a). '<br>';
echo round($a, 1). '<br>';
echo round($a, 2). '<br>';**/
//                2
/**$a=sqrt(587);
$arrey=['floor'=>floor($a), 'ceil' => ceil($a)];
var_dump($arrey)**/
//                3
/**$arr = [4, -2, 5, 19, -130, 0, 10];
echo min($arr);
echo max($arr);**/
//                4
// echo mt_rand(1,100)
//                5

/**$b = [];
for ($i = 1; $i <= 10; $i++) {
    $b[] = mt_rand(1, 100);
    print_r ($b) ;
}**/
//                6
/**$a = 2;
$b = 10;
$c = abs($a - $b);
echo $c**/
//                7
/**$a=[1, 2, -1, -2, 3, -3];
$b=[];
foreach($a as $value){
    $b[]= abs ($value);
}var_dump($b)**/
//                 8
/**$a=30;
$b=[];
for($i=1;$i<=30;$i++){
    if($a%$i==0){
        $b[]=$i;
      }

}print_r($b)**/
//                9
/**$a=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$b=0;
$c=0;
foreach($a as $value){
    $b+=$i;
    $c++;
    if($b>10){
        break;
    }

}echo $c**/
//               10
//$a='minsk';
// echo strtoupper($a);
//                   11
//$a='минск';
//echo mb_strtoupper($a)
//                    12
//$date='18-02-2023';
//echo str_replace(".","-",$date)
//                  13
//echo strtoupper('php')
//                    14
//echo strtolower('PHP')
//                   15
//echo ucfirst('london')
//                  16
//echo lcfirst('London')
//                    17
//echo ucwords('london is the capital of great britain')
//                    18
//echo strtolower('LONDON')
//                   19
//echo strlen('html css php')
//                   20
/**$password=1236;
if(strlen($password)>5 && strlen($password)<10){
    echo 'подходит';

}
else{
    echo 'не подходит';
}**/
//                  21
/**$a='html css php';
echo substr($a, 0, 4);
echo substr($a, 5, 3);
echo substr($a, 9, 3)**/
//                  22
/**a=3131;
echo substr($a,1,3)**/
//                    23
/**$a ='https://vk.com';
if (substr($a, 0, 6) == 'http://' || substr($a, 0, 6) == 'https://') {
    echo 'да';
} else {
    echo 'нет';
}**/
//                    24
/**$a ='https://vk.com';
if (substr($a, 0, 6) == 'http://' || substr($a, 0, 6) == 'https://') {
    echo 'да';
} else {
    echo 'нет';
}**/
//                   25
/**$str = 'kartinka.png';
if (substr($str, -4) == '.png') {
    echo 'да';
} else {  
    echo 'нет';
}**/
//                   26
/**$str = 'forest.jpg';
if (substr($str, -4) == '.png' || substr($str, -4) == '.jpg') {
    echo 'да';
} else {
    echo 'нет';
}**/
//                   27
//                   28
//$str = '31.12.2013';
//echo str_replace('.', '-', $str);
//                    29
//$str='aufhcbacbabchfjacb';
//echo str_replace(['a','b','c'],['1','2','3'],$str);
//                   30
//$str = '1a2b3c4b5d6e7f8g9h0';
//echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', $str);
//                    31
//$str = 'abcasdawerfabc';
//echo strtr($str, ['a' => 1, 'b' => 2, 'c' => 3]);
//echo strtr($str,'abc','123')                     
//                     32
//$str='9389834734';
//echo substr_replace($str,'!!!',2,7)
//                      33
//$str = 'abc abc abc';
//echo strpos($str, 'b');
//                      34
//$str = 'abc abc abc';
//echo strrpos($str, 'b');
//                     35
//$str = 'abc abc abc';
//echo strpos($str,' b', 3);
//                      36
//$str='aaa aaa aaa aaa aaa';
//$str2= strpos($str,' ');
//echo strpos($str,' ',$str2 +1 );  
//                    37
/**$str = 'aa..aa';
if (strpos($str, '..') !== false) {
    echo 'есть';
} else {
    echo 'нет';
}**/
//                   38
/**$a='http://site.com';
if(substr($a,0,7) =='http://'){
    echo 'да';
}
else{
    echo'нет';
}**/
//                   39
//$a='html css php';
//$arr = explode(' ', $a);
//print_r($arr)
//                   40
/**$arr=['html', 'css', 'php'];
$a =implode(',',$arr);
echo $a**/
//                    41
/**date='2013-12-31';
$arr=explode('-',$date);
echo $arr[2].'.'.$arr[1].'.'.$arr[0];**/
//                    42
//$a='1234567890';
//$arr=str_split($a,2);
//print_r($arr)
//                      43
//$a='1234567890';
//$arr=str_split($a);
//print_r($arr)
//                      44
//$a='1234567890';
//$arr=str_split($a,2,);
//echo implode('-', $arr);
//                        45
//$str = '  e232322 ';
//echo trim($str);
//                       46
//$a='/php/';
//echo    trim($a,'/')
//                        47
//$a = 'word word word';
//echo rtrim($a, '.') . '.';
//                       48
//$a='12345';
//echo strrev($a)
//                        49
/**$a = 'otto';
if ($a === strrev($a)) {
    echo 'да';
} else {
    echo 'нет';
}**/
//                          50
//$a='83438246fijrigjr';
//echo str_shuffle($a)
//                        51
//$str = 'abcdef';
//echo str_shuffle($str)
//                       52
//$a='12345678';
//echo number_format($a, 0, ' ', ' ');
?>
</body>
</html> 