<?php

require_once 'api/v1/coldham.api.php';
class exampleAPI extends API
{
    protected $User;

    public function __construct($request, $origin) {
        parent::__construct($request);

        // // Abstracted out for example
        // $APIKey = new Models\APIKey();
        // $User = new Models\User();

        // if (!array_key_exists('apiKey', $this->request)) {
        //     throw new Exception('No API Key provided');
        // } else if (!$APIKey->verifyKey($this->request['apiKey'], $origin)) {
        //     throw new Exception('Invalid API Key');
        // } else if (array_key_exists('token', $this->request) && !$User->get('token', $this->request['token'])){
        //     throw new Exception('Invalid User Token');
        // }

        // $this->User = $User;
    }

    /**
     * Example of an Endpoint
     */
     // protected function example($verb, $args) {
     //    if ($this->method == 'GET') {
     //        return "verb is ".$verb." args are ".json_encode($args)." method ".$this->method." and request ".json_encode($this->request);
     //    } else {
     //        return "Only accepts GET requests";
     //    }
     // }
 }
