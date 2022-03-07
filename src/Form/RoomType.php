<?php

namespace App\Form;

use App\Entity\Room;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RoomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('programedFor', null, [
                'date_widget' => 'single_text',
                'placeholder' => '-- Votre choix --',
                'attr' => ['class' => 'datepicker',
                    'placeholder' => '-- Votre choix --'],
                'empty_data' => 'mm/dd/yyyy',
                'time_widget' => 'single_text',
                'date_format' => 'mm/dd/yyyy',
                'html5' => false,
                'required' => false,
            ])
            ->add('users'
                , EntityType::class, [
                    'class' => User::class,
                    'multiple' => true,
                    'placeholder' => '-- Votre choix --',
                    'choice_label' => 'fullName',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->orderBy('u.fullName', 'ASC');
                    },
                    'label' => false,
                    'by_reference' => false,
                    'attr' => [
                        'class' => 'users input'],
                ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Room::class,
        ]);
    }
}
