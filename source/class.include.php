<?php

	class BottPoker
	{
	    private $api_key = '';
	    private $api_secret = '';

	    /**
	    * @param string $api_key       API key (visit bottpoker.com)
	    * @param string $api_secret    API secret (visit bottpoker.com)
	    */
	    public function __construct($api_key, $api_secret, $api_version = 'v1')
	    {

	        if(function_exists('curl_version')===true)
	        {
		        $this->api_key = $api_key;
		        $this->api_secret = $api_secret;
	        }
	        else
	        {
	            die('Fatal Error; CURL for PHP is not installed');
	        }
	    }

		public $version=1;
		public $domain='https://api.bottpoker.com';
		public $useragent='BottPoker v1 (PHP-BottPoker Class)';
		public $path='';
		public $url='';
		public $endpoints=array();
		public $timeout=2222;

		public function config($arr)
		{
			foreach($arr as $i=>$v)
			{
				$this->$i = $v;
			}
		}

		public function get_api_url($path)
		{
			return $this->domain . '/api/v' . $this->version . '/' . $path;
		}

		public function set_path($path)
		{
			$this->path = $path;
		}

		public function get_config()
		{
			return $this;
		}

		public function endpoints($input=array())
		{
			$this->set_path('system/endpoints');
			$return = $this->post($input,array());
			$this->endpoints = $return['body']['data'];

			return;

		}

		public function send($path,$input,$payload)
		{
			$this->set_path($path);
			return $this->post($input,$payload);
		}

		public function nonce()
		{
			return number_format(round(microtime(true) * 10000000), 0, '.', '');
		}

		public function authorize()
		{
            $this->payload['nonce']=$this->nonce();
			$bp01 = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode('{"typ":"JWT","alg":"HS256"}'));
			$bp02 = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode(json_encode($this->payload)));
			$sigi = hash_hmac('sha256', $bp01 . "." . $bp02, $this->api_secret, true);
			$bp03 = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($sigi));
			return $bp01.'.'.$bp02.'.'.$bp03;
		}

		public function get_endpoints()
		{
			return $this->endpoints;
		}

		public function post($input,$payload)
		{
			$ch = curl_init();

			##/
			if(!$ch)
			{
				return (object)array('code'=>100,'error'=>'PHP-CURL not enabled');
			}
			else
			{
				//
				$this->payload=$payload;
				//
				$this->url = $this->domain . '/api/v' . $this->version . '/' . $this->path;

				//
				curl_setopt($ch, CURLOPT_URL,            $this->url);
				curl_setopt($ch, CURLOPT_HEADER,         false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
				curl_setopt($ch, CURLOPT_NOPROGRESS,     true);
				curl_setopt($ch, CURLOPT_TIMEOUT_MS,     $this->timeout);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		        curl_setopt($ch, CURLOPT_USERAGENT,     $this->useragent);
				curl_setopt($ch, CURLOPT_HTTPHEADER,    ['Key: '.$this->api_key, 'Authorization: '.$this->authorize()]);

				##/
				if(count($input)>0)
				{
					##/
					curl_setopt($ch,CURLOPT_POST, count($input));
					curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($input));
				}

				##/
				ob_start();curl_exec($ch); $return = ob_get_clean(); $out=array('success'=>false,'body'=>array(),'network_info'=>array());

				##/
				if(empty($return))
				{
					##/
					$out['result']=false;
					$out['body']=$return;
				}
				else
				{
					$out['result']=true;
					$out['body'] = json_decode(trim($return),JSON_FORCE_OBJECT);
				}

				curl_close($ch);
			}

			return $out;
		}

		public function system_endpoints($input)
		{
			$this->set_path('system/endpoints');
			return $this->post($input,array());
		}


		public function system_list_announcements($input)
		{
			$this->set_path('system/list-announcements');
			return $this->post($input,array());
		}


		public function system_ping($input)
		{
			$this->set_path('system/ping');
			return $this->post($input,array());
		}


		public function system_status($input)
		{
			$this->set_path('system/status');
			return $this->post($input,array());
		}


		public function system_timestamp($input)
		{
			$this->set_path('system/timestamp');
			return $this->post($input,array());
		}


		public function tests_deal_community_cards($input)
		{
			$this->set_path('tests/deal-community-cards');
			return $this->post($input,array());
		}


		public function tests_deal_pockets($input)
		{
			$this->set_path('tests/deal-pockets');
			return $this->post($input,array());
		}


		public function bot_debug_log($input)
		{
			$this->set_path('bot/debug-log');
			return $this->post($input,array());
		}


		public function bot_delete_bot($input)
		{
			$this->set_path('bot/delete-bot');
			return $this->post($input,array());
		}


		public function bot_list_bot_profitloss($input)
		{
			$this->set_path('bot/list-bot-profitloss');
			return $this->post($input,array());
		}


		public function bot_list_my_bots($input)
		{
			$this->set_path('bot/list-my-bots');
			return $this->post($input,array());
		}


		public function bot_register_bot($input)
		{
			$this->set_path('bot/register-bot');
			return $this->post($input,array());
		}


		public function deposit_list($input)
		{
			$this->set_path('deposit/list');
			return $this->post($input,array());
		}


		public function deposit_request_deposit_address($input)
		{
			$this->set_path('deposit/request-deposit-address');
			return $this->post($input,array());
		}


		public function game_create_ring_game($input)
		{
			$this->set_path('game/create-ring-game');
			return $this->post($input,array());
		}


		public function game_create_tournament($input)
		{
			$this->set_path('game/create-tournament');
			return $this->post($input,array());
		}


		public function game_join($input)
		{
			$this->set_path('game/join');
			return $this->post($input,array());
		}


		public function game_leave($input)
		{
			$this->set_path('game/leave');
			return $this->post($input,array());
		}


		public function game_list_game_player_actions($input)
		{
			$this->set_path('game/list-game-player-actions');
			return $this->post($input,array());
		}


		public function game_list_previous_hands($input)
		{
			$this->set_path('game/list-previous-hands');
			return $this->post($input,array());
		}


		public function game_list_table_players($input)
		{
			$this->set_path('game/list-table-players');
			return $this->post($input,array());
		}


		public function game_payout_table($input)
		{
			$this->set_path('game/payout-table');
			return $this->post($input,array());
		}


		public function game_realtime($input)
		{
			$this->set_path('game/realtime');
			return $this->post($input,array());
		}


		public function game_actions_sit_in($input)
		{
			$this->set_path('game/actions/sit-in');
			return $this->post($input,array());
		}


		public function game_actions_sit_out($input)
		{
			$this->set_path('game/actions/sit-out');
			return $this->post($input,array());
		}


		public function public_collusion_list($input)
		{
			$this->set_path('public/collusion-list');
			return $this->post($input,array());
		}


		public function public_collusion_refunds($input)
		{
			$this->set_path('public/collusion-refunds');
			return $this->post($input,array());
		}


		public function public_leaderboards($input)
		{
			$this->set_path('public/leaderboards');
			return $this->post($input,array());
		}


		public function public_poker_list_ring_games($input)
		{
			$this->set_path('public/poker/list-ring-games');
			return $this->post($input,array());
		}


		public function public_poker_list_sitandgo_games($input)
		{
			$this->set_path('public/poker/list-sitandgo-games');
			return $this->post($input,array());
		}


		public function public_poker_list_tournament_games($input)
		{
			$this->set_path('public/poker/list-tournament-games');
			return $this->post($input,array());
		}


		public function system_version($input)
		{
			$this->set_path('system/version');
			return $this->post($input,array());
		}


		public function user_access_history($input)
		{
			$this->set_path('user/access-history');
			return $this->post($input,array());
		}


		public function user_active_sessions($input)
		{
			$this->set_path('user/active-sessions');
			return $this->post($input,array());
		}


		public function user_api_limits($input)
		{
			$this->set_path('user/api-limits');
			return $this->post($input,array());
		}


		public function user_game_history($input)
		{
			$this->set_path('user/game-history');
			return $this->post($input,array());
		}


		public function user_list_violations($input)
		{
			$this->set_path('user/list-violations');
			return $this->post($input,array());
		}


		public function withdraw_list($input)
		{
			$this->set_path('withdraw/list');
			return $this->post($input,array());
		}


		public function withdraw_request_withdraw($input)
		{
			$this->set_path('withdraw/request-withdraw');
			return $this->post($input,array());
		}


		public function game_actions_bet($input)
		{
			$this->set_path('game/actions/bet');
			return $this->post($input,array());
		}


		public function game_actions_call($input)
		{
			$this->set_path('game/actions/call');
			return $this->post($input,array());
		}


		public function game_actions_fold($input)
		{
			$this->set_path('game/actions/fold');
			return $this->post($input,array());
		}


		public function game_actions_post_blind($input)
		{
			$this->set_path('game/actions/post-blind');
			return $this->post($input,array());
		}


		public function game_actions_raise($input)
		{
			$this->set_path('game/actions/raise');
			return $this->post($input,array());
		}


		public function game_actions_top_up($input)
		{
			$this->set_path('game/actions/top-up');
			return $this->post($input,array());
		}


		public function game_actions_allin($input)
		{
			$this->set_path('game/actions/allin');
			return $this->post($input,array());
		}


		public function public_list_equity_pools($input)
		{
			$this->set_path('public/list-equity-pools');
			return $this->post($input,array());
		}


		public function public_network_playing_statistics($input)
		{
			$this->set_path('public/network-playing-statistics');
			return $this->post($input,array());
		}


		public function tests_deal_full_details($input)
		{
			$this->set_path('tests/deal-full-details');
			return $this->post($input,array());
		}


		public function user_list_rakebacks($input)
		{
			$this->set_path('user/list-rakebacks');
			return $this->post($input,array());
		}


		public function user_list_rakes_paid($input)
		{
			$this->set_path('user/list-rakes-paid');
			return $this->post($input,array());
		}


		public function user_rakeback_level($input)
		{
			$this->set_path('user/rakeback-level');
			return $this->post($input,array());
		}


		public function public_game_round_speeds($input)
		{
			$this->set_path('public/game-round-speeds');
			return $this->post($input,array());
		}


		public function public_game_speeds($input)
		{
			$this->set_path('public/game-speeds');
			return $this->post($input,array());
		}


		public function public_game_types($input)
		{
			$this->set_path('public/game-types');
			return $this->post($input,array());
		}


		public function user_active_bots($input)
		{
			$this->set_path('user/active-bots');
			return $this->post($input,array());
		}

	}

