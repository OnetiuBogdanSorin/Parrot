<?php

namespace App\Form;

use App\Entity\Parrot;
use App\Entity\Species;
use App\Entity\Subspecies;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParrotType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('species', EntityType::class, [
                'class' => 'App\Entity\Species',
                'mapped' => false
              ])
            ->add('age')
            ->add('sex',  ChoiceType::class, [
                'choices' => [
                    'Male'=>'Male',
                    'Female'=>'Female'
                ]
            ])
            ->add('color')
            ->add('save', SubmitType::class,[
                'attr' => [
                    'class' => 'btn btn-primary float-right'
                ]
            ])
        ;

        $builder->get('species')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event)
            {
                $form = $event->getForm();

                //$data = $event->getData();

                //$species = $data->getSpecies();

                $form->getParent()->add('subspecie', EntityType::class,[
                        'class' => 'App\Entity\Subspecies',
                        'choices' => $form->getData()->getSubspecies(),
                    ]
                );
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Parrot::class,
        ]);
    }
}
