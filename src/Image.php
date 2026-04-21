<?php

namespace samdark\sitemap;

class Image
{
    public $loc;
    public $caption;
    public $geoLocation;
    public $title;
    public $license;

    /**
     * @param non-empty-string $loc The URL of the image.
     * @param null|non-empty-string $caption The caption of the image.
     * @param null|non-empty-string $geoLocation The geographic location of the image. For example, 'Limerick, Ireland'.
     * @param null|non-empty-string $title The title of the image.
     * @param null|non-empty-string $license A URL to the license of the image.
     */
    public function __construct(
        string $loc,
        ?string $caption = null,
        ?string $geoLocation = null,
        ?string $title = null,
        ?string $license = null
    ) {
        $this->loc = $loc;
        $this->caption = $caption;
        $this->geoLocation = $geoLocation;
        $this->title = $title;
        $this->license = $license;
    }
}
