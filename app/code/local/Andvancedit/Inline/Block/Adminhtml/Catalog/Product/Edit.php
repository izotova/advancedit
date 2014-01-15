<?php

class Advancedit_Inline_Block_Adminhtml_Catalog_Product_Edit 
   extends Mage_Adminhtml_Block_Catalog_Product_Edit
{

    public function __construct()
    {   echo 'HELLO' ; exit();
        parent::__construct();
        $this->setTemplate('catalog/product/edit.phtml');
        $this->setId('product_edit');
    }
    
   
}
