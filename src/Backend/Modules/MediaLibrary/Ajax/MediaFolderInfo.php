<?php

namespace Backend\Modules\MediaLibrary\Ajax;

use Backend\Core\Engine\Base\AjaxAction as BackendBaseAJAXAction;

/**
 * This edit-action will get the item info using Ajax
 */
class MediaFolderInfo extends BackendBaseAJAXAction
{
    /**
     * Execute the action
     */
    public function execute()
    {
        // call parent
        parent::execute();

        // get parameters
        $id = $this->get('request')->request->getInt('id', 0);

        if ($id === 0) {
            $this->output(
                self::BAD_REQUEST,
                null,
                'no id provided'
            );
            return;
        }

        // Currently always allow to be moved
        $this->output(
            self::OK,
            ['allow_move' => 'Y']
        );
    }
}
