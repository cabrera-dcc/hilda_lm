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

    public function editorialsAction()
    {
    	return $this->render('HildaLibraryBundle:Page:editorials.html.twig');
    }

    public function authorsAction()
    {
    	return $this->render('HildaLibraryBundle:Page:authors.html.twig');
    }

    public function booksAction()
    {
    	return $this->render('HildaLibraryBundle:Page:books.html.twig');
    }

    public function copiesAction()
    {
    	return $this->render('HildaLibraryBundle:Page:copies.html.twig');
    }
}