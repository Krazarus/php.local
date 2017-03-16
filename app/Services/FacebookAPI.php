<?php

namespace App\Services;

use Facebook;

class FacebookAPI
{
    public $client;

    public function __construct()
    {
        $this->client = new Facebook\Facebook([
            'app_id' => '707826892725027', // Replace {app-id} with your app id
            'app_secret' => '07cc6964c692ad4663867d54f96a0c36',
            'default_graph_version' => 'v2.2',
        ]);
    }
}