<?php


namespace Egio\Reassurance\Model;

/**
 * Class Reassurance
 * @package Egio\Reassurance\Model
 */
class Reassurance extends \Magento\Framework\Model\AbstractModel {

    const REASSURANCE_ID = 'entity_id'; // We define the id fieldname

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'egio'; // parent value is 'core_abstract'

    /**
     * Name of the event object
     *
     * @var string
     */
    protected $_eventObject = 'reassurance'; // parent value is 'object'

    /**
     * Name of object id field
     *
     * @var string
     */
    protected $_idFieldName = self::REASSURANCE_ID;
    /**
     * Construct
     */
    protected function _construct() {
        $this->_init('Egio\Reassurance\Model\ResourceModel\Reassurance');
    }
}