<?php
session_start();
session_unset();
session_destroy();
header("Location:../index.php"); // logout button press krhm i.p ekt ynn
exit();