<?php

namespace App\Service;

use App\Dto\GetIssuedBonusesInputDto;
use App\Dto\IssueBonusInputDto;

class BonusService {

    /**
     * @return int[]
     */
    public function issueBonus(IssueBonusInputDto $issueBonusInputDto): array {
        return [
            1,
            2,
        ];
    }

    public function getTotalIssuedBonuses(int $clientId): int {
        return random_int(1, 5);
    }

    /**
     * @return IssuedBonusDto[]
     */
    public function getIssuedBonuses(GetIssuedBonusesInputDto $getIssuedBonusesInputDto): array {
        return [
            'bonus1dto',
            'bonus2dto',
        ];
    }
}
