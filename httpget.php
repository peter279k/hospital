<?php
	$url = "https://www2.ndmctsgh.edu.tw/webreg/DrList.aspx";
	$header_arr = array(
		"Accept-Encoding: gzip, deflate, sdch",
		"Accept-Language: zh-TW,zh;q=0.8,en-US;q=0.6,en;q=0.4",
		"User-Agent: Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36",
		"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
		"Cache-Control: max-age=0",
		"Cookie: W_SC_ID=YBp+LBxg2noWyoYPYVdjloM1lGcA1; ASP.NET_SessionId=bqjcdh45dakupg55js0l31j5",
		"Connection: keep-alive"
	);
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	//curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0); //ssl(https)
	//curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0); //ssl(https)
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header_arr);
	$web_page = curl_exec($ch);
	curl_close($ch);
	file_put_contents("DrList.html", $web_page);
?>