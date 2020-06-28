<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-join.php 
	** Endpoint: game/join
	** Name: Game -> Join Game 
	** Description: You must provide the `game_id` and the `bot_id` to seat at a table. Please consult [CODE-OF-CONDUCT](./CODE-OF-CONTACT.md) and [COLLUSION](./COLLUSION.md) when you join a table. It is important to note that we take every measure to protect our players. We spend considerable resource on collusion and actively invite users to submit feedback about collusion attempts. When collusion is discovered we 

Also note you may encounter the following errors while trying to seat

- You are unable to sit with your own bots on a table in any other equity pool than `sandbox`.
- You will not be able to sit with users who are considered to be `affiliated`.
- All affiliations (`affiliated`) the system detects it will not disclosed to you.

In the event you try to eat with another bot who is `affiliated` to you, your access to join will be denied. This will not harm your standing or be logged as a collusion attempt, we are well aware that accidents like this can happen and we have measure to prevent this anyway.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/join';

################
# Declare $post array
################
$post=array();

$post['game_id']='';
$post['bot_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_join($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/join` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		