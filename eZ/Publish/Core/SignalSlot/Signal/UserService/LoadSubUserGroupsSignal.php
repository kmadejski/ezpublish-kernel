<?php
/**
 * LoadSubUserGroupsSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\UserService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * LoadSubUserGroupsSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\UserService
 */
class LoadSubUserGroupsSignal extends Signal
{
    /**
     * UserGroup
     *
     * @var eZ\Publish\API\Repository\Values\User\UserGroup
     */
    public $userGroup;

    /**
     * Constructor
     *
     * Construct from signal values
     *
     * @param eZ\Publish\API\Repository\Values\User\UserGroup $userGroup
     */
    public function __construct( $userGroup )
    {
        $this->userGroup = $userGroup;
    }
}

