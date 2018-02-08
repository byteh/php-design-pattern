<?php
class AgentStateNormal extends AgentState
{
    public function generateAlertRecord()
    {
      # code...
      echo " [generateAlertRecord 恢复啦，我要告警....] ";
    }

    public function handle($agentStateContext, $value)
    {
      $needSwitch = $this->estimateNeedSwitch($value);
      if($needSwitch){
        $this->nextAgentState($agentStateContext);
      }
      # code...
    }

    private function estimateNeedSwitch($value)
    {
      # 查询 db 或者 其它方式，判断是否需要进行状态迁移
      # 用随机数来模拟一下
      return $value == 1;
    }

    public function nextAgentState($agentStateContext)
    {
      # code...
      $agentStateClass = new AgentStateFault();
      $agentStateContext->setAgentStateClass($agentStateClass);
      $agentStateContext->getAgentStateClass()->generateAlertRecord();
    }
}
