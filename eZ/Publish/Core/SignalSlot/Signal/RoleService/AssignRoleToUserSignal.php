<?php
/**
 * AssignRoleToUserSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\RoleService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * AssignRoleToUserSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\RoleService
 */
class AssignRoleToUserSignal extends Signal
{
    /**
     * Role
     *
     * @var eZ\Publish\API\Repository\Values\User\Role
     */
    public $role;

    /**
     * User
     *
     * @var eZ\Publish\API\Repository\Values\User\User
     */
    public $user;

    /**
     * RoleLimitation
     *
     * @var eZ\Publish\API\Repository\Values\User\Limitation\RoleLimitation
     */
    public $roleLimitation;

    /**
     * Constructor
     *
     * Construct from signal values
     *
     * @param eZ\Publish\API\Repository\Values\User\Role $role
     * @param eZ\Publish\API\Repository\Values\User\User $user
     * @param eZ\Publish\API\Repository\Values\User\Limitation\RoleLimitation $roleLimitation
     */
    public function __construct( $role, $user, $roleLimitation )
    {
        $this->role = $role;
        $this->user = $user;
        $this->roleLimitation = $roleLimitation;
    }
}

