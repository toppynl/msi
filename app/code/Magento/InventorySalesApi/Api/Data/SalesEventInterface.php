<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventorySalesApi\Api\Data;

/**
 * Represents the sales event that brings to appending reservations.
 *
 * @api
 */
interface SalesEventInterface
{
    const TYPE_QUOTE = 'quote';

    public function getType(): string;

    public function getObjectId(): string;
}