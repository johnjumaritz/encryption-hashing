<?php

    function encryptthis($data){

        $encryption_key = (($data*123456789*5678)/956783);
        return urlencode(base64_encode($encryption_key));

        // the method shall be used for salting and passing the arguments of unique key 

    }


    
    function decryptthis($data){
        // the function deccryption
       
       
        
        if(!is_numeric($data)){

            $dec = base64_decode(urldecode($data));
            
            if(is_numeric($dec)){
               
            $encryption_key = ((($dec*956783)/5678)/123456789);
                return round($encryption_key);
            }else{
                header("location: clearDirectory.php");

            }

            }else{
                header("location: executeClearance.php");
            }

    }



?>