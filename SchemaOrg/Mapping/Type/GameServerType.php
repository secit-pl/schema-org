<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Server that provides game interaction in a multiplayer game.
 * 
 * @method GameServerType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GameServerType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GameServerType setDescription(Property\DescriptionProperty $description)
 * @method GameServerType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GameServerType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GameServerType setImage(Property\ImageProperty $image)
 * @method GameServerType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GameServerType setName(Property\NameProperty $name)
 * @method GameServerType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GameServerType setSameAs(Property\SameAsProperty $sameAs)
 * @method GameServerType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GameServerType setUrl(Property\UrlProperty $url)
 */
class GameServerType extends IntangibleType {

	/**
	 * @var Property\GameProperty
	 */
	private $game;

	/**
	 * @var Property\PlayersOnlineProperty
	 */
	private $playersOnline;

	/**
	 * @var Property\ServerStatusProperty
	 */
	private $serverStatus;

	/**
	 * Get game.
	 *
	 * @return Property\GameProperty
	 */
	public function getGame() {
		return $this->game;
	}

	/**
	 * Get players online.
	 *
	 * @return Property\PlayersOnlineProperty
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
	 * @return Property\ServerStatusProperty
	 */
	public function getServerStatus() {
		return $this->serverStatus;
	}

	/**
	 * Set game.
	 *
	 * @param Property\GameProperty $game
	 * @return GameServerType
	 */
	public function setGame(Property\GameProperty $game) {
		$this->game = $game;

		return $this;
	}

	/**
	 * Set players online.
	 *
	 * @param Property\PlayersOnlineProperty $playersOnline
	 * @return GameServerType
	 */
	public function setPlayersOnline(Property\PlayersOnlineProperty $playersOnline) {
		$this->playersOnline = $playersOnline;

		return $this;
	}

	/**
	 * Set server status.
	 *
	 * @param Property\ServerStatusProperty $serverStatus
	 * @return GameServerType
	 */
	public function setServerStatus(Property\ServerStatusProperty $serverStatus) {
		$this->serverStatus = $serverStatus;

		return $this;
	}
}