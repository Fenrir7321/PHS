<?php

class Animal {
    private $age;
    private $height;
    private $length;
    private $voice;
    private $hasTail;

    public function __construct($age, $height, $length, $voice, $hasTail) {
        if ($age < 0){
            $age = 0;
        }
        if ($height < 0){
            $height = 0;
        }
        if ($length < 0){
            $length = 0;
        }
        if (empty($voice)){
            $voice = "No";
        }
        if (empty($hasTail)){
            $hasTail = false;
        }

        $this->age = $age;
        $this->height = $height;
        $this->length = $length;
        $this->voice = $voice;
        $this->hasTail = $hasTail;
    }



    public function getAge(int $age) {
        return $this->age;
    }

    public function getHeight(int $height) {
        return $this->height;
    }

    public function getLength(int $length) {
        return $this->length;
    }

    public function getVoice(string $voice) {
        return $this->voice;
    }

    public function getHasTail(bool $hasTail) {
        return $this->hasTail;
    }
}

//Пример использования
$cat = new Animal(3, 50, 30, 'meow', true);