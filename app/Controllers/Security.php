<?php

namespace App\Controllers;

class Security extends BaseController
{
    /**
     * Security Notices page
     */
    public function notices()
    {
        $this->data['title'] = 'Security Notices';

        $this->render('security');
    }
}
