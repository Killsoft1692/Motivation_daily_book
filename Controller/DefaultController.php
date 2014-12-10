<?php

namespace Acme\DailyBundle\Controller;

use Acme\DailyBundle\Entity\Tasks;
use Acme\DailyBundle\Form\Type\TasksType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 * @package Acme\DailyBundle\Controller
 */
class DefaultController extends Controller
{
   public function createAction(Request $request)
    {
        $tasks = new Tasks();
        $tasks->setDueDate(new \DateTime('today'));

        $form = $this->createForm(new TasksType(), $tasks);
        $form->handleRequest($request);

        if($form->isValid()){

            $a = $this->getDoctrine()->getManager();
            $a->persist($tasks);
            $a->flush();

            return $this->redirect($this->generateUrl('tasks_execute'));
        }

        return $this->render('AcmeDailyBundle:Default:index.html.twig', array(
        'form'=>$form->createView()));

    }

    /**
     * @Template()
     */
    public function indexAction()
    {
        $a = $this->getDoctrine()->getManager();

        $many = $a->getRepository('AcmeDailyBundle:Tasks')->findAll();

        return $this->render('AcmeDailyBundle:Default:show.html.twig',array('many'=>$many));
    }
}
