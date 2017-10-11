<?php
class ProviderA implements iProviderApi
{
    public function createConf()
    {
        $randValue = rand(10,99);
        $proConfId = 'a-'.time().'-'.rand($randValue,time());
        echo 'call '.__CLASS__.'s'.__FUNCTION__."\n";
        return $proConfId;
    }

    public function closeConf($proConfId)
    {
        echo 'call '.__CLASS__.'s'.__FUNCTION__."\n";
    }
}
