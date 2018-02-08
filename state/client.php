<?php
spl_autoload_register(function ($class_name) {
    //echo "Want to load $class_name.\n";
    require_once $class_name . '.php';
});

$agentId = rand(1000,9999);
$AgentStateContext = new AgentStateContext($agentId);
$AgentStateContext->initAgentStateClass();
printf("agentId = %s , agentState = %s \n", $agentId, get_class($AgentStateContext->getAgentStateClass()) );

for($i=1;$i<=10;$i++){
  # 查询 db 或者 其它方式，判断是否需要进行状态迁移的值，也可以是场景
  # 用随机数来模拟一下
  $value = rand(0, 1);
  echo $i." {$value} ";

  $AgentStateContext->switchAgentState($value);
  echo get_class($AgentStateContext->getAgentStateClass());
  echo "\n";
}
