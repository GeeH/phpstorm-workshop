<?php
/**
 * Test-Driven Development (TDD)
 *
 * Alt+Insert (Windows/Linux)
 * Command+N (Mac OS X)
 *
 * Writing tests first outlining expected results, after which the method under test gets implemented.
 */

namespace Testing\JetBrains;

// 1. In QueueTest.php, add a 2 new tests which tests a currently non-existing method peek():
//
//    public function testPeekReturnsFalseWhenNoItemsInQueue()
//    {
//        $result = $this->queue->peek();
//        $this->assertFalse($result);
//    }
//
//    public function testPeekReturnsTrueWhenItemsInQueue()
//    {
//        $this->_queue->enqueue('test');
//        $result = $this->queue->peek();
//        $this->assertTrue($result);
//    }
//
//    In other words, if items are in queue, peek() should return true. It should return false if no items are in queue.
//
// 2. PhpStorm displays an inspection on the peek() method: "Method peek() not found...".
//    Using Quickfix (Alt+Enter), create the method.
//    Implement the method.

// 3. Run unit tests and see tests are all passing.
