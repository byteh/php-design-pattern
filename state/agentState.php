<?php
abstract class AgentState
{
    // public function __construct()
    // {
    //   // $this->agentId = $agentId;
    //   # code...
    // }

    public function generateAlertRecord()
    {
      # code...
    }

    public function nextAgentState($agentStateContext)
    {
      # code...
    }

    public function handle($agentStateContext, $value)
    {
    }
}
