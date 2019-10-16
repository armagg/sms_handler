<?php


namespace App\Service;


class SimpleService
{
    public function getSomeName()
    {
        $name = [
            'omid',
            'mammad',
            'pahmak'
        ];
        $index = array_rand($name);

        return $name[$index];
    }

}