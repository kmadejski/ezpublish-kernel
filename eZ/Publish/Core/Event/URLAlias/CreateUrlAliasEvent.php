<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\Publish\Core\Event\URLAlias;

use eZ\Publish\API\Repository\Events\URLAlias\CreateUrlAliasEvent as CreateUrlAliasEventInterface;
use eZ\Publish\API\Repository\Values\Content\Location;
use eZ\Publish\API\Repository\Values\Content\URLAlias;
use Symfony\Contracts\EventDispatcher\Event;

final class CreateUrlAliasEvent extends Event implements CreateUrlAliasEventInterface
{
    /** @var \eZ\Publish\API\Repository\Values\Content\Location */
    private $location;

    private $path;

    private $languageCode;

    private $forwarding;

    private $alwaysAvailable;

    /** @var \eZ\Publish\API\Repository\Values\Content\URLAlias */
    private $urlAlias;

    public function __construct(
        URLAlias $urlAlias,
        Location $location,
        $path,
        $languageCode,
        $forwarding,
        $alwaysAvailable
    ) {
        $this->location = $location;
        $this->path = $path;
        $this->languageCode = $languageCode;
        $this->forwarding = $forwarding;
        $this->alwaysAvailable = $alwaysAvailable;
        $this->urlAlias = $urlAlias;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    public function getForwarding()
    {
        return $this->forwarding;
    }

    public function getAlwaysAvailable()
    {
        return $this->alwaysAvailable;
    }

    public function getUrlAlias(): URLAlias
    {
        return $this->urlAlias;
    }
}
