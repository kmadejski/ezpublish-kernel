<?php
/**
 * CreateUserGroupSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\UserService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * CreateUserGroupSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\UserService
 */
class CreateUserGroupSignal extends Signal
{
    /**
     * UserGroupCreateStruct
     *
     * @var eZ\Publish\API\Repository\Values\User\UserGroupCreateStruct
     */
    public $userGroupCreateStruct;

    /**
     * ParentGroup
     *
     * @var eZ\Publish\API\Repository\Values\User\UserGroup
     */
    public $parentGroup;

    /**
     * Constructor
     *
     * Construct from signal values
     *
     * @param eZ\Publish\API\Repository\Values\User\UserGroupCreateStruct $userGroupCreateStruct
     * @param eZ\Publish\API\Repository\Values\User\UserGroup $parentGroup
     */
    public function __construct( $userGroupCreateStruct, $parentGroup )
    {
        $this->userGroupCreateStruct = $userGroupCreateStruct;
        $this->parentGroup = $parentGroup;
    }
}

