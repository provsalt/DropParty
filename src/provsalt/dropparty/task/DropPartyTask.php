<?php

namespace provsalt\dropparty\task;

use pocketmine\scheduler\Task;
use provsalt\dropparty\DropParty;
use pocketmine\item\Item;
use pocketmine\utils\Config;
use pocketmine\math\Vector3;

class DropPartyTask extends Task {
	
	public function __construct(DropParty $plugin) {
	  $this->plugin = $plugin;
	}
	
	public function getPlugin() {
	  return $this->plugin;
	}
	
	public function onRun(int $currentTick) {
	  $msg = str_replace("{time}", $this->getPlugin()->time, $this->getPlugin()->config()["Message"]["Countdown"]);
	  if($this->getPlugin()->time > 0) {
	    $this->getPlugin()->getServer()->broadcastMessage($msg);
	  }
		
	  if($this->getPlugin()->time == 0) {
	    $this->getPlugin()->getServer()->broadcastMessage($this->getPlugin()->config()["Message"]["Started"]);
            $this->getPlugin()->status = "enabled";		
	  }
			
	  $this->getPlugin()->time = $this->getPlugin()->time - 1;

          }
		
	}
