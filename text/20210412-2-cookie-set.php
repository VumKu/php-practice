<?php

echo setcookie('mycookie2', 'cookie2 中文', time()+10) ? 'True' : 'False';
//是的話就true : 不是的話就false

//time() 設定期限，多久以後會過期，time是從1970年開始算起到現在的秒數， +10就是現在開始的10秒後會過期。