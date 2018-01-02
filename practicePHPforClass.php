<?php
class employee {
    public $name;
    private $state = "I'm working";

    public function getState () {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }
}

$origin = new employee();
$getObj = "I'm taking a nap";
$origin->setState($getObj);
echo $origin->getState();

?>
