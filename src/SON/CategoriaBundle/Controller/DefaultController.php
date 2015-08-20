<?php

namespace SON\CategoriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
            $produtos = array();

            for($i = 0; $i <= 10; $i++)
            {
                $produtos[$i]['nome'] = 'Produto '  . $i;
            }

        return $this->render('CategoriaBundle:Default:index.html.twig', array('produtos' => $produtos));
    }

    public function listProdutosCategoriaAction($categoria, $produto)
    {
        return $this->render('CategoriaBundle:Default:listProdutosCategoria.html.twig', array('categoria' => $categoria, 'produto' => $produto));
    }
}
