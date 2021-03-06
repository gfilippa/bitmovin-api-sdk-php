<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Vorbis;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\VorbisAudioConfiguration;

class VorbisAudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var VorbisAudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, VorbisAudioConfiguration::class);
    }
}
