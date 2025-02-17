<?php

namespace Bluem\BluemPHP\Responses;

class StatusBluemResponse extends BluemResponse
{
    public function GetStatusCode()
    {
        if (isset($this->{$this->getParentXmlElement()}->Status)) {
            return $this->{$this->getParentXmlElement()}->Status . "";
        }

        return null;
    }

    protected function getParentXmlElement()
    {
        return static::$response_primary_key . "Update";
    }
}
