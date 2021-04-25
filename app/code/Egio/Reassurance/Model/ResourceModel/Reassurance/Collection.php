<?php

namespace Egio\Reassurance\Model\ResourceModel\Reassurance;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


class Collection extends AbstractCollection
{

    protected $_idFieldName = \Egio\Reassurance\Model\Reassurance::REASSURANCE_ID;

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Egio\Reassurance\Model\Reassurance', 'Egio\Reassurance\Model\ResourceModel\Reassurance');
    }

    /**
     * @return $this|void
     */
    protected function _initSelect() {
        parent::_initSelect();
        $this->getSelect();
        $this->setOrder('main_table.entity_id','DESC');
        return $this;
    }

}
