<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
        $data = array();
        $numar1 = 10;
        $numar2 = 10;

        for ($i = 1; $i <= $numar1; $i++) {
            for ($j = 1; $j <= $numar2; $j++) {
                $data[$i][] = 'c_' . $i .'_'. $j;
            }
        }

        $res = $this->render(
            'AppBundle:product:index.html.twig',array('arr' => $data)
        );
        return $res;

    }

    public function listAction(){
        $res = $this->render(
            'AppBundle:product:list.html.twig',array('arr' => '')
        );
        return $res;
    }
}
