<?php

use PHPUnit\Framework\TestCase;

class IntegrationTest extends TestCase
{
  protected $sid;
  protected $token;
  protected $domain;
  protected $client;

  protected function setUp(): void {
    $this->sid = "my-signalwire-sid";
    $this->token = "my-signalwire-token";
    $this->domain = 'example.signalwire.com';
    putenv("SIGNALWIRE_API_HOSTNAME=$this->domain");

    $this->client = new SignalWire\Rest\Client($this->sid, $this->token);

    \VCR\VCR::turnOn();
  }

  protected function tearDown(): void {
    \VCR\VCR::eject();
    \VCR\VCR::turnOff();
  }
}
