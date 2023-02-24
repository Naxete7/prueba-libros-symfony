<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
/**
 * @Route("/library/list".name="library_list")
 */

 public function list()
 {
    $response=New Response();
    $response ->setContent('<div>Hola Mundo</div>');
    return $response;
 }

}