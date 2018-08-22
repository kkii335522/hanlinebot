<?php
/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

 
require_once('./LINEBotTiny.php');
$channelAccessToken = 'U6++id4mj547Zzka/StPWHxE9TWU3YLRoW5UMocdfWEOxnbqO6NIwCLU8/nZD8xdAxdH9spwnRFfPAHo5vRCqO79Avlpl84U+y35LgL6+cFRZ6vfbhOa+n8gF9K+3EY1wIg9/+k5FNPcPE0bwJaIxwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '996ae268eeff17dbd5bb6693e69a880c';
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
//check user is exsist begin
    switch ($event['type']) {
        case 'message':
		    $message = $event['message'];
			
            switch ($message['type']) {
                case 'text':
				    $client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                        'messages' => array(
							array(
                                'type' => 'text',
                                'text' => '別生氣'
                            ),
							array(
                                'type' => 'text',
                                'text' => '別不爽'
                            )
							
						)
					));
				
            }
            break;
		
    }
};