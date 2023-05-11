<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\BrowserKit\Request;

class MobileController extends AbstractController {

    #[Route('/mobile', name: 'app_mobile')]
    public function index(Request $request)
    {
        return $this->json([
            'nom' => 'Hello from mobile API!',
        ]);
    }
}