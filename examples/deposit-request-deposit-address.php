<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: deposit-request-deposit-address.php 
	** Endpoint: deposit/request-deposit-address
	** Name: Deposit -> Request Deposit Address 
	** Description: When depositing to the service you need to deposit to the service. Consult the endpoint `public/list-quity-pools` for the ID of the currency you would like to deposit too.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='deposit/request-deposit-address';

################
# Declare $post array
################
$post=array();

$post['equity_pool_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->deposit_request_deposit_address($post);

################
# EXECUTE using send(); Provide the name of the endpoint `deposit/request-deposit-address` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		