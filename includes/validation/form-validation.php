<?php
    //VALIDATION FOR NAME
    function valid_name($value){
        $nameCheck = "/^[a-zA-Z ]*$/"; 
      if (!preg_match($nameCheck, $value)){
        return false;
    }
        return true;
    }
    
    //VALIDATION FOR EMAIL
    function valid_email($value) {
       return(!filter_var($value, FILTER_VALIDATE_EMAIL));
    }
    
    //VALIDATION FOR PHONE
    function valid_phone($value){
        $phonePattern = "/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/";
    if (!preg_match($phonePattern, $value)){
        return false;
    }
        return true;
    }

    //FUNCTION TO CHECK EMPTY FIELDS 
    function empty_required($input){
        if($input == "" ){
            return false;
        }
        return true;
    }
    
    //FUNCTION I CREATED TO I DON'S HAVE TO TYPE EMPTY ERROR MESSAGE WHEN CALLING THE FUNCTIONS FOR VALIDATION
    function empty_message(){
        $errMessage = $nameErr = $emailErr = $phoneErr = "";
    }

//EOF
