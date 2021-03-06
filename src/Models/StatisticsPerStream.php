<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StatisticsPerStream extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamId;

    /** @var string */
    public $codecConfigId;

    /** @var float */
    public $multiplicator;

    /** @var int */
    public $encodedBytes;

    /** @var float */
    public $encodedSeconds;

    /** @var float */
    public $billableMinutes;

    /** @var int */
    public $width;

    /** @var int */
    public $height;

    /** @var float */
    public $rate;

    /** @var int */
    public $bitrate;

    /** @var \BitmovinApiSdk\Models\CodecConfigType */
    public $codec;

    /** @var \BitmovinApiSdk\Models\StatisticsResolution */
    public $resolution;

    /** @var \BitmovinApiSdk\Models\EncodingMode */
    public $encodingMode;

    /** @var float */
    public $encodingModeMultiplicator;

    /** @var \BitmovinApiSdk\Models\StatisticsPerTitleStream */
    public $perTitleResultStream;

    /** @var float */
    public $perTitleMultiplicator;

    /** @var \BitmovinApiSdk\Models\PsnrPerStreamMode */
    public $psnrMode;

    /** @var float */
    public $psnrMultiplicator;

    /** @var \BitmovinApiSdk\Models\DolbyVisionPerStreamMode */
    public $dolbyVisionMode;

    /** @var float */
    public $dolbyVisionMultiplicator;

    /** @var string */
    public $preset;

    /** @var float */
    public $presetMultiplicator;

    /** @var bool */
    public $live;

    /** @var float */
    public $liveMultiplicator;

    /** @var \BitmovinApiSdk\Models\InputFactor */
    public $inputFactor;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->codec = ObjectMapper::map($this->codec, CodecConfigType::class);
        $this->resolution = ObjectMapper::map($this->resolution, StatisticsResolution::class);
        $this->encodingMode = ObjectMapper::map($this->encodingMode, EncodingMode::class);
        $this->perTitleResultStream = ObjectMapper::map($this->perTitleResultStream, StatisticsPerTitleStream::class);
        $this->psnrMode = ObjectMapper::map($this->psnrMode, PsnrPerStreamMode::class);
        $this->dolbyVisionMode = ObjectMapper::map($this->dolbyVisionMode, DolbyVisionPerStreamMode::class);
        $this->inputFactor = ObjectMapper::map($this->inputFactor, InputFactor::class);
    }

    /**
     * codec
     *
     * @param \BitmovinApiSdk\Models\CodecConfigType $codec
     * @return $this
     */
    public function codec(\BitmovinApiSdk\Models\CodecConfigType $codec)
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * resolution
     *
     * @param \BitmovinApiSdk\Models\StatisticsResolution $resolution
     * @return $this
     */
    public function resolution(\BitmovinApiSdk\Models\StatisticsResolution $resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * encodingMode
     *
     * @param \BitmovinApiSdk\Models\EncodingMode $encodingMode
     * @return $this
     */
    public function encodingMode(\BitmovinApiSdk\Models\EncodingMode $encodingMode)
    {
        $this->encodingMode = $encodingMode;

        return $this;
    }

    /**
     * perTitleResultStream
     *
     * @param \BitmovinApiSdk\Models\StatisticsPerTitleStream $perTitleResultStream
     * @return $this
     */
    public function perTitleResultStream(\BitmovinApiSdk\Models\StatisticsPerTitleStream $perTitleResultStream)
    {
        $this->perTitleResultStream = $perTitleResultStream;

        return $this;
    }

    /**
     * psnrMode
     *
     * @param \BitmovinApiSdk\Models\PsnrPerStreamMode $psnrMode
     * @return $this
     */
    public function psnrMode(\BitmovinApiSdk\Models\PsnrPerStreamMode $psnrMode)
    {
        $this->psnrMode = $psnrMode;

        return $this;
    }

    /**
     * dolbyVisionMode
     *
     * @param \BitmovinApiSdk\Models\DolbyVisionPerStreamMode $dolbyVisionMode
     * @return $this
     */
    public function dolbyVisionMode(\BitmovinApiSdk\Models\DolbyVisionPerStreamMode $dolbyVisionMode)
    {
        $this->dolbyVisionMode = $dolbyVisionMode;

        return $this;
    }

    /**
     * inputFactor
     *
     * @param \BitmovinApiSdk\Models\InputFactor $inputFactor
     * @return $this
     */
    public function inputFactor(\BitmovinApiSdk\Models\InputFactor $inputFactor)
    {
        $this->inputFactor = $inputFactor;

        return $this;
    }
}

