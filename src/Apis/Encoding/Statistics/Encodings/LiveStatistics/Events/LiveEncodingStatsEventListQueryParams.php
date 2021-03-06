<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Events;

use BitmovinApiSdk\Common\QueryParams;

class LiveEncodingStatsEventListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return LiveEncodingStatsEventListQueryParams
     */
    public static function create(): LiveEncodingStatsEventListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return LiveEncodingStatsEventListQueryParams
     */
    public function offset(int $offset): LiveEncodingStatsEventListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return LiveEncodingStatsEventListQueryParams
     */
    public function limit(int $limit): LiveEncodingStatsEventListQueryParams
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
