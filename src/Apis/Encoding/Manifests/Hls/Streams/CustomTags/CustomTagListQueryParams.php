<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams\CustomTags;

use BitmovinApiSdk\Common\QueryParams;

class CustomTagListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return CustomTagListQueryParams
     */
    public static function create(): CustomTagListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return CustomTagListQueryParams
     */
    public function offset(int $offset): CustomTagListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return CustomTagListQueryParams
     */
    public function limit(int $limit): CustomTagListQueryParams
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
