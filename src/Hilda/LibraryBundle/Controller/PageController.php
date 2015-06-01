<?php
// src/Hilda/LibraryBundle/Controller/PageController.php

namespace Hilda\LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('HildaLibraryBundle:Page:index.html.twig');
    }
}