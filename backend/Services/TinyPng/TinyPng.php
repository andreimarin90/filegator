<?php

namespace Filegator\Services\TinyPng;

use Throwable;
use Tinify\Source;
use Tinify\Tinify;

class TinyPng {
    protected const API_KEY = '4s1yLmWV304cmVcFMhRBm3Stx7Zp4d8J';

    public function __construct()
    {
        Tinify::setKey(self::API_KEY);
    }

    public function compressImage($imageName)
    {
        try {
            $source = Source::fromFile($imageName);
            $source->toFile($imageName);
        } catch (Throwable $e) {
            return $e;
        }

        return false;
    }
}