<?php

namespace App\Entity;

class Bonus {
    protected int $id;
    protected string $name;
    protected Reward $reward;
}