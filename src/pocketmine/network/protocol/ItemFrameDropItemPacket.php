<?php



namespace pocketmine\network\protocol;

class ItemFrameDropItemPacket extends DataPacket{

	const NETWORK_ID = Info::ITEM_FRAME_DROP_ITEM_PACKET;

	public $x;
	public $y;
	public $z;
	public $dropItem;

	public function decode(){
		$this->getBlockCoords($this->x, $this->y, $this->z);
		$this->dropItem = $this->getSlot();
	}

	public function encode(){
	}
}