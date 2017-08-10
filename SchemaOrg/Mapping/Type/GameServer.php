<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GameServer.
 */
class GameServer extends Intangible {

	/**
	 * @var Property\Game
	 */
	private $game;

	/**
	 * @var Property\PlayersOnline
	 */
	private $playersOnline;

	/**
	 * @var Property\ServerStatus
	 */
	private $serverStatus;

	/**
	 * Get game.
	 * 
	 * @return Property\Game
	 */
	public function getGame() {
		return $this->game;
	}

	/**
	 * Get players online.
	 * 
	 * @return Property\PlayersOnline
	 */
	public function getPlayersOnline() {
		return $this->playersOnline;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GameServer';
	}

	/**
	 * Get server status.
	 * 
	 * @return Property\ServerStatus
	 */
	public function getServerStatus() {
		return $this->serverStatus;
	}

	/**
	 * Set game.
	 * 
	 * @param Property\Game $game
	 * @return GameServer
	 */
	public function setGame(Property\Game $game) {
		$this->game = $game;

		return $this;
	}

	/**
	 * Set players online.
	 * 
	 * @param Property\PlayersOnline $playersOnline
	 * @return GameServer
	 */
	public function setPlayersOnline(Property\PlayersOnline $playersOnline) {
		$this->playersOnline = $playersOnline;

		return $this;
	}

	/**
	 * Set server status.
	 * 
	 * @param Property\ServerStatus $serverStatus
	 * @return GameServer
	 */
	public function setServerStatus(Property\ServerStatus $serverStatus) {
		$this->serverStatus = $serverStatus;

		return $this;
	}
}