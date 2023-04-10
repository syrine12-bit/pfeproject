<?php

namespace App\Form;

use App\Entity\Information;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MonthType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class InformationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class)
            ->add('nom_de_famille', TextType::class)
            ->add('titre_du_profil', TextType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Titre du profil'
                ]
            ])
            ->add('numero', TextType::class)
            ->add('email', TextType::class, [
            ])
            ->add('adresse', TextType::class, [
                'required' => false
            ])
            ->add('codePostal', TextType::class, [
                'required' => false
            ])
            ->add('ville', TextType::class, [
                'required' => false
            ])
            ->add('profil', TextType::class, [
                'required' => false
            ])
            ->add('formation', TextType::class, [
                'required' => false
            ])
            ->add('niveauEtudes', TextType::class, [
                'required' => false
            ])


            ->add('etablissement', TextType::class, [
                'required' => false
            ])
            ->add('lieu', TextType::class, [
                'required' => false
            ])
            ->add('dateDebut', DateTimeType::class, [
                'widget' => 'choice',
                'years' => range(date('Y'), date('Y') - 10),
                'months' => range(1, 12),
                'html5' => false, // disable html5
                'format' => 'y/M/d',
                'required' => false
            ])
            ->add('dateFin', DateTimeType::class, [
                'widget' => 'choice',
                'years' => range(date('Y'), date('Y') - 10),
                'months' => range(1, 12),
                'html5' => false, // disable html5
                'format' => 'y/M/d',
                'required' => false
            ])
            ->add('description', TextType::class, [
                'required' => false
            ])
            ->add('poste', TextType::class, [

                'required' => false
            ])
            ->add('employer', TextType::class, [

                'required' => false
            ])
            ->add('dateDebutTravaille', DateTimeType::class, [
                'widget' => 'choice',
                'years' => range(date('Y'), date('Y') - 10),
                'months' => range(1, 12),
                'format' => 'y/M/d',
                'html5' => false, // disable html5
                'required' => false
            ])
            ->add('dateFinTravaille', DateTimeType::class, [
                'widget' => 'choice',
                'years' => range(date('Y'), date('Y') - 10),
                'months' => range(1, 12),
                'format' => 'y/M/d',
                'html5' => false, // disable html5
                'required' => false
            ])
            ->add('descriptionTravaille', TextType::class, [
                'required' => false
            ])
            ->add('competence', TextType::class, [

                'required' => false
            ])
            ->add('langue', TextType::class, [
                'required' => false
            ])
            ->add('interet', TextType::class, [
                'required' => false
            ])


            // add your form fields here//
            ->add('save', SubmitType::class, [
                'label' => 'Save',
                'attr' => ['class' => 'btn btn-primary mt-3 mb-5  justify-content-md-end'],
            ]);





    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Information::class,
        ]);
    }

}