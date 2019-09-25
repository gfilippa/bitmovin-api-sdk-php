<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Vtt;

use BitmovinApiSdk\Common\QueryParams;

class DashVttRepresentationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return DashVttRepresentationListQueryParams
     */
    public static function create(): DashVttRepresentationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DashVttRepresentationListQueryParams
     */
    public function offset(int $offset): DashVttRepresentationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DashVttRepresentationListQueryParams
     */
    public function limit(int $limit): DashVttRepresentationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    public function toArray(): array
    {
        $data = array_map(function ($value) {
            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));

        return $data;
    }
}