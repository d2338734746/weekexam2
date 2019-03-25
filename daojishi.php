<?php 
date_default_timezone_set('PRC');
$timestr="2020-1-1 00:00:00";
$time=strtotime($timestr);
$nowtime=time();
if ($time>=$nowtime) {
	 $overtime=$time-$nowtime;
}else{
	$overtime=0;
}

 ?>

 <h4>距离2020年1月1日（新年）还剩<span id='day'><span id='D'></span>天</span><span id='hour'><span id='H'></span>时</span><span id='minute'><span id='M'></span>分</span><span id='second'><span id='S'></span>秒</span></h4>
 <script>
var runtime=0;
function Gettime(){
var prc=<?php echo $overtime; ?>*1000-runtime*1000;
 
var nd=Math.floor(prc/(1000*60*60*24))%365;
var nh=Math.floor(prc/(1000*60*24))%24;
var nm=Math.floor(prc/(1000*60))%60;
var ns=Math.floor(prc/(1000))%60;

document.getElementById('D').innerHTML=nd;
document.getElementById('H').innerHTML=nh;
document.getElementById('M').innerHTML=nm;
document.getElementById('S').innerHTML=ns;
runtime++;
if (nd==0) {
 document.getElementById('day').style.display="none";
 if (nh==0) {
 document.getElementById('hour').style.display="none";
 if (nm==0) {
 document.getElementById('minute').style.display="none";
 if (ns==0) {
alert('倒计时完毕');
   }
  }
 }
}
setTimeout(Gettime,1000);
}
window.onload=function(){
	Gettime();
};

 </script>