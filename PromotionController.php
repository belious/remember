<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PromotionController extends AbstractActionController
{
    public function promotionAction()
    {
        $page = $this->params()->fromRoute('promo');
        $this->layout('layout/blank');
		return new ViewModel(array("image"=>"/static/upload/promotion/".$page.".png"));
    }
	
}
            
        
