<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Game.
 */
class Game {

	/**
	 * @var Property\CharacterAttribute
	 */
	private $characterAttribute;

	/**
	 * @var Property\GameItem
	 */
	private $gameItem;

	/**
	 * @var Property\GameLocation
	 */
	private $gameLocation;

	/**
	 */
	private $id;

	/**
	 * @var Property\NumberOfPlayers
	 */
	private $numberOfPlayers;

	/**
	 * @var Property\Quest
	 */
	private $quest;

	/**
	 * Game constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get character attribute.
	 * 
	 * @return Property\CharacterAttribute
	 */
	public function getCharacterAttribute() {
		return $this->characterAttribute;
	}

	/**
	 * Get game item.
	 * 
	 * @return Property\GameItem
	 */
	public function getGameItem() {
		return $this->gameItem;
	}

	/**
	 * Get game location.
	 * 
	 * @return Property\GameLocation
	 */
	public function getGameLocation() {
		return $this->gameLocation;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get number of players.
	 * 
	 * @return Property\NumberOfPlayers
	 */
	public function getNumberOfPlayers() {
		return $this->numberOfPlayers;
	}

	/**
	 * Get quest.
	 * 
	 * @return Property\Quest
	 */
	public function getQuest() {
		return $this->quest;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Game';
	}

	/**
	 * Set character attribute.
	 * 
	 * @param Property\CharacterAttribute $characterAttribute
	 * @return Game
	 */
	public function setCharacterAttribute(Property\CharacterAttribute $characterAttribute) {
		$this->characterAttribute = $characterAttribute;

		return $this;
	}

	/**
	 * Set game item.
	 * 
	 * @param Property\GameItem $gameItem
	 * @return Game
	 */
	public function setGameItem(Property\GameItem $gameItem) {
		$this->gameItem = $gameItem;

		return $this;
	}

	/**
	 * Set game location.
	 * 
	 * @param Property\GameLocation $gameLocation
	 * @return Game
	 */
	public function setGameLocation(Property\GameLocation $gameLocation) {
		$this->gameLocation = $gameLocation;

		return $this;
	}

	/**
	 * Set number of players.
	 * 
	 * @param Property\NumberOfPlayers $numberOfPlayers
	 * @return Game
	 */
	public function setNumberOfPlayers(Property\NumberOfPlayers $numberOfPlayers) {
		$this->numberOfPlayers = $numberOfPlayers;

		return $this;
	}

	/**
	 * Set quest.
	 * 
	 * @param Property\Quest $quest
	 * @return Game
	 */
	public function setQuest(Property\Quest $quest) {
		$this->quest = $quest;

		return $this;
	}
}