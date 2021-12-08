<?php

namespace Rapid7\InsightVM\Api\Model;

class MemoryTotal
{
    /**
     * The raw value in bytes.
     *
     * @var int
     */
    protected $bytes;
    /**
     * The value formatted in human-readable notation (e.g. GB, MB, KB, bytes).
     *
     * @var string
     */
    protected $formatted;
    /**
     * The raw value in bytes.
     *
     * @return int
     */
    public function getBytes() : int
    {
        return $this->bytes;
    }
    /**
     * The raw value in bytes.
     *
     * @param int $bytes
     *
     * @return self
     */
    public function setBytes(int $bytes) : self
    {
        $this->bytes = $bytes;
        return $this;
    }
    /**
     * The value formatted in human-readable notation (e.g. GB, MB, KB, bytes).
     *
     * @return string
     */
    public function getFormatted() : string
    {
        return $this->formatted;
    }
    /**
     * The value formatted in human-readable notation (e.g. GB, MB, KB, bytes).
     *
     * @param string $formatted
     *
     * @return self
     */
    public function setFormatted(string $formatted) : self
    {
        $this->formatted = $formatted;
        return $this;
    }
}