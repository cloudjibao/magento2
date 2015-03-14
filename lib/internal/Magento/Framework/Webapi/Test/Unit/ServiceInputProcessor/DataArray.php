<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Webapi\Test\Unit\ServiceInputProcessor;

use Magento\Framework\Api\AbstractExtensibleObject;

class DataArray extends AbstractExtensibleObject
{
    /**
     * @return \Magento\Framework\Webapi\Test\Unit\ServiceInputProcessor\Simple[]|null
     */
    public function getItems()
    {
        return $this->_get('items');
    }
}