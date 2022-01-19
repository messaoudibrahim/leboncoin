<?php
/**
 * Created by PhpStorm.
 * User: Melvin
 * Date: 19/01/2022
 * Time: 22:20
 */

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/article", name="article_list")
     */
    public function getDATA()
    {
        return [];
    }
}
