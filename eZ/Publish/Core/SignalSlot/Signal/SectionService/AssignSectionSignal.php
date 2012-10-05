<?php
/**
 * AssignSectionSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\SectionService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * AssignSectionSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\SectionService
 */
class AssignSectionSignal extends Signal
{
    /**
     * ContentInfo
     *
     * @var eZ\Publish\API\Repository\Values\Content\ContentInfo
     */
    public $contentInfo;

    /**
     * Section
     *
     * @var eZ\Publish\API\Repository\Values\Content\Section
     */
    public $section;

    /**
     * Constructor
     *
     * Construct from signal values
     *
     * @param eZ\Publish\API\Repository\Values\Content\ContentInfo $contentInfo
     * @param eZ\Publish\API\Repository\Values\Content\Section $section
     */
    public function __construct( $contentInfo, $section )
    {
        $this->contentInfo = $contentInfo;
        $this->section = $section;
    }
}

