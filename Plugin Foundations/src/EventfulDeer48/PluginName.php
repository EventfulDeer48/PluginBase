<?php
namespace Developer;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;

class PluginName extends PluginBase implements Listener {

  public function onEnable() : void {

    //What happens when the plugin gets enabled on the server.
  }

  public function onLoad() : void {

    //What happens when the plugin is loaded on the server.
  }

  public function onDisable() : void {

    //What happens when the plugin gets disabled on the server.
  }

  public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {

    //What happens when a command is executed on the server.

    $command = strtolower($command->getName());

    switch ($command) {

      case "command":

        if ($sender->hasPermission("pluginName.permissionName") || $sender->hasPermission("pluginName.*")) {

          //What happens when the exact command is executed.
          return true;

        } else {

          return false;
        }
        break;
    }
  }
}
?>
