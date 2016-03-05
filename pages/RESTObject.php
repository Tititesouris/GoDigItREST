<?php

abstract class RESTObject
{

    public static abstract function GET($parameters);

    public static abstract function POST($parameters);

    public static abstract function PUT($parameters);

    public static abstract function DELETE($parameters);

}