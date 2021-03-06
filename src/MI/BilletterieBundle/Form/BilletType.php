<?php

namespace MI\BilletterieBundle\Form;

use Symfony\Component\DependencyInjection\Tests\Compiler\C;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BilletType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',            TextType::class)
            ->add('prenom',         TextType::class)
            ->add('email',          EmailType::class)
            ->add('age',            BirthdayType::class)
            ->add('pays',           CountryType::class, array(
                'placeholder' => 'Choisissez votre pays',
            ))
            ->add('reduc',          ChoiceType::class, array('choices' =>array(
                'Non' => false,
                'Oui' => true))
            );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MI\BilletterieBundle\Entity\Billet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'MI_BilletterieBundle_billet';
    }


}
