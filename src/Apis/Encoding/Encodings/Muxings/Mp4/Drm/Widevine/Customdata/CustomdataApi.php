<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Widevine\Customdata;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class CustomdataApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * CustomdataApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Widevine DRM Custom Data of an MP4 muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $drmId
     * @return \BitmovinApiSdk\Models\CustomData
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $drmId) : \BitmovinApiSdk\Models\CustomData
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'drm_id' => $drmId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}/drm/widevine/{drm_id}/customData', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomData::class);
    }
}
