<?php

// DO NOT CHEAT ! MAKE AN THE CSRF Attack ;)
session_start();

if(isset($_GET['reset']))
{
	session_destroy();
	session_start();
}

$data = preg_replace('/=/', '', file_get_contents("php://input"));
$data = json_decode($data, TRUE);


if ( isset($_SESSION['role']) && $_SESSION['role']==='admin' )
{
	// echo 'welcome admin!';
	if( $data['action'] === 'delete' && $data['account'] === 'n0c1tp3c3d' )
	{
		die(json_encode([
				'flag' => 'Congratulation!'
			]));
	}
}

if(json_last_error()!==JSON_ERROR_NONE)
{
	die(json_encode([
		'error' => '500 Internal Server Error 1'
		]));
}

switch ($_SERVER['REQUEST_METHOD']) 
{
	case 'POST':
		if( is_array($data) && $data['passwd'] === '1337')
		{
			$_SESSION['role']='admin';	
		}
		break;
	default:
		$_SESSION['role']='user';
		die(json_encode([
			'error' => '500 Internal Server Error 2'
			]));
}

?>