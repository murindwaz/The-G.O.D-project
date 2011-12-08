<?php

namespace Devlab\PollBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('text')
            ->add('reponses', 'collection', array(
                    'type' => new ReponseType(),
                    'allow_add' => true,
                    'prototype' => true,
                    // Post update
                    'by_reference' => true,
                    ))
        ;
    }


public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Devlab\PollBundle\Entity\Question',
        );
    }

    public function getName()
    {
        return 'devlab_pollbundle_questiontype';
    }
}
