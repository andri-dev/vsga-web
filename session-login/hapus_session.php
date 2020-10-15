<?php
include_once('header.php');
// session_start();
session_destroy();
header('location: form_login.php');
echo "Session berhasil dihapus";

