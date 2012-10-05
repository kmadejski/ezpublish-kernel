<?php
/**
 * LoadObjectStatesSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\ObjectStateService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * LoadObjectStatesSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\ObjectStateService
 */
class LoadObjectStatesSignal extends Signal
{
    /**
     * ObjectStateGroup
     *
     * @var eZ\Publish\API\Repository\Values\ObjectState\ObjectStateGroup
     */
    public $objectStateGroup;

    /**
     * Constructor
     *
     * Construct from signal values
     *
     * @param eZ\Publish\API\Repository\Values\ObjectState\ObjectStateGroup $objectStateGroup
     */
    public function __construct( $objectStateGroup )
    {
        $this->objectStateGroup = $objectStateGroup;
    }
}

