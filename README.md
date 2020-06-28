# PHP Poker Bot Development Kit
![BottPoker Version 1](https://i.imgur.com/iHC63YY.png)
The `PHP Poker Bot Development Kit` is provided for usage on BottPoker.com. BottPoker.com embraces the 'poker bot wars', and provides a platform for you to test your coding skills. As part of this package there is `**59**` PHP examples. You can get a full `html` list of those [here](./examples/index.html) and there is the table below.

### Access to `closed-beta`
If you are interested in programming for the current closed beta then visit [bottpoker.com](https://bottpoker.com/) and apply to join the program.

### Poker Bot Documentation
The full REST API documentation can be found [here](https://github.com/bottpoker/API-Version-1).

### Building Poker Bots
We are currently releasing additional `poker_bots` for inclusion into this PHP poker bot kit. The intention of these bots is to provide a building block for developers to take to the next level and then deploy on the network.

### LIMITATIONS
There are several limitations that you should be aware of regarding the topic of `collusions` and `code of conduct`. The following table provides a list of important files that contain important information:

Filename | Focus
------------ | ------------
[README.md](https://github.com/bottpoker/API-Version-1/blob/master/README.md) | REST API information
[ERRORS.md](https://github.com/bottpoker/API-Version-1/blob/master/ERRORS.md) | Error code definitions
[BOT-RESTRICTIONS.md](https://github.com/bottpoker/API-Version-1/blob/master/BOT-RESTRICTIONS.md) | Any potential issues you may cause
[COLLUSIONS.md](https://github.com/bottpoker/API-Version-1/blob/master/COLLUSIONS.md) | Collusion management
[CODE-OF-CONDUCT.md](https://github.com/bottpoker/API-Version-1/blob/master/CODE-OF-CONDUCT.md) | Expected conduct of both bottpoker and users
[ENGINE-DISCLOSURE.md](https://github.com/bottpoker/API-Version-1/blob/master/ENGINE-DISCLOSURE.md) | Engine mechanics
[PAYOUT-MECHANICS.md](https://github.com/bottpoker/API-Version-1/blob/master/PAYOUT-MECHANICS.md) | Payout information for tournaments and sit and go
[RAISING-GUIDELINES.md](https://github.com/bottpoker/API-Version-1/blob/master/RAISING-GUIDELINES.md) | The format for raising a bet or call

### Full List of Endpoints

Filename | Name | Function | Parameters | Size
------------ | ------------ | ------------ | ------------ | ------------
[system-endpoints.php](./examples/system-endpoints.php) | System -> Endpoints | system_endpoints() | 0 | 1.1kb
[system-list-announcements.php](./examples/system-list-announcements.php) | System -> List Announcements | system_list_announcements() | 2 | 1.14kb
[system-ping.php](./examples/system-ping.php) | System -> Ping | system_ping() | 0 | 1.04kb
[system-status.php](./examples/system-status.php) | System -> Status | system_status() | 0 | 1.06kb
[system-timestamp.php](./examples/system-timestamp.php) | System -> Timestamp | system_timestamp() | 0 | 1.09kb
[tests-deal-community-cards.php](./examples/tests-deal-community-cards.php) | Tests -> Deal Community Cards | tests_deal_community_cards() | 2 | 1.39kb
[tests-deal-pockets.php](./examples/tests-deal-pockets.php) | Tests -> Deal Pockets | tests_deal_pockets() | 2 | 1.23kb
[bot-debug-log.php](./examples/bot-debug-log.php) | Bot -> Bot Debug Log | bot_debug_log() | 1 | 1.24kb
[bot-delete-bot.php](./examples/bot-delete-bot.php) | Bot -> Delete Bot | bot_delete_bot() | 1 | 1.05kb
[bot-list-bot-profitloss.php](./examples/bot-list-bot-profitloss.php) | Bot -> List Bot Profit and Loss (PNL) | bot_list_bot_profitloss() | 2 | 1.2kb
[bot-list-my-bots.php](./examples/bot-list-my-bots.php) | Bot -> List My Bots | bot_list_my_bots() | 2 | 1.19kb
[bot-register-bot.php](./examples/bot-register-bot.php) | Bot -> Register Bot | bot_register_bot() | 1 | 1.94kb
[deposit-list.php](./examples/deposit-list.php) | Deposit -> Deposit List | deposit_list() | 2 | 1.1kb
[deposit-request-deposit-address.php](./examples/deposit-request-deposit-address.php) | Deposit -> Request Deposit Address | deposit_request_deposit_address() | 1 | 1.3kb
[game-create-ring-game.php](./examples/game-create-ring-game.php) | Game -> Game Create Ring Game | game_create_ring_game() | 1 | 1.18kb
[game-create-tournament.php](./examples/game-create-tournament.php) | Game -> Game Create Tournament | game_create_tournament() | 8 | 1.36kb
[game-join.php](./examples/game-join.php) | Game -> Join Game | game_join() | 2 | 2.01kb
[game-leave.php](./examples/game-leave.php) | Game -> Leave Game | game_leave() | 2 | 1.43kb
[game-list-game-player-actions.php](./examples/game-list-game-player-actions.php) | Game -> List Game Player Actions | game_list_game_player_actions() | 0 | 1.27kb
[game-list-previous-hands.php](./examples/game-list-previous-hands.php) | Game -> List Previous Hands | game_list_previous_hands() | 3 | 1.19kb
[game-list-table-players.php](./examples/game-list-table-players.php) | Game -> List Table Players | game_list_table_players() | 1 | 1.18kb
[game-payout-table.php](./examples/game-payout-table.php) | Game -> Payout Table | game_payout_table() | 1 | 1.13kb
[game-realtime.php](./examples/game-realtime.php) | Game -> Real-time Game Data | game_realtime() | 1 | 1.3kb
[game-actions-sit-in.php](./examples/game-actions-sit-in.php) | Game -> Sit In | game_actions_sit_in() | 1 | 1.19kb
[game-actions-sit-out.php](./examples/game-actions-sit-out.php) | Game -> Sit Out | game_actions_sit_out() | 1 | 1.24kb
[public-collusion-list.php](./examples/public-collusion-list.php) | Public -> List Collusions | public_collusion_list() | 2 | 1.22kb
[public-collusion-refunds.php](./examples/public-collusion-refunds.php) | Public -> List Collusion Refunds | public_collusion_refunds() | 2 | 1.22kb
[public-leaderboards.php](./examples/public-leaderboards.php) | Public -> Leaderboards | public_leaderboards() | 3 | 1.19kb
[public-poker-list-ring-games.php](./examples/public-poker-list-ring-games.php) | Public -> List Ring Games | public_poker_list_ring_games() | 2 | 1.19kb
[public-poker-list-sitandgo-games.php](./examples/public-poker-list-sitandgo-games.php) | Public -> List Sit and Go Games | public_poker_list_sitandgo_games() | 2 | 1.22kb
[public-poker-list-tournament-games.php](./examples/public-poker-list-tournament-games.php) | Public -> List Tournament Games | public_poker_list_tournament_games() | 2 | 1.24kb
[system-version.php](./examples/system-version.php) | System -> System Version | system_version() | 0 | 1.08kb
[user-access-history.php](./examples/user-access-history.php) | User -> User Access History | user_access_history() | 0 | 1.13kb
[user-active-sessions.php](./examples/user-active-sessions.php) | User -> User Active Sessions | user_active_sessions() | 2 | 1.14kb
[user-api-limits.php](./examples/user-api-limits.php) | User -> User API Limits | user_api_limits() | 0 | 1.07kb
[user-game-history.php](./examples/user-game-history.php) | User -> Game History | user_game_history() | 3 | 1.19kb
[user-list-violations.php](./examples/user-list-violations.php) | User -> List Violations | user_list_violations() | 2 | 1.22kb
[withdraw-list.php](./examples/withdraw-list.php) | Withdraw -> Withdraw List | withdraw_list() | 2 | 1.12kb
[withdraw-request-withdraw.php](./examples/withdraw-request-withdraw.php) | Withdraw -> Request Withdraw | withdraw_request_withdraw() | 3 | 1.3kb
[game-actions-bet.php](./examples/game-actions-bet.php) | Game -> Bet | game_actions_bet() | 3 | 1.09kb
[game-actions-call.php](./examples/game-actions-call.php) | Game -> Call | game_actions_call() | 2 | 1.12kb
[game-actions-fold.php](./examples/game-actions-fold.php) | Game -> Fold | game_actions_fold() | 2 | 1.18kb
[game-actions-post-blind.php](./examples/game-actions-post-blind.php) | Game -> Post Blind | game_actions_post_blind() | 2 | 1.31kb
[game-actions-raise.php](./examples/game-actions-raise.php) | Game -> Raise | game_actions_raise() | 3 | 1.27kb
[game-actions-top-up.php](./examples/game-actions-top-up.php) | Game -> Game Actions | game_actions_top_up() | 2 | 1.17kb
[game-actions-allin.php](./examples/game-actions-allin.php) | Game -> All-in | game_actions_allin() | 2 | 1.18kb
[public-list-equity-pools.php](./examples/public-list-equity-pools.php) | Public -> List Equity Pools | public_list_equity_pools() | 0 | 1.11kb
[public-network-playing-statistics.php](./examples/public-network-playing-statistics.php) | Public -> Network Playing Statistics | public_network_playing_statistics() | 0 | 1.23kb
[tests-deal-full-details.php](./examples/tests-deal-full-details.php) | Tests -> Tests Deal Full Details | tests_deal_full_details() | 1 | 1.21kb
[user-list-rakebacks.php](./examples/user-list-rakebacks.php) | User -> User List Rakebacks | user_list_rakebacks() | 3 | 1.18kb
[user-list-rakes-paid.php](./examples/user-list-rakes-paid.php) | User -> User List Rakes Paid | user_list_rakes_paid() | 2 | 1.12kb
[user-rakeback-level.php](./examples/user-rakeback-level.php) | User -> User Rakeback Level | user_rakeback_level() | 0 | 1.15kb
[public-game-round-speeds.php](./examples/public-game-round-speeds.php) | Public -> Game Round Speeds | public_game_round_speeds() | 1 | 1.17kb
[public-game-speeds.php](./examples/public-game-speeds.php) | Public -> Game Speeds | public_game_speeds() | 0 | 1.09kb
[public-game-types.php](./examples/public-game-types.php) | Public -> Public Game Types | public_game_types() | 0 | 1.08kb
[user-active-bots.php](./examples/user-active-bots.php) | User -> Active Bots | user_active_bots() | 1 | 1.14kb
