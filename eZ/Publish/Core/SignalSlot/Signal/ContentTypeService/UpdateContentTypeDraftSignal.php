<?php
/**
 * UpdateContentTypeDraftSignal class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot\Signal\ContentTypeService;
use eZ\Publish\Core\SignalSlot\Signal;

/**
 * UpdateContentTypeDraftSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\ContentTypeService
 */
class UpdateContentTypeDraftSignal extends Signal
{
    /**
     * ContentTypeDraft
     *
     * @var eZ\Publish\API\Repository\Values\ContentType\ContentTypeDraft
     */
    public $contentTypeDraft;

    /**
     * ContentTypeUpdateStruct
     *
     * @var eZ\Publish\API\Repository\Values\ContentType\ContentTypeUpdateStruct
     */
    public $contentTypeUpdateStruct;

    /**
     * Constructor
     *
     * Construct from signal values
     *
     * @param eZ\Publish\API\Repository\Values\ContentType\ContentTypeDraft $contentTypeDraft
     * @param eZ\Publish\API\Repository\Values\ContentType\ContentTypeUpdateStruct $contentTypeUpdateStruct
     */
    public function __construct( $contentTypeDraft, $contentTypeUpdateStruct )
    {
        $this->contentTypeDraft = $contentTypeDraft;
        $this->contentTypeUpdateStruct = $contentTypeUpdateStruct;
    }
}

