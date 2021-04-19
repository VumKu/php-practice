<?php 

// setcookie("Cookie變數名稱","Cookie數值","期限","路徑","網域","安全");

setcookie("mycookie", "text中文");

// 通常我們只會用到前兩個參數：「Cookie 名稱」、「Cookie 值」，「期限」也可以設定，但沒設定的話就是瀏覽器關掉後就結束。

echo $_COOKIE['mycookie'];

?>



<!-- 第一次送出時會跑出warning(找不到)，因為那是第一次用戶端發送給php時，還沒有cookie；php要再將資料發回給用戶端時，這時候用戶端就帶有cookie了，因此刷新第二次時就可以讀到 -->