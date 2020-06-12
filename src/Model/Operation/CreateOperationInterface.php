<?php
/**
 * Copyright © Thomas Klein, All rights reserved.
 */
declare(strict_types=1);

namespace Zoho\Desk\Model\Operation;

use Zoho\Desk\Exception\CouldNotSaveException;
use Zoho\Desk\Model\DataObjectInterface;

/**
 * @api
 */
interface CreateOperationInterface
{
    /**
     * @param DataObjectInterface $dataObject
     * @return DataObjectInterface
     * @throws CouldNotSaveException
     */
    public function create(DataObjectInterface $dataObject): DataObjectInterface;
}
