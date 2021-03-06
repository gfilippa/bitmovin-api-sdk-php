<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Organization extends BitmovinResource
{
    /** @var \BitmovinApiSdk\Models\OrganizationType */
    public $type;

    /** @var string */
    public $parentId;

    /** @var string */
    public $labelColor;

    /** @var \BitmovinApiSdk\Models\ResourceLimitContainer[] */
    public $limitsPerResource;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, OrganizationType::class);
        $this->limitsPerResource = ObjectMapper::map($this->limitsPerResource, ResourceLimitContainer::class);
    }

    /**
     * type
     *
     * @param \BitmovinApiSdk\Models\OrganizationType $type
     * @return $this
     */
    public function type(\BitmovinApiSdk\Models\OrganizationType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Hexadecimal color
     *
     * @param string $labelColor
     * @return $this
     */
    public function labelColor(string $labelColor)
    {
        $this->labelColor = $labelColor;

        return $this;
    }

    /**
     * limitsPerResource
     *
     * @param \BitmovinApiSdk\Models\ResourceLimitContainer[] $limitsPerResource
     * @return $this
     */
    public function limitsPerResource(array $limitsPerResource)
    {
        $this->limitsPerResource = $limitsPerResource;

        return $this;
    }
}

