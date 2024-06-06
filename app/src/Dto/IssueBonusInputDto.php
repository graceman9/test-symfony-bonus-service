<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class IssueBonusInputDto
{
    public function __construct(
        #[Assert\Positive()]
        public readonly int $clientId,

        public readonly bool $isEmailVerified,

        public readonly bool $isBirthday,
    ) {
    }
}
