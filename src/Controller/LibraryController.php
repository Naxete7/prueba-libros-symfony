<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
/**
 * @Route("/library/list".name="library_list")
 */

 public function list()
 {
    $response=New JsonResponse();
    $response ->setData([
        'succes'=>true,
        'data'=>[
            [
                'id'=>1,
                'title'=>'Hacia rutas salvajes'
            ],
                [
                    'id' => 2,
                    'title' => 'Vigo es Vivaldi'
                ],
        ]
            ]);
    return $response;
 }

}