<?php

namespace codezzers\Scoreboard;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\scoreboard\Scoreboard;

class Main extends PluginBase implements Listener
{
    
    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event): void
    {
        $player = $event->getPlayer();
        Scoreboard::addScoreboard($player, $player->getName(), "Test");
        Scoreboard::setLine($player, 1, "PocketTR");
    }
}