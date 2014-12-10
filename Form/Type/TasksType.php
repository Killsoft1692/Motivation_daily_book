<?php

namespace Acme\DailyBundle\Form\Type;

use Acme\DailyBundle\Entity\Tasks;
use DateTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TasksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('main')
            ->add('second')
            ->add('third')
            ->add('end')
            ->add('dueDate', 'date', ['data' => new DateTime()])
            ->add('save', 'submit', array('label' => 'Add tasks'))
            ->getForm();
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=>'Acme\DailyBundle\Entity\Tasks'
        ));
    }

    public function getName()
    {
        return 'tasks';
    }
}