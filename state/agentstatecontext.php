<?php
class AgentStateContext
{
    public $agentId;
    protected $curStateClass; //当前的状态对象

    public $agentStateValueDef = array(0=>'Normal', 1=>'Fault');

    public function __construct($agentId)
    {
      $this->agentId = $agentId;
      # code...
    }

    public function initAgentStateClass()
    {
      #应该从redis 或者 某个持久化的介质中读取到当前状态
      #这里模拟下，双数正常，单数故障
      $curStateValue = $this->agentStateValueDef[$this->agentId % 2];
      $curStateClassName = 'AgentState'.$curStateValue;
      $this->curStateClass = new $curStateClassName();
    }

    public function getAgentStateClass()
    {
      return $this->curStateClass;
      # code...
    }

    public function setAgentStateClass(AgentState $curStateClass)
    {
      # code...
      $this->curStateClass = null;
      $this->curStateClass = $curStateClass;
    }

    public function switchAgentState($value)
    {
      $this->curStateClass->handle($this, $value);
    }
}
