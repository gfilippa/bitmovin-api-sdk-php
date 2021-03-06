<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Keyframes;

use BitmovinApiSdk\Common\QueryParams;

class KeyframeListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return KeyframeListQueryParams
     */
    public static function create(): KeyframeListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return KeyframeListQueryParams
     */
    public function offset(int $offset): KeyframeListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return KeyframeListQueryParams
     */
    public function limit(int $limit): KeyframeListQueryParams
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
