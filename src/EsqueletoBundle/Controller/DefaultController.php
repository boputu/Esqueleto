<?php

namespace EsqueletoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function indexAction()
    {
        return $this->render('EsqueletoBundle:Default:index.html.twig');
    }

    /**
     * @Route("/ranking", name="ranking")
     */
    public function rankingAction()
    {
        return $this->render('EsqueletoBundle:Default:ranking.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        return $this->render('EsqueletoBundle:Default:login.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction()
    {
        return $this->render('EsqueletoBundle:Default:register.html.twig');
    }

    /**
     * @Route("/cards", name="cards")
     */
    public function cardsAction()
    {
        return $this->render('EsqueletoBundle:Default:cards.html.twig');
    }

    /**
     * @Route("/createcard", name="createcard")
     */
    public function createCardAction()
    {
        return $this->render('EsqueletoBundle:Default:createcard.html.twig');
    }

}
