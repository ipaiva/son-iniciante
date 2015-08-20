<?php

namespace SON\CatalogoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
#use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name, $sobrenome, $total)
    {
        /*
        $templating = $this->container->get("templating");

        $content = $templating->renderResponse("CatalogoBundle:Default:index.html.twig",
            array(
                'name' => $name
            ));

        return $content;
        */

        return $this->render('CatalogoBundle:Default:index.html.twig', array('name' => $name, 'sobrenome' => $sobrenome, 'total' => $total));
    }
}
