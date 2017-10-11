<?php
class CommonConf extends AbstractPhoneConf
{
    public function createConf() 
    {
        $this->confId = time().rand(1,100);
        $this->proConfId = $this->providerApi->createConf();
        $this->startTime = date('Y-m-d H:i:s');
        echo __CLASS__.'->'.__FUNCTION__." \n";
    }

    public function closeConf() 
    {
        $this->confId = time().rand(1,100);
        $this->proConfId = $this->providerApi->createConf();
        $this->endTime = date('Y-m-d H:i:s', time()+1000);
        echo __CLASS__.'->'.__FUNCTION__." \n";
    }
}
