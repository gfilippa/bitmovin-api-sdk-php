<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\DenoiseHqdn3d\Customdata;

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
     * Denoise hqdn3d Filter Custom Data
     *
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\CustomData
     * @throws BitmovinApiException
     */
    public function get(string $filterId) : \BitmovinApiSdk\Models\CustomData
    {
        $pathParams = [
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/filters/denoise-hqdn3d/{filter_id}/customData', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomData::class);
    }
}
