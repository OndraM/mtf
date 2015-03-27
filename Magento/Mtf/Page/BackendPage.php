<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Mtf\Page;

/**
 * Class BackendPage
 *
 * @api
 */
class BackendPage extends Page
{
    /**
     * Init page. Set page url
     * @return void
     */
    protected function _init()
    {
        $this->_url = $_ENV['app_backend_url'] . static::MCA;
    }
}
