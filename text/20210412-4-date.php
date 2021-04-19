<div><?php

date_default_timezone_set('Asia/Taipei');

//顯示一串秒數 1970到現在
echo time() . '<br>';

//當下時間
echo date("Y-m-d H:i:s"). '<br>';

//30天後
echo date("Y-m-d H:i:s", time() + 2592000). '<br>';
echo date("Y-m-d H:i:s", time() + 30*24*60*60). '<br>';

//字串轉成日期存到資料庫，使用strtotime()
$t = strtotime('4/3/21');
echo $t . '<br>';
echo date("Y-m-d H:i:s", $t). '<br>';



//顯示出來的時間會是柏林那邊的時間，可以進入apche > 第三個鈕config > php.ini，搜尋timezone，改為asia/Taipei，設定檔要重新啟動才生效。

//如果無權限修改，可以在該php最前面加入 date_default_timezone_set('地區'); 但該作法只會讓該php檔生效，其他不會。

?>
</div> 



