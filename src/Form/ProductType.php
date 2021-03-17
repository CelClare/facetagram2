<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\Client;
use App\Entity\Panier;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => 'firstname', 'help' => 'ceci est le firstname', 'required' => true,])
            ->add('price', IntegerType::class, ['label' => 'number'])
            ->add('category', TextType::class, ['label' => 'category'])
            ->add('client', EntityType::class, [
                'class' => Client::class,
                'choice_label' => 'client',
            ])
            ->add('paniers', EntityType::class, [
                'class' => Panier::class,
                'choice_label' => 'paniers',
            ])
            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'save'],
            ]);

        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}