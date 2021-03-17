<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, ['label' => 'firstname', 'help' => 'ceci est le firstname', 'required' => true,])
            ->add('lastname', TextType::class, ['label' => 'lastname'])
            ->add('organization', TextType::class, ['label' => 'organization'])
            ->add('jobtitle', TextType::class, ['label' => 'jobtitle'])
            ->add('email', EmailType::class, ['label' => 'email'])
            ->add('phonenumber', TelType::class, ['label' => 'phonenumber'])
            ->add('message', TextareaType::class, ['label' => 'message'])
            ->add('description', TextareaType::class, ['label' => 'Description'])
            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'save'],
            ]);

        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}