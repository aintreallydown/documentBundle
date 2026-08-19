<?php

namespace aintreallydown\DocumentBundle\Form;

use App\Form\RentalFileFormType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RentalFileFormTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        return [RentalFileFormType::class];
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('documents', TextType::class, [
                'mapped' => false,
            ]);
    }
}
