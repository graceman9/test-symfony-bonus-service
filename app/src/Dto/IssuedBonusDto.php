<?php

namespace App\Dto;

use App\Entity\Reward;
use DateTimeImmutable;
use Symfony\Component\Validator\Constraints as Assert;

class GetIssuedBonusesInputDto
{
    public function __construct(
        #[Assert\NotBlank()]
        public readonly string $name,

        public readonly Reward $reward,

        public readonly DateTimeImmutable $created,
    ) {
    }
}
