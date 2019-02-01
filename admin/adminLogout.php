<?php
session_start();
session_destroy();
header('location:adminLogin.php?logged_out=You have logged out');