 <?php
  

function send_LINE($msg){
 $access_token = 'FL+/K9TNqKpyQcnLwg/tcYMeT25mZH1wBWWzEMGpJBIae/iV98Cm2G2axpXn33d4G2siW60ij5c6YfW0JX/kNSgwQAau+DvLQBpELEoTmup3eg6RvRhNQkN4WUwkbwlXCKhyWv0PALIYzHAxiy3ddAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U80cd1efc0f24a1d29530fa0f566f072b',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
