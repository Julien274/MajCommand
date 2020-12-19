<?php

namespace MajCommand;

use pocketmine\event\Listener;
use pocketmine\event\server\CommandEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("MajCommand enable !");
    }
    public function onUseCommand(CommandEvent $event) {

        $cmd = $event->getCommand();
        $event->setCommand(strtolower($cmd));

    }
}