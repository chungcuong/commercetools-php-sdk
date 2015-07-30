<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Sphere\Core\Request\CartDiscounts;

use Sphere\Core\Model\Common\Context;
use Sphere\Core\Request\AbstractDeleteRequest;
use Sphere\Core\Model\CartDiscount\CartDiscount;
use Sphere\Core\Response\ApiResponseInterface;

/**
 * @package Sphere\Core\Request\CartDiscounts
 * @apidoc http://dev.sphere.io/http-api-projects-cartDiscounts.html#delete-cart-discount
 * @method CartDiscount mapResponse(ApiResponseInterface $response)
 */
class CartDiscountDeleteRequest extends AbstractDeleteRequest
{
    protected $resultClass = '\Sphere\Core\Model\CartDiscount\CartDiscount';

    /**
     * @param string $id
     * @param int $version
     * @param Context $context
     */
    public function __construct($id, $version, Context $context = null)
    {
        parent::__construct(CartDiscountsEndpoint::endpoint(), $id, $version, $context);
    }

    /**
     * @param string $id
     * @param int $version
     * @param Context $context
     * @return static
     */
    public static function ofIdAndVersion($id, $version, Context $context = null)
    {
        return new static($id, $version, $context);
    }
}