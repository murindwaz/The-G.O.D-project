<?php

namespace Devlab\PollBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('text')
        ;
    }
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Devlab\PollBundle\Entity\Reponse',
        );
    }

    public function getName()
    {
        return 'devlab_pollbundle_reponsetype';
    }
}
