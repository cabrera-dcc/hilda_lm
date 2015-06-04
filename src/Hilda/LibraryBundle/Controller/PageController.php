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

    public function neweditorialAction()
    {
        return $this->render('HildaLibraryBundle:Page:neweditorial.html.twig');
    }

    public function newauthorAction()
    {
        return $this->render('HildaLibraryBundle:Page:newauthor.html.twig');
    }

    public function newbookAction()
    {
        return $this->render('HildaLibraryBundle:Page:newbook.html.twig');
    }

    public function newcopyAction()
    {
        return $this->render('HildaLibraryBundle:Page:newcopy.html.twig');
    }
}