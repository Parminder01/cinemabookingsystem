<?php

session_start();

session_destroy();

echo "You have successfully logged out. <a href='index.php'>Click here</a> to return";