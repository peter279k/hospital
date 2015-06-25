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
方法1. open terminal 輸入cd /path/to/hospital,再輸入 php httpget.php
方法2. 打開瀏覽器, 輸入 http://example.com/hospital/httpget.php
###問題
可能用上述第2個方法會遭遇到錯誤，會得到html內容為:
<code><html></code>
<pre><head></pre>
<pre><title>Object moved</title></pre>
<pre></head></pre>
<pre><body></pre>
<pre><h2>Object moved to <a href="%2fwebreg%2fDefault.aspx">here</a>.</h2></pre>
<pre></body></pre>
<pre></html></pre>
###解法
1. 可以先用瀏覽器開一遍再去輸入 http://example.com/hospital/httpget.php
2. 直接使用指令模式
3. 也可以直接在server上執行crontab指令執行php /your-path/hospital/httpget.php抓取資料
