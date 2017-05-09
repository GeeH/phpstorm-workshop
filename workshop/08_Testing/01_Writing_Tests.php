<?php
/**
 * Writing Tests
 *
 * Create New File
 *
 * Alt+Insert (Windows/Linux)
 * Command+N (Mac OS X)
 *
 * Navigate To Test / Navigate To Test Subject
 *
 * Ctrl+Shift+T (Windows/Linux)
 * Command+Shift+T (Mac OS X)
 */

namespace Testing\JetBrains;

// 1. Create a new PHPUnit test file. From the navigation bar, create a new file using the PHPUnit template.
//    NOTE: Another way of creating a test is to use the Go to Test navigation:
//      - Open to the Queue class.
//      - Use the Go to Test navigation to either go to test or create a new test.
//
// 2. For Fully Qualified name, search for the Queue class.
//    All other parameters for the unit test class can be kept at their defaults.
//    NOTE: You can specify the test class name and namespace as well as the directory.
//
//    The created test class will look something like the following:
//
//    class QueueTest extends \PHPUnit_Framework_TestCase {
//
//    }
//
// 3. Add a function called setUp() which sets up a new Queue in a new field called $queue.
//    To generate the setUp() function, we can use the Generate | Override method action (Alt+Insert / Command+N).
//
//    This is what the class should look like:
//
//   class QueueTest extends \PHPUnit_Framework_TestCase {
//       /** @var Queue */
//       protected $queue;
//
//       public function setUp() {
//           $this->queue = new Queue();
//       }
//   }
//
//    NOTE: the Code | Comment With Line Comment (Ctrl+/ / Cmd+/) menu may be handy if you are copy/pasting the above code.

// 4. Add a first test, verifying the enqueue() method. This can be done using Alt+Insert / Command+N.
//
//  public function testEnqueueIncreasesItemCount() {
//      $this->queue->enqueue('test');
//      $this->assertEquals(1, $this->queue->getNumberOfItems());
//  }
//
// 5. From the test, navigate back to the Queue class using Navigate to Test Subject.
//    (This is the same keyboard shortcut as Go to Test)
