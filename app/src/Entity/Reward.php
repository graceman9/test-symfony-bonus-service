<?php

namespace App\Entity;

use App\Enum\RewardType;

class Reward {
    protected RewardType $type;
    protected int $amount;
}
