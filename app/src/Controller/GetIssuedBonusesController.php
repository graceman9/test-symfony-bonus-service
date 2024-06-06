<?php

namespace App\Controller;

use App\Dto\GetIssuedBonusesInputDto;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\BonusService;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;

#[Route('/get-issued-bonuses', name: 'app_get_issued_bonuses')]
class GetIssuedBonusesController
{
    public function __invoke(
        BonusService $bonusService,
        #[MapRequestPayload] GetIssuedBonusesInputDto $getIssuedBonusesInputDto,
    ): JsonResponse {
        $total = $bonusService->getTotalIssuedBonuses($getIssuedBonusesInputDto->clientId);
        $bonuses = $bonusService->getIssuedBonuses($getIssuedBonusesInputDto);

        $response = [
            'bonuses' => $bonuses,
            'pagination' => [
                "total_records" => $total,
                "current_page" => $getIssuedBonusesInputDto->page,
                "total_pages" => 10,
                "next_page" => 2,
                "prev_page" => null
            ],
        ];

        return new JsonResponse($response);
    }
}
