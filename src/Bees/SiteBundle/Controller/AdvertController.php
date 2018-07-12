<?php
/**
 * Created by PhpStorm.
 * User: Dim
 * Date: 10/07/2018
 * Time: 16:04
 */

namespace Bees\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('BeesSiteBundle:Advert:index.html.twig');

        return new Response($content);
    }

    public function methodeAction()
    {
        $content = $this->get('templating')->render('BeesSiteBundle:Advert:methode.html.twig');

        return new Response($content);
    }

}