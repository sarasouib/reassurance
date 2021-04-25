<?php

namespace Egio\Reassurance\Model\ResourceModel;

/**
 * Class Reassurance
 * @package Egio\Reassurance\Model\ResourceModel
 */
class Reassurance extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {

    /**
     * Construct
     */
    protected function _construct() {
        $this->_init('reassurance_entity', 'entity_id');
    }
}