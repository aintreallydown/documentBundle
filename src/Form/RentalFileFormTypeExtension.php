<?php

namespace aintreallydown\DocumentBundle\Form;

use App\Form\RentalFileFormType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

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

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {

            $form = $event->getForm();

            $file = $form->getData();

            $extrafields = $file->getExtrafields() ?? [];

            $extrafields['document'] = $form->get('documents')->getData();

            $file->setExtrafields($extrafields);
        });
    }
}
