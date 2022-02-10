<?php

namespace App\Form;

use App\Entity\Room;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class  UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('fullName', TextType::class)
            ->add('email', EmailType::class)
            ->add('rooms', EntityType::class, [
                'class' => Room::class,
                'multiple' => true,
//                'placeholder' => '-- Votre choix --',
                'choice_label' => 'name',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                        ->orderBy('r.name', 'ASC');
                },
                'label' => false,
                'by_reference' => false,
                'attr' => [
                    'class' => 'rooms']
            ])
            ->add('imageFile', VichImageType::class, [
                'delete_label' => 'Remove file',
                'download_label' => 'Download file',
                'required' => false
            ]);
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
