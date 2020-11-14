<?php

namespace App\Form;

use App\Entity\Survey;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class SurveyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('civility', ChoiceType::class, array(
            'choices'  => array(
                'MADAME' => 'MADAME',
                'MONSIEUR' => 'MONSIEUR',
                'MADEMOISELLE' => 'MADEMOISELLE',
            ),
            'expanded' => true,
            'multiple' => false,
            'label'    => 'Civilité *',
            'required' => true,
            'placeholder' => false,
            'empty_data' => 'MASCULIN',
            'preferred_choices' => function ($choice, $key, $value) {
                return $choice;
            },
        ))
        ->add('gender', ChoiceType::class, array(
                'choices'  => array(
                    'MASCULIN' => 'MASCULIN',
                    'FEMININ' => 'FEMININ',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => 'Genre *',
                'required' => true,
                'placeholder' => false,
                'empty_data' => 'MASCULIN',
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
            ))
            ->add('birthDate', BirthdayType::class, [ 'placeholder' => [ 'day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'],
            'label' => 'Date de naissance' ])
            ->add('maritalStatus', ChoiceType::class, array(
                'choices'  => array(
                    'MARIE(E)' => 'MARIE(E)',
                    'DIVORCE(E)' => 'DIVORCE(E)',
                    'VEUVE/VEUF' => 'VEUVE/VEUF',
                    'SEPARE(E)' => 'SEPARE(E)',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => 'Statut marital ? *',
                'required' => true,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
            ))
            ->add('doYouHaveChild', ChoiceType::class, array(
                'choices'  => array(
                    'OUI' => 'OUI',
                    'NON' => 'NON',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => 'Avez-vous des enfants ? *',
                'required' => true,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
                
            ))
            ->add('sonNumber', ChoiceType::class, array(
                'choices'  => array(
                    '0' => '0',
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    'Plus' => 'Plus',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => 'Si oui, combien ?',
                'required' => true,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
                
            ))
            ->add('familyLinkWithAlzheimerPerson',ChoiceType::class, array(
                'choices'  => array(
                    'CONJOINT' =>'CONJOINT',
                    'ENFANT' => 'ENFANT',
                    'AUTRE' => 'AUTRE',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => 'Quel est votre lien avec votre proche atteint d\'Alzheimer ?',
                'required' => false,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
              
            ))
            ->add('familyLinkWithAlzheimerPersonIfOther',
            TextareaType::class, ['label' => 'Si autre, précisez ?'])
            ->add('timePerWeekWithAlzheimerPerson',
            TextareaType::class, ['label' => 'Chaque semaine, combien de temps lui consacrez-vous ? *'])
            ->add('doYouChangeYourLifeOrganisation',ChoiceType::class, array(
                'choices'  => array(
                    'OUI' => 'OUI',
                    'NON' => 'NON',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => 'Avez-vous du changer l\'organisation de votre vie au quotidien ?',
                'required' => false,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
                
            ))
            ->add('howIsTheCare',ChoiceType::class, array(
                'choices'  => array(
                    'FACILE' => 'FACILE',
                    'DIFFICILE' => 'DIFFICILE',
                    'VARIABLE' => 'VARIABLE',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => 'La prise en charge est-elle ?',
                'required' => false,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
               
            ))
            ->add('areYouSurrounded',ChoiceType::class, array(
                'choices'  => array(
                    'OUI' => 'OUI',
                    'NON' => 'NON',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => 'Etes-vous entouré(e) ? *',
                'required' => false,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
               
            ))

            ->add('doYouFeelAlone',ChoiceType::class, array(
                'choices'  => array(
                    'OUI' => 'OUI',
                    'NON' => 'NON',
                    'PARFOIS' => 'PARFOIS',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => 'Vous sentez-vous seul(e) ? *',
                'required' => false,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
                
            ))
            ->add('doYouKnowDrugsPrescribedForAlzheimerDisease',ChoiceType::class, array(
                'choices'  => array(
                    'OUI' => 'OUI',
                    'NON' => 'NON',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => ' Connaissez-vous les médicaments prescrits dans le cadre de la maladie d\'Alzheimer ? *',
                'required' => false,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
            ))
            ->add('doYouKnowExistingAssistanceAndSupportSystems',ChoiceType::class, array(
                'choices'  => array(
                    'OUI' => 'OUI',
                    'NON' => 'NON',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => ' Connaissez-vous les dispositifs d\'aide, d\'accompagnement existants ? *',
                'required' => false,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
            ))
            ->add('doYouKnowExistingAssistanceAndSupportSystemsIfYes',
            TextareaType::class, ['label' => 'Si oui lesquels ? *'])
            ->add('whatAreYouDoingTogether',ChoiceType::class, array(
                'choices'  => array(
                    'DISCUSSIONS' => 'DISCUSSIONS',
                    'PROMENADES/SORTIES' => 'PROMENADES/SORTIES',
                    'APPRENTISSAGE' => 'APPRENTISSAGE',
                    'CÂLINS/EMBRASSADES' => 'CÂLINS/EMBRASSADES',
                    'JEUX' => 'JEUX',
                    'RIEN' => 'RIEN',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => 'Que faites-vous ensemble * ?',
                'required' => false,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
            ))
            ->add('doYouHavePlans',ChoiceType::class, array(
                'choices'  => array(
                    'OUI' => 'OUI',
                    'NON' => 'NON',
                ),
                'expanded' => true,
                'multiple' => false,
                'label'    => 'Avez-vous des projets * ?',
                'required' => false,
                'placeholder' => false,
                'preferred_choices' => function ($choice, $key, $value) {
                    return $choice;
                },
            ))
            ->add('doYouHavePlans',RadioType::class, ['label' => 'Si oui, pouvez-vous m\'en dire plus sur ces projets ?'])
            /*
            ->add('doYouHavePlansIfYes',TextareaType::class, ['label' => 'Si oui, lesquels ?'])
            ->add('anyThingToAdd',TextareaType::class, ['label' => 'Avez-vous autres choses à ajouter ?'])
            ->add('anyComments',TextareaType::class, ['label' => 'Des commentaires ?'])
            */
            ->add('submit', SubmitType::class, [
                'label' => "Enregistrer"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Survey::class,
        ]);
    }
}
