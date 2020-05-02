<?php

namespace App\Services;

use App\Services\PhotoService;

/**
 * Class VkService
 * Класс для работы с vk.com
 * @package App\Services
 */
class VkService
{
    /**
     * Сервис для работы с фотографиями
     * @var PhotoService
     */
    protected $photoService;

    /**
     * VkService constructor.
     * @param \App\Services\PhotoService $photoService Сервис для работы с фотографиями
     */
    public function __construct(PhotoService $photoService)
    {
        $this->photoService = $photoService;
    }

    /**
     * Метод для скачивания фотографии по url
     * @param string $url
     * @return array
     */
    public function downloadPhoto(string $url): array
    {
        $name = md5(substr(md5(microtime()), mt_rand(0, 30), 2));
        $dir = substr(md5(microtime()), mt_rand(0, 30), 2)
            . '/'
            . substr(md5(microtime()), mt_rand(0, 30), 2);
        //toDo юзер и добавление в бд

        return $this->photoService->download($url, $name, $dir);
    }
}
