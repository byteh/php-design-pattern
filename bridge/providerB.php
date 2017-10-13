<?php
class ProviderB implements iProviderApi
{
    public function callRemoteApi($functionName, $params){
        echo " [ call soap by SoapClient] {$functionName}\n";
    }

    public function createConf()
    {
        $randValue = rand(100,200);
        $proConfId = 'b-'.time().'-'.rand($randValue,time());
        echo 'call '.__CLASS__.'->'.__FUNCTION__."\n";
        $this->callRemoteApi(__FUNCTION__, $params = array());
        return $proConfId;
    }

    /**
     * $durationIntval 单位是秒
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
