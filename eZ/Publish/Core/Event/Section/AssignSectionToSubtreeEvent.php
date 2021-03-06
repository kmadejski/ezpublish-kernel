<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\Publish\Core\Event\Section;

use eZ\Publish\API\Repository\Events\Section\AssignSectionToSubtreeEvent as AssignSectionToSubtreeEventInterface;
use eZ\Publish\API\Repository\Values\Content\Location;
use eZ\Publish\API\Repository\Values\Content\Section;
use Symfony\Contracts\EventDispatcher\Event;

final class AssignSectionToSubtreeEvent extends Event implements AssignSectionToSubtreeEventInterface
{
    /** @var \eZ\Publish\API\Repository\Values\Content\Location */
    private $location;

    /** @var \eZ\Publish\API\Repository\Values\Content\Section */
    private $section;

    public function __construct(
        Location $location,
        Section $section
    ) {
        $this->location = $location;
        $this->section = $section;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getSection(): Section
    {
        return $this->section;
    }
}
