<?php

	// logout from the network
   session_start();
   session_destroy();
   header('location:index.php');
   ?>