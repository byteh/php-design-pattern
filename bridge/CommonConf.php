<?php
class CommonConf extends AbstractPhoneConf
{
    public function createConf() 
    {
        echo __CLASS__.'->'.__FUNCTION__." \n";
        $this->confId = time().rand(1,100);
        $this->proConfId = $this->providerApi->createConf();
        $this->startTime = date('Y-m-d H:i:s');
        $this->timerStatus = false;
    }

    public function setTimer($minutes) 
    {
        echo __CLASS__.'->'.__FUNCTION__." {$minutes}\n";
        $this->providerApi->setTimer($this->proConfId, $minutes);
        $this->timerStatus = true;
    }

    public function closeConf() 
    {
        echo __CLASS__.'->'.__FUNCTION__." \n";
        $this->providerApi->closeConf($this->proConfId);
        $this->endTime = date('Y-m-d H:i:s', time()+1000);
    }
}
