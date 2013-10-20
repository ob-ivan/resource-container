<?php
namespace Ob_Ivan\ResourceContainer;

use Exception as ParentException;

class Exception extends ParentException
{
    const RESOURCE_NAME_UNKNOWN = 1;
}
