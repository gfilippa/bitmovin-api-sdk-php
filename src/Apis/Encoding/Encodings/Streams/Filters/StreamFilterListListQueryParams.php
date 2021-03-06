<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Filters;

use BitmovinApiSdk\Common\QueryParams;

class StreamFilterListListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return StreamFilterListListQueryParams
     */
    public static function create(): StreamFilterListListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return StreamFilterListListQueryParams
     */
    public function offset(int $offset): StreamFilterListListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return StreamFilterListListQueryParams
     */
    public function limit(int $limit): StreamFilterListListQueryParams
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
