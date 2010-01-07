<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category  Symmetrics
 * @package   Symmetrics_DeliveryTime
 * @author    symmetrics gmbh <info@symmetrics.de>
 * @author    Sergej Braznikov <sb@symmetrics.de>
 * @copyright 2009 Symmetrics Gmbh
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      http://www.symmetrics.de/
 */
 
/**
 * Symmetrics_DeliveryTime_Helper_Data
 *
 * @category  Symmetrics
 * @package   Symmetrics_DeliveryTime
 * @author    symmetrics gmbh <info@symmetrics.de>
 * @author    Sergej Braznikov <sb@symmetrics.de>
 * @copyright 2009 Symmetrics Gmbh
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      http://www.symmetrics.de/
 */
class Symmetrics_DeliveryTime_Block_Adminhtml_Catalog_Product_Grid
    extends Mage_Adminhtml_Block_Catalog_Product_Grid
{
    /**
     * set collection 
     * 
     * @param collection $collection Collection
     *
     * @return void
     */
    public function setCollection($collection)
    {
        $collection->addAttributeToSelect('delivery_time');
        parent::setCollection($collection);
    }
    
    /**
     * prepare columns
     *
     * @return void
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
            'delivery_time',
            array(
                'header'=> Mage::helper('deliverytime')->__('Delivery time'),
                'width' => '100px',
                'type'  => 'text',
                'index' => 'delivery_time',
            )
        );

        parent::_prepareColumns();
    }
    
    /**
     * get Columns
     *
     * @return array
     */
    public function getColumns()
    {
        $columns = parent::getColumns();
        $newColumnsOrder = array();

        foreach ($columns as $columnId => $column) {
            if ($columnId =='qty') {
                $newColumnsOrder[$columnId] = $column;   
                $newColumnsOrder['delivery_time'] = $columns['delivery_time'];    
            } elseif ($columnId != 'delivery_time') {
                $newColumnsOrder[$columnId] = $column;   
            }
        }

        return $newColumnsOrder;
    }
}
