<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class GetIssuedBonusesInputDto
{
    public function __construct(
        #[Assert\Positive()]
        public readonly int $clientId,

        #[Assert\PositiveOrZero()]
        public readonly int $page = 0,

        #[Assert\PositiveOrZero()]
        public readonly int $limit = 5,
    ) {
    }
}
