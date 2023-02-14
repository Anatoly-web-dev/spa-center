<?php
session_start();
unset($_SESSION['currentUser']['authorized']);
header('location: http://practical-work-14/index.php'); // переходим на главную страницу