<?php

namespace STK\AceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AceEditorType extends AbstractType
{
    public function getParent()
    {
        return TextareaType::class;
    }
}
