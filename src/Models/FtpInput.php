<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class FtpInput extends Input
{
    /** @var string */
    public $host;

    /** @var int */
    public $port;

    /** @var bool */
    public $passive;

    /** @var string */
    public $username;

    /** @var string */
    public $password;

    /** @var bool */
    public $remoteVerificationEnabled;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Host URL or IP of the FTP server (required)
     *
     * @param string $host
     * @return $this
     */
    public function host(string $host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Port to use, standard for FTP: 21
     *
     * @param int $port
     * @return $this
     */
    public function port(int $port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Use passive mode. Default is true.
     *
     * @param bool $passive
     * @return $this
     */
    public function passive(bool $passive)
    {
        $this->passive = $passive;

        return $this;
    }

    /**
     * Your FTP Username
     *
     * @param string $username
     * @return $this
     */
    public function username(string $username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Your FTP password
     *
     * @param string $password
     * @return $this
     */
    public function password(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Ensure that connections originate from the declared ftp host. Default is true.
     *
     * @param bool $remoteVerificationEnabled
     * @return $this
     */
    public function remoteVerificationEnabled(bool $remoteVerificationEnabled)
    {
        $this->remoteVerificationEnabled = $remoteVerificationEnabled;

        return $this;
    }
}

