<?php

session_star();
unset($_SESSION['userInfo']);

# session_destroy();
session_regenerate_id(true);

header('Location: auth.php');
exit;