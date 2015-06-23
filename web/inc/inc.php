<?php
$cd = isset($cd)? $cd:'';

session_start();

include($cd.'inc/config.inc.php');

include($cd.'classes/class.exception.php');
include($cd.'classes/myPDO.class.php');

include('internationalisation.inc.php');