<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class DGBController
{
    #[Route('/api/dgb', name: 'dgb_hello')]
    public function index(): Response
    {
        return new Response('symfony de David Gómez Bravo a la llamada de React');
    }
}
