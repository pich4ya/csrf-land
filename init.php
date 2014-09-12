<?php
	if(count(get_included_files()) == 1) 
		exit("Direct access not permitted.");

	session_start();

	function regenerate_session(){
        session_unset(); 
        session_destroy();
        session_start();
		// session_regenerate_id(true);
		$_SESSION['name'] = 'CatLover';
        $_SESSION['money'] = 10000;
        $_SESSION['timeout'] = time();
        regenerate_CSRF();
	}

    function regenerate_CSRF(){
        if(function_exists('openssl_random_pseudo_bytes')){
            $token = bin2hex(openssl_random_pseudo_bytes(20, $cstrong));
            if(!$cstrong) exit;
        }else if(function_exists('mt_rand')){
            $token = sha1(mt_rand());
        }else{
        	$token = sha1(uniqid(rand(), TRUE));;	
        } 
        $_SESSION['csrf_token'] = $token;
    }

    if (
    	! isset($_SESSION['name']) ||
    	isset($_POST['topup']) || 
    	$_SESSION['timeout'] + 3600 < time()
    ) {
		regenerate_session();
    }

    $name = $_SESSION['name'];
    $money = $_SESSION['money'];
    $csrf_token = $_SESSION['csrf_token'];

?>