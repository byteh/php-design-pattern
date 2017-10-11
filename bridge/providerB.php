<?php
class ProviderB implements iProviderApi
{
    public function createConf()
    {
        $randValue = rand(100,200);
        $proConfId = 'b-'.time().'-'.rand($randValue,time());
        echo 'call '.__CLASS__.'s'.__FUNCTION__."\n";
        return $proConfId;
    }

    public function closeConf($proConfId)
    {
        echo 'call '.__CLASS__.'s'.__FUNCTION__."\n";
    }
}
