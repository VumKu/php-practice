<?php

// 等於 echo $_COOKIE['mycookie2'];

// 等於 echo isset($_COOKIE['mycookie2'])? '三元運算式'

echo $_COOKIE['mycookie2'] ?? '沒有設定: mycookie2';

//cookie他是共享資源，是可以跨頁面讀取的，一般變數在php檔裡要靠include來互相連動，但cookie可以直接跨頁讀取。

?>