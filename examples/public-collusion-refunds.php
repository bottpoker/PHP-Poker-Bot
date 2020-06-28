<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: public-collusion-refunds.php 
	** Endpoint: public/collusion-refunds
	** Name: Public -> List Collusion Refunds 
	** Description: List all collusion refunds that have been made by BottPoker. You can read more about [collusions here](./COLLUSIONS.md).

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='public/collusion-refunds';

################
# Declare $post array
################
$post=array();

$post['limit']='10';
$post['page']='1';

################
# EXECUTE using specific function within class
################

$result = $obj->public_collusion_refunds($post);

################
# EXECUTE using send(); Provide the name of the endpoint `public/collusion-refunds` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		