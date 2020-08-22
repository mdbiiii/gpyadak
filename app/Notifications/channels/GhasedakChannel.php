<?php


namespace App\Notifications\channels;




use Illuminate\Notifications\Notification;

class GhasedakChannel
{
public function Send($notifiable , Notification $notification){


    $message=$notification->toSms()['text'];
//    $message="این پیام جهت تست ارسال میگردد. باقری";
    $receptor="09193459871";
    $apiKey=config('services.sms.ghasedak');


    try
    {

        $lineNumber = "10008566";

        $api = new \Ghasedak\GhasedakApi($apiKey);
        $api->SendSimple($receptor,$message,$lineNumber);
    }
    catch(\Ghasedak\Exceptions\ApiException $e){
        throw $e;
    }
    catch(\Ghasedak\Exceptions\HttpException $e){
        throw $e;
    }

}


}
