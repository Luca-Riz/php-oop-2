<?php

trait ScontoTutti{
    private $dai;
    private $ai;

    public function setDisc($_dai, $_ai){
        $this->dai = $_dai;
        $this->ai = $_ai;
    }

    public function getDisc(){
        return 'dai ' . $this->dai . ' anni ai ' . $this->ai . ', sconto per tutti del 10% (non cumulabile)';
    }
}