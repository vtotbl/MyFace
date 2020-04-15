<?php

namespace App\Services;

/**
 * Class PhotoService
 * Сервис для работы с фотографиями
 * @package App\Services
 */
class PhotoService
{
    public function download($url, $name){
        $path = __DIR__.'/download/' . $name . 'j.pg';
        $file_path = fopen($path,'w');
        $client = new \GuzzleHttp\Client();
        $response = $client->get($url, ['save_to' => $file_path]);

        return ['response_code'=>$response->getStatusCode(), 'name' => $name];
    }
}
