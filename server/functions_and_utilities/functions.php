<?php
    function check($url){
        $headers = @get_headers($url);
        if(!$headers || $headers[0] == 'HTTP/1.1 404 Not Found') {
            return FALSE;
        }else{
            return TRUE;
        }
    }
?>