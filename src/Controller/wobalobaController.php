<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class wobalobaController {
    
    /*
     * @Route("/")
     * @Method({"GET"})
     */
    public function index() {
        return new Response('<html><body>Hello</body></html>');
    }

}
