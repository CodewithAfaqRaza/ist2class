<?php

namespace App\Form;

use App\Entity\Candidate;
use App\Entity\Job;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobApplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('candidate', EntityType::class, [
            'class' => Candidate::class,
            'choice_label' => 'name',
        ])
        ->add('job', EntityType::class, [
            'class' => Job::class,
            'choice_label' => 'title',
            
        ])
         ->add('save', SubmitType::class ,['label'=>'Save'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}