<?php

namespace App\Controller;

use App\Dto\IssueBonusInputDto;
use App\Service\BonusService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/issue-bonus', name: 'app_issue_bonus')]
class IssueBonusController extends AbstractController
{
    public function __invoke(
        BonusService $bonusService,
        #[MapRequestPayload] IssueBonusInputDto $issueBonusInputDto,
    ): JsonResponse {
        $bonusIds = $bonusService->issueBonus($issueBonusInputDto);
        $response = ['bonus_ids' => $bonusIds];

        return $this->json($response);
    }
}
