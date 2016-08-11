<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('name', null, array('label' => 'form.name', 'translation_domain' => 'FOSUserBundle'))
              ->add('lastname' , null, array('label' => 'form.lastname', 'translation_domain' => 'FOSUserBundle'))
              ->add('birthday', null, array('label' => 'form.birthday', 'translation_domain' => 'FOSUserBundle', 'widget' => 'single_text'));   
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}