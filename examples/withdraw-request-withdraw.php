<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: withdraw-request-withdraw.php 
	** Endpoint: withdraw/request-withdraw
	** Name: Withdraw -> Request Withdraw 
	** Description: Withdraw your earnings to your desired location. The parameters may alter based on your requested withdraw method. All withdraw methods must have a whitelisted IP attached.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='withdraw/request-withdraw';

################
# Declare $post array
################
$post=array();

$post['equity_pool_id']='';
$post['address']='';
$post['amount']='';

################
# EXECUTE using specific function within class
################

$result = $obj->withdraw_request_withdraw($post);

################
# EXECUTE using send(); Provide the name of the endpoint `withdraw/request-withdraw` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		