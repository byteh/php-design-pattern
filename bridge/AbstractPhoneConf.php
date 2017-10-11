<?php
abstract class AbstractPhoneConf
{
    const PROVIDER_CLASS_NAME = 'provider';
    const PROVIDER_NAME_A = 'A';
    const PROVIDER_NAME_B = 'B';
    /**
     * 工作的会议能力提供商
     */
    public $providerApi;
    public $startTime;
    public $endTime;

    // 强制要求子类定义这些方法
    abstract protected function createConf();
    abstract protected function closeConf();

    // 普通方法（非抽象方法）
    public function initConf($providerName)
    {
        $providerClassName = self::PROVIDER_CLASS_NAME.$providerName;
        if(false == class_exists($providerClassName)){
            throw new exception('init error.');
        }
        $this->providerApi = new $providerClassName();
    }
}
