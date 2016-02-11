<?php 
	// Database gegevens // username/password
require 'includes/config.php';

	// Connectie met de Database
require_once 'includes/database.php';


//haalt de header op
include 'views/header.php';

// instellingen voor de switch
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
	case 'home':
	include 'views/banner.php';
		break;
	

	case 'mywork':
		break;


	case 'detailpage';
    break;
    	
	default:
	
		break;


}

?>