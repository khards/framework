<?php

declare(strict_types=1);

/**
 * Contains the Order class.
 *
 * @copyright   Copyright (c) 2020 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2020-12-13
 *
 */

namespace Vanilo\Framework\Models;

use Vanilo\Contracts\Payable;
use Vanilo\Order\Models\Order as BaseOrder;

class Order extends BaseOrder implements Payable
{
    public function getPayableId(): string
    {
        return $this->getNumber();
    }

    public function getPayableType(): string
    {
        return 'order';
    }

    public function getAmount(): float
    {
        return $this->total();
    }

    public function getCurrency(): string
    {
        return config('vanilo.framework.currency.code');
    }
}
