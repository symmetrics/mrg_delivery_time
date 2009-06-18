<?php
/**
 * Symmetrics_DeliveryTime_Block_Renderer
 *
 * @category Symmetrics
 * @package Symmetrics_DeliveryTime
 * @author symmetrics gmbh <info@symmetrics.de>, Sergej Braznikov <sb@symmetrics.de>
 * @copyright symmetrics gmbh
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Symmetrics_DeliveryTime_Block_Renderer extends Mage_Sales_Block_Order_Item_Renderer_Default
{
    private function getDeliveryTimeOption()
    {
        if ($item = $this->getOrderItem()) {
            $product = Mage::getModel('catalog/product')
                ->load($item->getProductId())->__toArray();

            if (array_key_exists('delivery_time', $product) && $product['delivery_time'] != 1 ) {
                return array(
                    'label' => Mage::helper('deliverytime')->__('Delivery Time'),
                    'value' => $product['delivery_time'],
                );
            }
        }

        return null;
    }

    public function getItemOptions()
    {
        $result = parent::getItemOptions();
        $result[] = $this->getDeliveryTimeOption();
        return $result;
    }
}
