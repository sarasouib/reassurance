<?php
namespace Egio\Reassurance\Block\Adminhtml\Reassurance\Edit;

use \Magento\Backend\Block\Widget\Form\Generic;

class Form extends Generic
{

    /**
     * @var \Magento\Store\Model\System\Store
     */
    protected $_systemStore;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param \Magento\Store\Model\System\Store $systemStore
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Store\Model\System\Store $systemStore,
        array $data = []
    ) {
        $this->_systemStore = $systemStore;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * Init form
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('reassurance_form');
        $this->setTitle(__('Reassurance Information'));
    }

    /**
     * Prepare form
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        /** @var \Egio\Reassurance\Model\Reassurance $model */
        $model = $this->_coreRegistry->registry('reassurance');

        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            ['data' => ['id' => 'edit_form', 'action' => $this->getData('action'), 'method' => 'post']]
        );

        $form->setHtmlIdPrefix('reassurance_');

        $fieldset = $form->addFieldset(
            'base_fieldset',
            ['legend' => __('General Information'), 'class' => 'fieldset-wide']
        );

        if ($model->getId()) {
            $fieldset->addField('entity_id', 'hidden', ['name' => 'entity_id']);
        }

        $fieldset->addField(
            'libelle',
            'text',
            ['name' => 'libelle', 'label' => __('Libelle'), 'title' => __('Libelle'), 'required' => true]
        );

        $fieldset->addField(
            'description',
            'editor',
            ['name' => 'description', 'label' => __('description'), 'title' => __('Description'), 'required' => true]
        );
        $fieldset->addField(
            'icon',
            'text',
            ['name' => 'icon', 'label' => __('Icon'), 'title' => __('Icon'), 'required' => false]
        );
        $fieldset->addField(
            'alt',
            'text',
            ['name' => 'alt', 'label' => __('Alt'), 'title' => __('Alt'), 'required' => false]
        );
        $fieldset->addField(
            'statut',
            'boolean',
            ['name' => 'statut', 'label' => __('Statut'), 'title' => __('Status'), 'required' => true]
        );
        $fieldset->addField(
            'ordre',
            'text',
            ['name' => 'ordre', 'label' => __('Ordre'), 'title' => __('Ordre'), 'required' => true]
        );
        $fieldset->addField(
            'lien',
            'text',
            ['name' => 'lien', 'label' => __('Lien'), 'title' => __('Lien'), 'required' => false]
        );
        $fieldset->addField(
            'title_lien',
            'text',
            ['name' => 'title_lien', 'label' => __('Titre du lien'), 'title' => __('Titre du lien'), 'required' => false]
        );
        $fieldset->addField(
            'nouvelle_fenetre',
            'boolean',
            ['name' => 'nouvelle_fenetre', 'label' => __('Nouvelle Fenetre'), 'title' => __('Nouvelle Fenetre'), 'required' => false]
        );



        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}