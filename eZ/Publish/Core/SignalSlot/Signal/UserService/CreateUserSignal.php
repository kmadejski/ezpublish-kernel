<?php
/**
 * CreateUserSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\UserService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * CreateUserSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\UserService
 */
class CreateUserSignal extends Signal
{
    /**
     * UserCreateStruct
     *
     * @var eZ\Publish\API\Repository\Values\User\UserCreateStruct
     */
    public $userCreateStruct;

    /**
     * ParentGroups
     *
     * @var mixed
     */
    public $parentGroups;

    /**
     * Constructor
     *
     * Construct from signal values
     *
     * @param eZ\Publish\API\Repository\Values\User\UserCreateStruct $userCreateStruct
     * @param mixed $parentGroups
     */
    public function __construct( $userCreateStruct, $parentGroups )
    {
        $this->userCreateStruct = $userCreateStruct;
        $this->parentGroups = $parentGroups;
    }
}

