<?php
require __DIR__ . '/_connect_db.php';

define('WEB_ROOT', '/proj60');

session_start();

// 定義絕對路徑，使用define('變數', '根目錄位置');
// 要記得把head和scripts裡面的link，原本是相對路徑的地方，改成我們定義成的絕對路徑變數。
