<?php

namespace BitmovinApiSdk\Models;

class CodecConfigType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AAC = 'AAC';

    /** @var string */
    private const HE_AAC_V1 = 'HE_AAC_V1';

    /** @var string */
    private const HE_AAC_V2 = 'HE_AAC_V2';

    /** @var string */
    private const H264 = 'H264';

    /** @var string */
    private const H265 = 'H265';

    /** @var string */
    private const VP9 = 'VP9';

    /** @var string */
    private const VP8 = 'VP8';

    /** @var string */
    private const MP2 = 'MP2';

    /** @var string */
    private const MP3 = 'MP3';

    /** @var string */
    private const AC3 = 'AC3';

    /** @var string */
    private const EAC3 = 'EAC3';

    /** @var string */
    private const OPUS = 'OPUS';

    /** @var string */
    private const VORBIS = 'VORBIS';

    /** @var string */
    private const MJPEG = 'MJPEG';

    /** @var string */
    private const AV1 = 'AV1';

    /**
     * @param string $value
     * @return CodecConfigType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * AAC
     *
     * @return CodecConfigType
     */
    public static function AAC()
    {
        return new CodecConfigType(self::AAC);
    }

    /**
     * HE_AAC_V1
     *
     * @return CodecConfigType
     */
    public static function HE_AAC_V1()
    {
        return new CodecConfigType(self::HE_AAC_V1);
    }

    /**
     * HE_AAC_V2
     *
     * @return CodecConfigType
     */
    public static function HE_AAC_V2()
    {
        return new CodecConfigType(self::HE_AAC_V2);
    }

    /**
     * H264
     *
     * @return CodecConfigType
     */
    public static function H264()
    {
        return new CodecConfigType(self::H264);
    }

    /**
     * H265
     *
     * @return CodecConfigType
     */
    public static function H265()
    {
        return new CodecConfigType(self::H265);
    }

    /**
     * VP9
     *
     * @return CodecConfigType
     */
    public static function VP9()
    {
        return new CodecConfigType(self::VP9);
    }

    /**
     * VP8
     *
     * @return CodecConfigType
     */
    public static function VP8()
    {
        return new CodecConfigType(self::VP8);
    }

    /**
     * MP2
     *
     * @return CodecConfigType
     */
    public static function MP2()
    {
        return new CodecConfigType(self::MP2);
    }

    /**
     * MP3
     *
     * @return CodecConfigType
     */
    public static function MP3()
    {
        return new CodecConfigType(self::MP3);
    }

    /**
     * AC3
     *
     * @return CodecConfigType
     */
    public static function AC3()
    {
        return new CodecConfigType(self::AC3);
    }

    /**
     * EAC3
     *
     * @return CodecConfigType
     */
    public static function EAC3()
    {
        return new CodecConfigType(self::EAC3);
    }

    /**
     * OPUS
     *
     * @return CodecConfigType
     */
    public static function OPUS()
    {
        return new CodecConfigType(self::OPUS);
    }

    /**
     * VORBIS
     *
     * @return CodecConfigType
     */
    public static function VORBIS()
    {
        return new CodecConfigType(self::VORBIS);
    }

    /**
     * MJPEG
     *
     * @return CodecConfigType
     */
    public static function MJPEG()
    {
        return new CodecConfigType(self::MJPEG);
    }

    /**
     * AV1
     *
     * @return CodecConfigType
     */
    public static function AV1()
    {
        return new CodecConfigType(self::AV1);
    }
}
