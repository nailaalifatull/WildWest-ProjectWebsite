<?php
session_start();
session_destroy();
header("Location: ../awal/login.php");
exit;
