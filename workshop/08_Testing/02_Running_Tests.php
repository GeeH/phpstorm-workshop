<?php
/**
 * Running tests
 *
 * Run Unit Tests using PHPUnit.
 * NOTE: PHPUnit framework can be acquired through Composer.
 */

namespace Testing\JetBrains;

// 1. Create a new Run Configuration based on PHPUnit. Name it "Run Tests" and specify the directory to look for tests:
//      \08_Testing\
//    Note that a specific Class or Method can also be run.
//    A PHPUnit XML configuration file can also be specified for this specific run configuration.
// 2. PhpStorm has already preconfigured PHPUnit configuration for Remote Interpreter in Settings | PHP | PHPUnit so
//    you don't need to set up anything. 
// 3. Almost there! The Queue class can not be loaded. To solve this, do the following:
//      From the Settings Pane, select Languages & Frameworks| PHP | PHPUnit
//      Set \08_Testing\Code\Bootstrap.php as the default bootstrap file.
//      A bootstrap file can be used to run custom PHP code in the unit test runner. Bootstrap.php includes all required files
//      so that the tests can be run.
//      NOTE: If you're using Composer to autoload in your projects you can set `vendor/autoload.php` as the bootstrap file
// 4. Execute the Run Configuration (press the green Play icon or Shift+F10 / Ctrl+R)
// 5. The Test tool window below shows test results. Using the context menu, additional statistics such as the number of
// assertions can be viewed.
