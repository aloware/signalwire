<?php

namespace SignalWire\Relay\Calling;

final class DetectType {
  const Machine = 'machine';
  const Digit = 'digit';

  private function __construct() {
    throw new Exception('Invalid class DetectType');
  }
}
