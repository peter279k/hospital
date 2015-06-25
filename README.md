# hospital
三軍總醫院資料Sample Code
#Dependencies
PHP/CURL
#Description
先從瀏覽器抓取curl的指令再轉換成http_get.php程式碼
####curl 指令(從 web console(F12) copy as curl)
curl -k "https://www2.ndmctsgh.edu.tw/webreg/DrList.aspx" 
-H "Accept-Encoding: gzip, deflate, sdch" 
-H "Accept-Language: zh-TW,zh;q=0.8,en-US;q=0.6,en;q=0.4"
-H "User-Agent: Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36" 
-H "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8" 
-H "Cache-Control: max-age=0" -H "Cookie: W_SC_ID=YBp+LBxg2noWyoYPYVdjloM1lGcA1; ASP.NET_SessionId=bqjcdh45dakupg55js0l31j5" 
-H "Connection: keep-alive" --compressed
#Usage
1. open terminal 輸入cd /ypath/to/hospital,再輸入 php httpget.php
2. 打開瀏覽器, 輸入 http://example.com/hospital/httpget.php
