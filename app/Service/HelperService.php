<?php

namespace App\Service;

class HelperService
{


    public function getCoordinates(string $url): array
    {
        preg_match('/@(\-?[0-9]+\.[0-9]+),(\-?[0-9]+\.[0-9]+)/', $url,  $match  );
        return array([
            'latitude' => $match[1],
            'longitude' => $match[2]
        ]);
    }

    public function getVideoKey(string $url){
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $url, $match);
        return $match[1];
    }

}
