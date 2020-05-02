<?php

namespace App\Services;

/**
 * Class PhotoService
 * Сервис для работы с фотографиями
 * @package App\Services
 */
class PhotoService
{
    /**
     * Метод для скачивания фотографий по url
     * @param string $url ссылка на фото
     * @param string $name имя фотографии
     * @param string $path путь к папке для сохранения
     *
     * @return array
     */
    public function download(string $url, string $name, string $path): array
    {
//        $path = __DIR__.'/download/' . $name . '.jpg';
        $path = $path . '/' . $name . '.jpg';
        $filePath = fopen($path,'w');
        $client = new \GuzzleHttp\Client();
        $response = $client->get($url, ['save_to' => $filePath]);

        return ['response_code'=>$response->getStatusCode(), 'name' => $name];
    }
}
