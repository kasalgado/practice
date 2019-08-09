<?php

namespace App\Documents;

interface Documentable
{
    public function getId();
    
    public function getContent();
}
