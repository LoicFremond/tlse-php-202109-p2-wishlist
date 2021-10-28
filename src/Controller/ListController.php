<?php

namespace App\Controller;

class ListController extends AbstractController
{
    /**
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index(): string
    {
        return $this->twig->render('List/index.html.twig');
    }
}