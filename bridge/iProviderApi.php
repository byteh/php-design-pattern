<?php
interface iProviderApi
{
    public function callRemoteApi($functionName, $params);
    public function createConf();
    public function setTimer($proConfId, $durationIntval);
    public function closeConf($proConfId);

}
