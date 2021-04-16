<?php

if (isset($_FILES['avatar'])){
    echo json_encode($_FILES['avatar']);
}


// 從postman裡面得出來的json，POST upload.php > 選form-data > 輸入key值然後選file(尾端隱藏選單)，如果value選擇一個以上的檔案，記得key值的地方要寫陣列(keyname[])，不然json只會抓到一個檔案。

// {
//     "name": [
//         "background-stone.png",
//         "使用色.jpg"
//     ],
//     "type": [
//         "image/png",
//         "image/jpeg"
//     ],
//     "tmp_name": [
//         "C:\\xampp\\tmp\\phpC82C.tmp",
//         "C:\\xampp\\tmp\\phpC82D.tmp"
//     ],
//     "error": [
//         0,
//         0
//     ],
//     "size": [
//         614736,
//         388629
//     ]
// }