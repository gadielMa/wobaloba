<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class WobalobaController extends Controller {
    /*
     * @Route("/")
     * @Method({"GET"})
     */
    public function index() {
        return $this->render('wobaloba/index.html.twig');
    }

}
