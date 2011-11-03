<?php

namespace Devlab\PollBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Devlab\PollBundle\Entity\Response;
use Devlab\PollBundle\Form\ResponseType;

/**
 * Response controller.
 *
 * @Route("/response")
 */
class ResponseController extends Controller
{

    /**
     * Displays a form to create a new Response entity.
     *
     * @Route("/new", name="response_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Response();
        $form   = $this->createForm(new ResponseType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Response entity.
     *
     * @Route("/create", name="response_create")
     * @Method("post")
     * @Template("DevlabPollBundle:Response:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Response();
        $request = $this->getRequest();
        $form    = $this->createForm(new ResponseType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('response_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}