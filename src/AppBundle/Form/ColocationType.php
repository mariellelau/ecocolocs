<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ColocationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('nom')
          ->add('nombrePersonnes')
          ->add('dateCreation')
          ->add('description')
          ->add('jardin')
          ->add('ressource')
          ->add('consommation')
          ->add('alimentation')
          ->add('espace')
          ->add('communaute')
          ->add('quartier')
          ->add('art')
          ->add('education')
          ->add('adresse')
          ->add('codePostal')
          ->add('ville')
            ->add('photo', FileType::class, array(
                    'label' => 'Image',
                    'required' => false,
                )
            )
            ->add('contact')
            ->add('site')
            ->add('facebook')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Colocation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_colocation';
    }


}
