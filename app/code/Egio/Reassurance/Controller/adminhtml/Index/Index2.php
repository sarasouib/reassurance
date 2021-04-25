<?php /**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Egio\Reassurance\Controller\adminhtml\Index;

class Index2 extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        /* test 1 :
        echo 'Execute Action Index_Index OK';
        die();*/
        //test 2 :
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}