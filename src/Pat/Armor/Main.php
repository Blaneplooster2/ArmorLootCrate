<?php

 /**
 * PAT Plugin made by CavinMiana
 * 
 */

namespace Pat\Armor;

use pocketmine\plugin\PluginManager;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\tile\Tile;
use pocketmine\tile\Chest;
use pocketmine\event\inventory\InventoryOpenEvent;
use pocketmine\item\Item;
use pocketmine\item\ItemBlock;
use pocketmine\block\Block;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\inventory\Inventory;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\inventory\DoubleChestInventory;
use pocketmine\inventory\ChestInventory;
use pocketmine\math\Vector3;


class Main extends PluginBase implements Listener{

	
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getServer()->getLogger()->info(TextFormat:: GREEN . "[Armour] Plugin Loaded!");
        $this->getServer()->getLogger()->info(TextFormat:: GREEN . "[Armour] Version 1.0 in use");
    }
	
   public function onBlockPlaceEvent(BlockPlaceEvent $ev) {
			$bl = $ev->getBlock();
			if($bl->getId() == 39){
			$event->setCancelled(true);
		}
		if($bl->getId() == 32){
			$event->setCancelled(true);
		}
		if ($ev->isCancelled()) return;
		if ($bl->getId() != Block::CHEST || $bl->getSide(Vector3::SIDE_DOWN)->getId() != Block::GLASS) return;
		$ev->getPlayer()->sendMessage("Placed Armour Crate...");
	}
	
		public function onInventoryOpenEvent(InventoryOpenEvent $ev) {
		if ($ev->isCancelled()) return;
		$player = $ev->getPlayer();
		$inv = $ev->getInventory();
		if (!$this->isCrate($inv)) return;
		if($ev->getPlayer()->getInventory()->getItemInHand()->getId() == 341){
			$ev->getPlayer()->getInventory()->removeItem(Item::get(341, 0, 1));
			$armour = array("306", "306", "306", "306", "307", "307", "307", "307", "308", "308", "308", "308", "309", "309", "309", "309", "310", "310", "310", "310", "311", "311", "311", "311", "312", "312", "312", "312", "313", "313", "313", "313", "302", "303", "304", "305", "314", "315", "316", "317");
			$am = $armour[array_rand($armour)];
			$amount = array("1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1");
			$a = $amount[array_rand($amount)];
			$ev->getPlayer()->getInventory()->addItem(Item::get($am, 0, $a));
	    $ev->getPlayer()->sendMessage(TextFormat::GREEN."---------------");
		$ev->getPlayer()->sendMessage(TextFormat::GOLD."Redeemed Armour Crate!");
		$ev->getPlayer()->sendMessage(TextFormat::GREEN."---------------");
		$ev->getPlayer()->sendMessage(TextFormat::AQUA." ITEMS WON:");
		if($am == 306){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Iron Helmet  x".$a);
		}
		elseif($am == 307){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Iron Chestplate  x".$a);
		}
		elseif($am == 308){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Iron Leggings  x".$a);
		}
		elseif($am == 309){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Iron Boots  x".$a);
		}
		elseif($am == 310){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Diamond Helmet  x".$a);
		}
		elseif($am == 311){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Diamond Chestplate  x".$a);
		}
		elseif($am == 312){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Diamond Leggings  x".$a);
		}
		elseif($am == 313){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Diamond Boots  x".$a);
		}
		elseif($am == 302){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Chain Helmet  x".$a);
		}
		elseif($am == 303){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Chain Chestplate  x".$a);
		}
		elseif($am == 304){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Chain Leggings  x".$a);
		}
		elseif($am == 305){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Chain Boots  x".$a);
		}
		elseif($am == 314){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Gold Helmet  x".$a);
		}
		elseif($am == 315){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Gold Chestplate  x".$a);
		}
		elseif($am == 316){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Gold Leggings  x".$a);
		}
		elseif($am == 317){
			$ev->getPlayer()->sendMessage(TextFormat::GOLD."Gold Boots  x".$a);
		}
		$ev->setCancelled();
		}
		else{
			$ev->getPlayer()->sendMessage(TextFormat::RED."------------------");
			$ev->getPlayer()->sendMessage(TextFormat::YELLOW." Armour CRATE");
			$ev->getPlayer()->sendMessage(TextFormat::RED."------------------");
			$ev->getPlayer()->sendMessage(TextFormat::AQUA."Win up to Diamond Armour!");
			$ev->getPlayer()->sendMessage(TextFormat::RED."------------------");
			$ev->setCancelled();
			$ev->getPlayer()->sendTip(TextFormat::AQUA."USE /vote TO GET A KEY.");
			$ev->getPlayer()->sendTip(TextFormat::GREEN."USE /vote TO GET A KEY.");
			$ev->getPlayer()->sendTip(TextFormat::AQUA."USE /vote TO GET A KEY.");
			$ev->getPlayer()->sendTip(TextFormat::GREEN."USE /vote TO GET A KEY.");
			$ev->getPlayer()->sendTip(TextFormat::AQUA."USE /vote TO GET A KEY.");
			$ev->getPlayer()->sendTip(TextFormat::GREEN."USE /vote TO GET A KEY.");
			$ev->getPlayer()->sendTip(TextFormat::AQUA."USE /vote TO GET A KEY.");
			$ev->getPlayer()->sendTip(TextFormat::GREEN."USE /vote TO GET A KEY.");
			$ev->getPlayer()->sendTip(TextFormat::AQUA."USE /vote TO GET A KEY.");
		}
	}
    public function isCrate(Inventory $inv) {
		if ($inv instanceof DoubleChestInventory) return false;
		if (!($inv instanceof ChestInventory)) return false;
		$tile = $inv->getHolder();
		if (!($tile instanceof Chest)) return false;
		$bl = $tile->getBlock();
		if ($bl->getId() != Block::CHEST) return false;
		if ($bl->getSide(Vector3::SIDE_DOWN)->getId() != Item::GLASS) return false;
		return true;
		}
     	public function onPlayerItemHeldEvent(PlayerItemHeldEvent $event){
        $item = $event->getItem();
        $player = $event->getPlayer();
        if($item instanceof Item){
            switch ($item->getId()){
				        case 341:
				 $player->sendPopup(TextFormat::AQUA."Crate Key");
			}
		}
	}
	public function onDisable(){
		$this->getLogger()->info(TextFormat:: RED . "[Armour] Plugin Disabled");
	}
}
