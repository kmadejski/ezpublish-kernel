<?php
/**
 * AssignUserToUserGroupSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\UserService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * AssignUserToUserGroupSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\UserService
 */
class AssignUserToUserGroupSignal extends Signal
{
    /**
     * User
     *
     * @var eZ\Publish\API\Repository\Values\User\User
     */
    public $user;

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
     * @param eZ\Publish\API\Repository\Values\User\User $user
     * @param eZ\Publish\API\Repository\Values\User\UserGroup $userGroup
     */
    public function __construct( $user, $userGroup )
    {
        $this->user = $user;
        $this->userGroup = $userGroup;
    }
}

