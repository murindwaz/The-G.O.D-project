<?php

namespace Devlab\PollBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('text')
            ->add('reponses')
        ;
    }

    public function getName()
    {
        return 'devlab_pollbundle_questiontype';
    }
}
