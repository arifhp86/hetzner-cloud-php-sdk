<?php
/**
 * Created by PhpStorm.
 * User: lukaskammerling
 * Date: 2019-03-28
 * Time: 13:51.
 */

namespace LKDev\HetznerCloud\Models\Images;

use LKDev\HetznerCloud\RequestOpts;

class ImageRequestOpts extends RequestOpts
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    
    /**
     * @var string
     */
    public $status;
    
    /**
     * @var string
     */
    public $sort;

    /**
     * RequestOpts constructor.
     *
     * @param $name
     * @param $perPage
     * @param $page
     * @param $labelSelector
     */
    public function __construct(
        string $name = null,
        string $type = null,
        string $status = null,
        string $sort = null,
        string $labelSelector = null,
        int $perPage = null,
        int $page = null
    )
    {
        parent::__construct($perPage, $page, $labelSelector);
        $this->name = $name;
        $this->type = $type;
        $this->status = $status;
        $this->sort = $sort;
    }
}
