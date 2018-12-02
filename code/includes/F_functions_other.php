<?php
    function ubicacion()
    {
        if(!empty($_SERVER['HTTP_CLIENT_IP']))
        {
                 //ip from share internet
          $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
                  //ip pass from proxy
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
          $ip = $_SERVER['REMOTE_ADDR'];
        }
        #echo getUserIpAddr();
        $url = 'http://ip-api.com/json/'.$ip;
              #echo $url;
        return json_decode(file_get_contents($url), true);

    }
?>
