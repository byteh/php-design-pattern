<?php
class ProviderA implements iProviderApi
{
    public function callRemoteApi($functionName, $params){
        echo " [ call Rest by curl ] {$functionName}\n";
    }

    public function createConf()
    {
        echo 'call '.__CLASS__.'->'.__FUNCTION__."\n";
        $randValue = rand(10,99);
        $proConfId = 'a-'.time().'-'.rand($randValue,time());
        $this->callRemoteApi(__FUNCTION__, $params = array());
        return $proConfId;
    }

    /**
     * $durationIntval 单位是分
     */
    public function setTimer($proConfId, $durationIntval)
    {
        echo 'call '.__CLASS__.'->'.__FUNCTION__."\n";
        $params['proConfId'] = $proConfId;
        $params['minutes'] = $durationIntval;
        $this->callRemoteApi('setTimer', $params);
    }

    public function closeConf($proConfId)
    {
        echo 'call '.__CLASS__.'->'.__FUNCTION__."\n";
        $params['proConfId'] = $proConfId;
        $this->callRemoteApi(__FUNCTION__, $params);
    }
}
