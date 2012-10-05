<?php
/**
 * LoadSectionSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\SectionService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * LoadSectionSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\SectionService
 */
class LoadSectionSignal extends Signal
{
    /**
     * SectionId
     *
     * @var mixed
     */
    public $sectionId;

    /**
     * Constructor
     *
     * Construct from signal values
     *
     * @param mixed $sectionId
     */
    public function __construct( $sectionId )
    {
        $this->sectionId = $sectionId;
    }
}

