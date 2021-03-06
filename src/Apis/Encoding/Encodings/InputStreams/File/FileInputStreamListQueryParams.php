<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\File;

use BitmovinApiSdk\Common\QueryParams;

class FileInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return FileInputStreamListQueryParams
     */
    public static function create(): FileInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return FileInputStreamListQueryParams
     */
    public function offset(int $offset): FileInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return FileInputStreamListQueryParams
     */
    public function limit(int $limit): FileInputStreamListQueryParams
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
