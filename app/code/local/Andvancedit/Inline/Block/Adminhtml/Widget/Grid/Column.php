<?php

class Advancedit_Inline_Block_Adminhtml_Widget_Grid_Column extends Mage_Adminhtml_Block_Widget_Grid_Column
{

    public function getHeaderCssClass()
    {
        $class = parent::getHeaderCssClass();
        $class = $class . " myclass ";
        return $class;
    }

}