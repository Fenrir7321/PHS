<?php
class Character {
    public string $name;
    public int $health;
    public int $strength;
    public int $defense;

    public function __construct(string $name, int $health, int $strength, int $defense) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->defense = $defense;
    }

    public function changeHealthOfOthers(Boss $boss, Enemy $enemy, Friend $friend) {
        $boss->health = $this->health * 10;
        $enemy->health = $this->health / 2;
        $friend->health = $this->health / 2;
    }
}

class Boss {
    public string $name;
    public int $health;
    public int $strength;
    public int $defense;
    public string $specialAbility;

    public function __construct(string $name, int $health, int $strength, int $defense, string $specialAbility) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->defense = $defense;
        $this->specialAbility = $specialAbility;
    }
}

class Enemy {
    public string $name;
    public int $health;
    public int $strength;
    public int $defense;

    public function __construct(string $name, int $health, int $strength, int $defense) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->defense = $defense;
    }
}

class Friend {
    public string $name;
    public int $health;
    public int $strength;
    public int $defense;
    public string $supportAbility;

    public function __construct(string $name, int $health, int $strength, int $defense, string $supportAbility) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->defense = $defense;
        $this->supportAbility = $supportAbility;
    }
}
