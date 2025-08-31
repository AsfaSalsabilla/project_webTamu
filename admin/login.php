<?php
session_start();
$_SESSION['admin_name'] = 'Admin Acorn';
header("Location: dashboard.php");
