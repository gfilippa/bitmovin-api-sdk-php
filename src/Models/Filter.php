<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Filter extends BitmovinResource
{
    public static $discriminatorMapping = [
        "CROP" => CropFilter::class,
        "CONFORM" => ConformFilter::class,
        "WATERMARK" => WatermarkFilter::class,
        "ENHANCED_WATERMARK" => EnhancedWatermarkFilter::class,
        "ROTATE" => RotateFilter::class,
        "DEINTERLACE" => DeinterlaceFilter::class,
        "AUDIO_MIX" => AudioMixFilter::class,
        "DENOISE_HQDN3D" => DenoiseHqdn3dFilter::class,
        "TEXT" => TextFilter::class,
        "UNSHARP" => UnsharpFilter::class,
        "SCALE" => ScaleFilter::class,
        "INTERLACE" => InterlaceFilter::class,
        "AUDIO_VOLUME" => AudioVolumeFilter::class,
        "EBU_R128_SINGLE_PASS" => EbuR128SinglePassFilter::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }
}
