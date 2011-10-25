<?php

namespace Devlab\PollBundle\Controller;

use Devlab\PollBundle\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/question")
     * @Template()
     */
    public function indexAction() {
//        $question = new Question();
        $question = $this->getDoctrine()
                ->getRepository("DevlabPollBundle:Question")
                ->find(13);
//        $question->setText("Ceci est le premier essai");

        $form = $this->createFormBuilder($question)
                        ->add("text", "text")
                        ->getForm();

        return array('name' => $question->getText(), "form" => $form->createView());
    }

    /**
     * @Route("/question/new")
     * @Template()
     */
    public function newAction() {
        $question = new Question();
        $question->setText("Entre le text ici");
        $form = $this->createFormBuilder($question)
                        ->add("text", "text")
                        ->getForm();

        return array('name' => "test", "form" => $form->createView());
    }

    /**
     * @Route("/question/create")
     * @Template()
     */
    public function createAction(Request $request) {
        $question = new Question();
        $form = $this->createFormBuilder($question)
                ->add("text", "text")
                ->getForm();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
        }
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($question);
        $em->flush();
        return $this->redirect($this->generateUrl('devlab_poll_default_index'));
    }

}

