<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Drm\Fairplay;

use BitmovinApiSdk\Common\QueryParams;

class FairPlayDrmListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return FairPlayDrmListQueryParams
     */
    public static function create(): FairPlayDrmListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return FairPlayDrmListQueryParams
     */
    public function offset(int $offset): FairPlayDrmListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return FairPlayDrmListQueryParams
     */
    public function limit(int $limit): FairPlayDrmListQueryParams
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
