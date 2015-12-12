<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template("AppBundle:Default:index.html.twig")
     */
    public function indexAction(Request $request)
    {
        return ['page' => 'main'];
    }

    /**
     * @Route("/contacts", name="contacts")
     * @Template("AppBundle:Default:contacts.html.twig")
     */
    public function contactsAction(Request $request)
    {
        return ['page' => 'contacts'];
    }

    /**
     * @Route("/order", name="order")
     * @Template("AppBundle:Default:order.html.twig")
     */
    public function orderAction(Request $request)
    {
        return ['page' => 'order'];
    }

    /**
     * @Route("/about", name="about")
     * @Template("AppBundle:Default:about.html.twig")
     */
    public function aboutAction(Request $request)
    {
        return ['page' => 'about'];
    }

    /**
     * @Route("/portfolio", name="portfolio")
     * @Template("AppBundle:Default:portfolio.html.twig")
     */
    public function portfolioAction(Request $request)
    {
        return ['page' => 'portfolio'];
    }

}
