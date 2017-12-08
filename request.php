<?php

class Request{
  private $BASE_WEBSITE, $client_id, $client_secret;

  public function __construct($BASE_WEBSITE, $client_id, $client_secret)
  {
    $this->BASE_WEBSITE=$BASE_WEBSITE;
    $this->client_id=$client_id;
    $this->client_secret=$client_secret;
  }

  public function search()
  {
    
  }
}

?>
