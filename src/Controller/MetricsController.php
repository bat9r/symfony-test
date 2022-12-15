<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/metrics'), IsGranted('ROLE_USER')]
class MetricsController extends AbstractController
{
    #[Route('/work-message-count', methods: ['GET'], name: 'work_message_count')]
    public function edit(EntityManagerInterface $em,): JsonResponse
    {
        return $this->json(['work_message_count' => $em->getConnection()->fetchOne('SELECT COUNT(*) FROM messenger_messages')]);
    }
}
