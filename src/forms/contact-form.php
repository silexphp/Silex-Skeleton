<?php
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;

$form = $app['form.factory']->createBuilder(FormType::class)
    ->add('name', TextType::class, [
        'attr' => [
            'autofocus' => true,
        ],
        'constraints' => [
            new Assert\NotBlank(),
        ],
    ])
    ->add('email', EmailType::class, [
        'constraints' => [
            new Assert\NotBlank(),
            new Assert\Email(),
        ],
    ])
    ->add('gender', ChoiceType::class, [
        'required' => false,
        'placeholder' => false,
        'attr' => [
            'class' => 'inline',
        ],
        'choices' => [
            'male' => 'male',
            'female' => 'female',
        ],
        'data' => 'male',
        'expanded' => true,
        'multiple' => false,
        'constraints' => [
            new Assert\Choice([
                'male',
                'female',
            ]),
        ],
    ])
    ->add('interesting_services', ChoiceType::class, [
        'required' => false,
        'attr' => [
            'placeholder' => 'Multiple selection',
        ],
        'choices' => [
            'Service A' => 'Service A',
            'Service B' => 'Service B',
            'Service C' => 'Service C',
        ],
        'expanded' => false,
        'multiple' => true,
    ])
    ->add('message', TextareaType::class, [
        'attr' => [
            'rows' => 5,
        ],
        'constraints' => [
            new Assert\NotBlank(),
        ],
    ])
    ->getForm()
;

return $form;
