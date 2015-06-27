<?php
	require 'LIB_http.php';
	require 'LIB_parse.php';
	//step1: http post 內湖院區
	$action = "https://www2.ndmctsgh.edu.tw/webreg/DpList.aspx";
	$data = array();
	/*
		eventTarget, eventArgument, validation, validationGroup, actionUrl, trackFocus, clientSubmit
	*/
	
	$data["eventTarget"] = "ctl00$LBB";
	$data["eventArgument"] = "";
	$data["validation"] = false;
	$data["validationGroup"] = "";
	$data["actionUrl"] = "DpList.aspx";
	$data["trackFocus"] = false;
	$data["clientSubmit"] = true;

	$data["__EVENTTARGET"] = "ctl00$LBB";	
	$data["__EVENTARGUMENT"] = "";	
	$data["__VIEWSTATE"] = "/wEPDwUKMTY1NDU2MTA1Mg9kFgJmD2QWAgIDD2QWAgIBDw8WAh4EVGV4dGVkZGSahQhf77B00fXvNBKgdbEhILnFXA==";	
	$data["POS"] = "B";
	
	$result = http($target = $action, $ref = "", $method = "POST", $data, INCL_HEAD);
	var_dump($result);
	$result = $result["FILE"];
	echo $result;
	$result = null;
	
	//step2: http post 某一科(胸腔內科)
	//javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$ContentPlaceHolder1$ctl00", "", false, "", "DrList.aspx", false, true))
	
	$data = array();
	$action = "https://www2.ndmctsgh.edu.tw/webreg/DrList.aspx";
	
	
	$data["eventTarget"] = "ctl00$ContentPlaceHolder1$ctl02";
	$data["eventArgument"] = "";
	$data["validation"] = false;
	$data["validationGroup"] = "";
	$data["actionUrl"] = "DrList.aspx";
	$data["trackFocus"] = false;
	$data["clientSubmit"] = true;
	
	$data["POS"] = "B";
	$data["a"] = "104";
	$data["b"] = "$ADG$B8z$A8x$C1x$AC$EC";//"%"A4"%"40"%"AF"%"EB"%"A4"%"BA"%"AC"%"EC
	$data["c"] = "1";
	$data["__EVENTTARGET"] = "ctl00$ContentPlaceHolder1$ctl02";	
	$data["__EVENTARGUMENT"] = "";	
	$data["__VIEWSTATE"] = "/wEPDwUKMTY1NDU2MTA1Mg9kFgJmD2QWAgIDD2QWAgIBDw8WAh4EVGV4dGVkZGSahQhf77B00fXvNBKgdbEhILnFXA==";
	$data["__VIEWSTATEGENERATOR"] = "9E46FA2A";
	$data["__PREVIOUSPAGE"] = "n8sIQqFBMEOuXS4D_x4ZaQ5Zb6NLuM4IpFXmyok3SdMZs9QYaP2OiFskEZ32w6NflB8h0tEQT9WLGACdxBXN9npVBR81";
	$data["__EVENTVALIDATION"] = "/wEWNQKypIH0AwKbqPHuCwLuqPHuCwL89v2rBQLhjeCWCwKyybnWCQKX4JvBDwKQ0obXDAL16OjBAgLGpMKBAQKru6TsBgKkrY+CBAKJxPHsCQL89oGsBQLhjeSWCwKyyb3WCQKX4J/BDwKQ0orXDAL16OzBAgLGpMaBAQKru6jsBgKkrZOCBAKJxPXsCQL89oWsBQLhjeiWCwKyycHWCQKX4KPBDwKQ0o7XDAL16PDBAgLGpMqBAQKru6zsBgKkrZeCBAKJxPnsCQL89omsBQLhjeyWCwKyycXWCQKX4KfBDwKQ0pLXDAL16PTBAgLGpM6BAQKru7DsBgKkrZuCBAKJxP3sCQL89u2rBQLhjdCWCwKyyanWCQKX4IvBDwKQ0vbWDAL16NjBAgLGpLKBAQKru5TsBgKkrf+BBAKJxOHsCYrofHad8DhVah8sap+hOIHfbOzB";
	
	$result = http($target = $action, $ref = "https://www2.ndmctsgh.edu.tw/webreg/DpList.aspx", $method = "POST", $data, INCL_HEAD);
	var_dump($result);
?>