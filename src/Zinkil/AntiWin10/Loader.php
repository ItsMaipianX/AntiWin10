<?php

declare(strict_types=1);

namespace Zinkil\AntiWin10;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Loader extends PluginBase implements Listener{

    public function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPreLogin(PlayerPreLoginEvent $event) : void{
        if($pInfo->getExtraData()["DeviceOS"] === 7){
            $event->setKickFlag(PlayerPreLoginEvent::KICK_FLAG_PLUGIN, "§l§eYou are playing on Windows 10\n§r§cYou can't join this server with Win10");
        }
    }
}
