<?php
class Publisher {
   public $accessToken;
   public $content;

   public function __construct($accessToken, $content) {
       $this->accessToken = $accessToken;
       $this->content = $content;
    }

    public function publish($content) {
       return $content;
    }
    public function token($accessToken) {
       return $accessToken;
    }
}
?>
