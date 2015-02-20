<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Sphere\Core\Request\Customers\Command;

use Sphere\Core\Request\AbstractAction;

/**
 * Class CustomerChangeNameAction
 * @package Sphere\Core\Request\Customers\Command
 * @method \DateTime getDateOfBirth()
 * @method CustomerSetDateOfBirthAction setDateOfBirth(\DateTime $dateOfBirth)
 */
class CustomerSetDateOfBirthAction extends AbstractAction
{
    public function getFields()
    {
        return [
            'action' => [static::TYPE => 'string'],
            'dateOfBirth' => [static::TYPE => '\DateTime'],
        ];
    }

    public function __construct()
    {
        $this->setAction('setDateOfBirth');
    }

    public function jsonSerialize()
    {
        return [
            'action' => $this->getAction(),
            'dateOfBirth' => $this->getDateOfBirth()->format('Y-m-d')
        ];
    }
}