<?php 

namespace App\Form;

/* Se necesita para crear clases de formulario */
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AnimalType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('tipo',TextType::class, [
            'label' => 'Tipo de animal'
                    ])
                ->add('color',TextType::class)
                ->add('raza',TextType::class)
                ->add('submit',SubmitType::class,[
                    'label' => 'Crear Animal',
                    'attr' => ['class' => 'btn btn-success']
                ]);
    }
}

?>