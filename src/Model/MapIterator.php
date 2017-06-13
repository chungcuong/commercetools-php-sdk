<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */

namespace Commercetools\Model;

class MapIterator extends \ArrayIterator
{
    /**
     * @var callable
     */
    private $callback;

    public function __construct($value, callable $callback) {
        parent::__construct($value);
        $this->callback = $callback;
    }

    public function current() {
        $value = parent::current();
        return call_user_func($this->callback, $value);
    }
}