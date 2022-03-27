<?php

namespace ErikPDev\AdvanceDeaths\utils\scriptModules;

use pocketmine\player\Player;

class heal {

	public function __construct(public string $message, private string $playerWanted) {
	}

	public function getPlayerWanted(): string {

		return $this->playerWanted;

	}

	public function run($entity) {

		if (!$entity instanceof Player) return;
		$entity->setHealth($entity->getMaxHealth());

	}

}