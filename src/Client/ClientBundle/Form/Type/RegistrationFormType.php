<?php
/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Client\ClientBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('username', null, array('attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Username','title'=>'Ajouter une chaine de caractere'),'label' => false, 'translation_domain' => 'FOSUserBundle'))
            ->add('email', 'email', array('attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Email','title'=>'Ajouter une email valide'),'label' => false, 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('attr'=>array('class'=>'form-control','placeholder'=>'Password'),'label' => false),
                'second_options' => array('attr'=>array('class'=>'form-control','placeholder'=>'Confirm Password'),'label' => false),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
        ;
    }
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}