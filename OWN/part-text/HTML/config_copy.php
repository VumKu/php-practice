<?php
require __DIR__ . '/_connect_db_copy.php';

define('WEB_ROOT', '/proj60');

session_start();

// 定義絕對路徑，使用define('變數', '根目錄位置');
// 要記得把head和scripts裡面的link，原本是相對路徑的地方，改成我們定義成的絕對路徑變數。

// session是一個對話、保持與連結，相較於cookie安全性較高。
// 通常如果你的網站具有會員登入的功能或是購物車的功能，基本上就可以使用到 session 來幫助你記錄這些資訊。
// ** session_start() 一定要放在網頁的最上方還沒有輸出任何東西之前。
