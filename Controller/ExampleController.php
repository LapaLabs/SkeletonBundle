<?php

namespace LapaLabs\SkeletonBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ExampleController
 * @Route("/example")
 */
class ExampleController extends Controller
{
    /**
     * @Route(path="/content", name="bw_skeleton_example_content")
     * @Template()
     */
    public function contentAction()
    {
        return [];
    }
}
