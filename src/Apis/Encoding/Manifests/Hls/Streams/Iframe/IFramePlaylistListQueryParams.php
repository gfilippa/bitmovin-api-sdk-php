<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams\Iframe;

use BitmovinApiSdk\Common\QueryParams;

class IFramePlaylistListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return IFramePlaylistListQueryParams
     */
    public static function create(): IFramePlaylistListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return IFramePlaylistListQueryParams
     */
    public function offset(int $offset): IFramePlaylistListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return IFramePlaylistListQueryParams
     */
    public function limit(int $limit): IFramePlaylistListQueryParams
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
