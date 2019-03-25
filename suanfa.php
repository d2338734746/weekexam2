<?php 
//输出无重复的三位数
//setouttime();
$arr=[1,2,3,4];
function san($arr){
$result=[];
$len=count($arr);
for ($i=0; $i <$len ; $i++) { 
for ($j=0; $j < $len; $j++) { 
for ($k=0; $k <$len ; $k++) { 
 if ($arr[$i]!=$arr[$j] && $arr[$j]!=$arr[$k] &&  $arr[$k]!=$arr[$i] ) {
 	$result[]=$arr[$i].$arr[$j].$arr[$k];
 }
}
}
}
return $result;
}
print_r(san($arr));

//编写一个单例模式
class Db{
private $instance=null;
private function __construct(){

}
private function __clone(){

}

public static function getInstance(){
	if (!(self::$instance==null)) {
	 self::$instance=new Db();
	}
	return self::$instance;
}
}

//遍历文件夹
$dir="D:\phpStudy\WWW\lianxi\day3";

function  my_dir($dir){
	if (is_dir($dir)){
if ($dh = opendir($dir)){
while (($file = readdir($dh)) !== false){
echo "filename:" . $file . "<br>";
}
closedir($dh);
}
}
}

echo  my_dir($dir);

//查找两个文件夹相同的部分
$aPath="/a/b/c/d/test.php";
$bPath="/a/b/d/c/test.php";
function findCommonPath($aPath,$bPath)
{
 $arr=explode('/',$aPath);
  $brr=explode('/',$bPath);
  $result=[];
  $len=count($arr)>count($brr)?count($brr):count($arr);
 for ($i=0; $i <$len; $i++) { 
  if ($arr[$i]==$brr[$i]) {
  	$result[]=$arr[$i];
  }else{
  	break;
  }
 }
 $result=implode('/', $result);
  return $result;
}
print_r(findCommonPath($aPath,$bPath));
 ?>


