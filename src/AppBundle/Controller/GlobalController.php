<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GlobalController extends Controller
{

    /**
     * @Route("/cata/", name="cata")
     */
    public function indexAction()
    {
        $res = new Response(
            '<html><body><h1>This is me!!!</h1></body></html>'
        );
        return $res;
    }

    public function twigAction($x, $y)
    {
        $this->addFlash(
            'notice',
            'Tabel cu ' . $x . ' randuri si ' . $y . ' coloane!'
        );

        $data = array();
        $numar1 = $x;
        $numar2 = $y;

        for ($i = 1; $i <= $numar1; $i++) {
            for ($j = 1; $j <= $numar2; $j++) {
                $data[$i][] = 'c_' . $i .'_'. $j;
            }
        }

        $res = $this->render(
            'global/cata.html.twig',
            array('arr' => $data)
        );
        return $res;
    }
}
