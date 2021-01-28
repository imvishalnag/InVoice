<?php
namespace App\SmsHelper;

use App\AppId;

class PushHelper {
    public static function notification($title, $body, $image_url,$news_id)
    {
        // Fetch All App ids from db and make an array
        $app_ids = AppId::select('app_id')->get()->map(function ($data) {        
            return $data->app_id;        
        });

        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $notification = [
            'body' => 'Hello World',
            'title' => 'World Hello',
            'sound' => true,
        ];

        $fcmNotification = [
            'registration_ids' => $app_ids, //multple token array
            // 'to'        => $token, //single token
            'data' => $notification
        ];
        
        $headers = [
            'Authorization: key=AAAArMyCX7E:APA91bF-lzgB7DGjG69Upf4IjsQEKqbIziyjFl6YvlBsOXWx6b21w85WqNBldCJCGIV190Eu0FLHFsc4MoaKeOuGW0UGSOdqF2t2nIVqhkYwvlc1rx8K3xqsKGcULA-Ab2BmVkepbVCy',
            'Content-Type: application/json'
        ];


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}