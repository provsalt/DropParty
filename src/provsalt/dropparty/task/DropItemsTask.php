<?php

namespace provsalt\dropparty\task;

use pocketmine\scheduler\Task;
use pocketmine\item\Item;
use pocketmine\utils\Config;
use pocketmine\math\Vector3;
use provsalt\dropparty\DropParty;

class DropItemsTask extends Task {
	
	public function __construct(DropParty $plugin) {
		$this->plugin = $plugin;	
	}
	
	public function getPlugin() {
		return $this->plugin;
	}
	
	public function onRun(int $currentTick) {
		
		if($this->getPlugin()->status == "enabled") {
		  $level = $this->getPlugin()->getServer()->getLevelByName($this->getPlugin()->cfg["World"]);
			
		    if($this->getPlugin()->config()["Popup"]["Enabled"] == true) {
		      $this->getPlugin()->getServer()->broadcastPopup($this->getPlugin()->config()["Popup"]["Message"]);
		}
			$level->dropItem(new Vector3($this->getPlugin()->cfg["Coordinates"]["X"], $this->getPlugin()->cfg["Coordinates"]["Y"], $this->getPlugin()->cfg["Coordinates"]["Z"]), Item::get($this->getPlugin()->getRandomItem(), 0, mt_rand(1, 5)));
			$this->getPlugin()->secs++;
			
		}
		
	    if($this->getPlugin()->secs == $this->getPlugin()->config()["Duration"]) {			
	      if($this->getPlugin()->status == "enabled") {
		$this->getPlugin()->getServer()->broadcastMessage($this->getPlugin()->config()["Message"]["Ended"]);
		$this->getPlugin()->status = "ended";
		$this->getPlugin()->secs = 0;				
		$this->getPlugin()->time = $this->getPlugin()->cfg["Time"];
	       }
	    }
	}
		
}
