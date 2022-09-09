<?php

namespace App\Helper\ApiHelpers;
class Helper{

    //This class is a validation for the apiResponse
    public static function ApiResponse($is_error, $code, $message, $content){

        $result = [];
        //if there is an error
        if($is_error){
            //the result success is going to be false.
            $result['success'] = false;
            //the result is going to show a code (400 for an error, 201 if it's successfull)
            $result['code'] = $code;
            //the result is going to show a message
            $result['message'] = $message;

        }
        //if there isn't an error
        else{
            //the result success is going to be true;
            $result['success'] = true;
            //the result is going to show a code (400 for an error, 201 if it's successfull)
            $result['code'] = $code;
            //if there isn't data to return
            if($content == null){
            //the result is going to show a message
            $result['message'] = $message;
            //if there is data to show
            }else{
                //the result is going to return the data.
                $result['data'] = $content;
            }
        }
        //the function return a result
        return $result;
    }



}