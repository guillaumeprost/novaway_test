<?php
/**
 * Created by PhpStorm.
 * User: guillaumeprost
 * Date: 26/02/2017
 * Time: 15:03
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

abstract class BaseController extends Controller
{
    /**
     * @return \Doctrine\Common\Persistence\ObjectManager|object
     */
    public function getEntityManager()
    {
        return $this->getDoctrine()->getManager();
    }
}
