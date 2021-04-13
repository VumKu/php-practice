<?php

session_start();

unset($_SESSION['account']);

header('Location: 20210412-6-login.php');