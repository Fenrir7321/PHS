<?php

class Additioner {
    public int $a;
    public int $b;

    public function __construct(int $a, int $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function add() {
        return $this->a + $this->b;
    }
}

class Subtractor {
    public int $a;
    public int $b;

    public function __construct(int $a, int $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function subtract() {
        return $this->a - $this->b;
    }
}

class Multiplier {
    public int $a;
    public int $b;

    public function __construct(int $a, int $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function multiply() {
        return $this->a * $this->b;
    }
}

class Divider {
    public int $a;
    public int $b;

    public function __construct(int $a, int $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function divide() {
        return $this->a / $this->b;
    }
}

class Calculator {
    public function calculate(string $operation, int $a, int $b) {
        if ($operation === '+') {
            $plus = new Additioner($a, $b);
            return $plus->add();
        }
        if ($operation === '-') {
            $minus = new Subtractor($a, $b);
            return $minus->subtract();
        }
        if ($operation === '*') {
            $times = new Multiplier($a, $b);
            return $times->multiply();
        }
        if ($operation === '/') {
            $divBy = new Divider($a, $b);
            return $divBy->divide();
        }
    }
}

$calc = new Calculator();
echo 'sum = ' . $calc->calculate('+', 73, 21) . '<br>';
echo 'difference = ' . $calc->calculate('-', 73, 21) . '<br>';
echo 'product = ' . $calc->calculate('*', 73, 21) . '<br>';
echo 'quotient = ' . $calc->calculate('/', 73, 21) . '<br>';