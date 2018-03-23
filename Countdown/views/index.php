<div class='countdown-box'>
	<div class='countdown-info'>
		<span>剩余时间:</span>
		<span data-target='<?=$target ?>' class='countdown-timespan'></sapn>
	</div>
</div>
<?php
$js=<<<JS
function timeFormat(time){
	time = time / 1000;
	var days,hours,minutes = null;
	if(time > 3600*24){
		days = parseInt(time / (3600*24));
		time = time % (3600*24);
	}
	if(time > 3600){
		hours = parseInt(time/3600);
		time = time % 3600;
	}
	if(time > 60){
		minutes = parseInt(time/60);
		time = time%60;
	}
	var timeStr = '';
	timeStr += (!days)?'':days+' 天 ';
	timeStr += (!hours)?'':hours+' 时 ';
	timeStr += (!minutes)?'':minutes+' 分 ';
	timeStr += parseInt(time)+' 秒';
	return timeStr;
}
var target = $('.countdown-timespan').attr('data-target');
var starttime = new Date(target*1000);
setInterval(function () {
    var nowtime = new Date();
    var time = starttime - nowtime;
    $('.countdown-timespan').html(timeFormat(time));
}, 1000);
JS;
$this->registerJS($js);
?>