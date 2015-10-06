<?php
require __DIR__ . "/src/hello.php";

use Com\Iesebre\Dam2\rogermelich\helloworldComposer\hello;

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 6/10/15
 * Time: 19:33
 */

$greatings = new Hello();

$greatings->sayHello();