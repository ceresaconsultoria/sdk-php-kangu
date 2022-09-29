<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KN\Core;

/**
 * Description of MSController
 *
 * @author weslley
 */
class KNController extends KNHttp{
    protected string $token;
    
    public function __construct(array $config = []) {        
        parent::__construct($config);
    }
    
    public function getToken(): string {
        return $this->token;
    }

    public function setToken(string $token) {
        $this->token = $token;
        return $this;
    }
}
