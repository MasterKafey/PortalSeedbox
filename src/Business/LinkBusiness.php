<?php

namespace App\Business;

readonly class LinkBusiness
{
    public function __construct(
        private string $plexHostname,
        private string $sonarrHostname,
        private string $readarrHostname,
        private string $radarrHostname,
        private string $qbittorrentHostname,
        private string $prowlarrHostname,
        private string $jellyseerHostname,
        private string $bazarrHostname,
        private string $duplicatiHostname
    )
    {

    }

    public function getPlexHostname(): string
    {
        return $this->plexHostname;
    }

    public function getSonarrHostname(): string
    {
        return $this->sonarrHostname;
    }

    public function getReadarrHostname(): string
    {
        return $this->readarrHostname;
    }

    public function getRadarrHostname(): string
    {
        return $this->radarrHostname;
    }

    public function getQbittorrentHostname(): string
    {
        return $this->qbittorrentHostname;
    }

    public function getProwlarrHostname(): string
    {
        return $this->prowlarrHostname;
    }

    public function getJellyseerHostname(): string
    {
        return $this->jellyseerHostname;
    }

    public function getBazarrHostname(): string
    {
        return $this->bazarrHostname;
    }

    public function getDuplicatiHostname(): string
    {
        return $this->duplicatiHostname;
    }
}