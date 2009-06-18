<?php

$installer = $this;

/* @var $installer Mage_Customer_Model_Entity_Setup */
$installer->startSetup();

$installer->addAttribute('catalog_product', 'delivery_time', array(
    'label' => 'Lieferzeit',
    'input' => 'text',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'searchable' => true,
    'comparable' => true,
    'visible_on_front' => true,
    'visible_in_advanced_search' => true,
    'default' => '2-3 Tage',
));

// NOTE: temporary fix for translate problem
// TODO: fix this!
$query = <<< EOF
    INSERT INTO `core_translate` (`key_id`, `string`, `store_id`, `translate`, `locale`)
    VALUES (NULL , '', '0', '', 'en_US'), (NULL , 'Symmetrics_DeliveryTime::Delivery time', '0', 'Lieferzeit', 'de_DE');
EOF;

$this->run($query);
$installer->endSetup();
