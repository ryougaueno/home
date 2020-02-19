document.getElementById("viewTime").innerHTML = getNowTime();

function getNowTime() {
    var now = new Date();
    // console.log(now);
	var year = now.getFullYear();//年
	var mon = now.getMonth()+1; //月 １を足す
	var day = now.getDate();//日
	var hour = now.getHours();//時間
	var min = now.getMinutes();//分
	var sec = now.getSeconds();//秒

	//出力
	var s = year + "年" + mon + "月" + day + "日" + hour + "時" + min + "分" + sec + "秒";
    return s;    
}
setInterval('getNowTime()',1000);

