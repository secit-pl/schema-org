<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GameServer.
 * 
 * @method GameServer setAdditionalType(Property\AdditionalType $additionalType)
 * @method GameServer setAlternateName(Property\AlternateName $alternateName)
 * @method GameServer setDescription(Property\Description $description)
 * @method GameServer setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GameServer setIdentifier(Property\Identifier $identifier)
 * @method GameServer setImage(Property\Image $image)
 * @method GameServer setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GameServer setName(Property\Name $name)
 * @method GameServer setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GameServer setSameAs(Property\SameAs $sameAs)
 * @method GameServer setUrl(Property\Url $url)
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