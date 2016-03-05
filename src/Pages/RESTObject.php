<?php
namespace Pages;

abstract class RESTObject
{

    public abstract function GET($parameters);

    public abstract function POST($parameters);

    public abstract function PUT($parameters);

    public abstract function DELETE($parameters);

    public function OTHER() {
        return false;
    }

}