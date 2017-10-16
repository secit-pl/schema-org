<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VideoGame.
 * 
 * @method VideoGame setCharacterAttribute(Property\CharacterAttribute $characterAttribute)
 * @method VideoGame setGameItem(Property\GameItem $gameItem)
 * @method VideoGame setGameLocation(Property\GameLocation $gameLocation)
 * @method VideoGame setNumberOfPlayers(Property\NumberOfPlayers $numberOfPlayers)
 * @method VideoGame setQuest(Property\Quest $quest)
 */
class VideoGame extends Game {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\CheatCode
	 */
	private $cheatCode;

	/**
	 * @var Property\Director
	 */
	private $director;

	/**
	 * @var Property\GamePlatform
	 */
	private $gamePlatform;

	/**
	 * @var Property\GameServer
	 */
	private $gameServer;

	/**
	 * @var Property\GameTip
	 */
	private $gameTip;

	/**
	 * @var Property\MusicBy
	 */
	private $musicBy;

	/**
	 * @var Property\PlayMode
	 */
	private $playMode;

	/**
	 * @var Property\Trailer
	 */
	private $trailer;

	/**
	 * Get actor.
	 * 
	 * @return Property\Actor
	 */
	public function getActor() {
		return $this->actor;
	}

	/**
	 * Get cheat code.
	 * 
	 * @return Property\CheatCode
	 */
	public function getCheatCode() {
		return $this->cheatCode;
	}

	/**
	 * Get director.
	 * 
	 * @return Property\Director
	 */
	public function getDirector() {
		return $this->director;
	}

	/**
	 * Get game platform.
	 * 
	 * @return Property\GamePlatform
	 */
	public function getGamePlatform() {
		return $this->gamePlatform;
	}

	/**
	 * Get game server.
	 * 
	 * @return Property\GameServer
	 */
	public function getGameServer() {
		return $this->gameServer;
	}

	/**
	 * Get game tip.
	 * 
	 * @return Property\GameTip
	 */
	public function getGameTip() {
		return $this->gameTip;
	}

	/**
	 * Get music by.
	 * 
	 * @return Property\MusicBy
	 */
	public function getMusicBy() {
		return $this->musicBy;
	}

	/**
	 * Get play mode.
	 * 
	 * @return Property\PlayMode
	 */
	public function getPlayMode() {
		return $this->playMode;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VideoGame';
	}

	/**
	 * Get trailer.
	 * 
	 * @return Property\Trailer
	 */
	public function getTrailer() {
		return $this->trailer;
	}

	/**
	 * Set actor.
	 * 
	 * @param Property\Actor $actor
	 * @return VideoGame
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set cheat code.
	 * 
	 * @param Property\CheatCode $cheatCode
	 * @return VideoGame
	 */
	public function setCheatCode(Property\CheatCode $cheatCode) {
		$this->cheatCode = $cheatCode;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return VideoGame
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set game platform.
	 * 
	 * @param Property\GamePlatform $gamePlatform
	 * @return VideoGame
	 */
	public function setGamePlatform(Property\GamePlatform $gamePlatform) {
		$this->gamePlatform = $gamePlatform;

		return $this;
	}

	/**
	 * Set game server.
	 * 
	 * @param Property\GameServer $gameServer
	 * @return VideoGame
	 */
	public function setGameServer(Property\GameServer $gameServer) {
		$this->gameServer = $gameServer;

		return $this;
	}

	/**
	 * Set game tip.
	 * 
	 * @param Property\GameTip $gameTip
	 * @return VideoGame
	 */
	public function setGameTip(Property\GameTip $gameTip) {
		$this->gameTip = $gameTip;

		return $this;
	}

	/**
	 * Set music by.
	 * 
	 * @param Property\MusicBy $musicBy
	 * @return VideoGame
	 */
	public function setMusicBy(Property\MusicBy $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set play mode.
	 * 
	 * @param Property\PlayMode $playMode
	 * @return VideoGame
	 */
	public function setPlayMode(Property\PlayMode $playMode) {
		$this->playMode = $playMode;

		return $this;
	}

	/**
	 * Set trailer.
	 * 
	 * @param Property\Trailer $trailer
	 * @return VideoGame
	 */
	public function setTrailer(Property\Trailer $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}