<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VideoGameSeries.
 * 
 * @method VideoGameSeries setEndDate(Property\EndDate $endDate)
 * @method VideoGameSeries setStartDate(Property\StartDate $startDate)
 */
class VideoGameSeries extends CreativeWorkSeries {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\CharacterAttribute
	 */
	private $characterAttribute;

	/**
	 * @var Property\CheatCode
	 */
	private $cheatCode;

	/**
	 * @var Property\ContainsSeason
	 */
	private $containsSeason;

	/**
	 * @var Property\Director
	 */
	private $director;

	/**
	 * @var Property\Episode
	 */
	private $episode;

	/**
	 * @var Property\GameItem
	 */
	private $gameItem;

	/**
	 * @var Property\GameLocation
	 */
	private $gameLocation;

	/**
	 * @var Property\GamePlatform
	 */
	private $gamePlatform;

	/**
	 * @var Property\MusicBy
	 */
	private $musicBy;

	/**
	 * @var Property\NumberOfEpisodes
	 */
	private $numberOfEpisodes;

	/**
	 * @var Property\NumberOfPlayers
	 */
	private $numberOfPlayers;

	/**
	 * @var Property\NumberOfSeasons
	 */
	private $numberOfSeasons;

	/**
	 * @var Property\PlayMode
	 */
	private $playMode;

	/**
	 * @var Property\ProductionCompany
	 */
	private $productionCompany;

	/**
	 * @var Property\Quest
	 */
	private $quest;

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
	 * Get character attribute.
	 * 
	 * @return Property\CharacterAttribute
	 */
	public function getCharacterAttribute() {
		return $this->characterAttribute;
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
	 * Get contains season.
	 * 
	 * @return Property\ContainsSeason
	 */
	public function getContainsSeason() {
		return $this->containsSeason;
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
	 * Get episode.
	 * 
	 * @return Property\Episode
	 */
	public function getEpisode() {
		return $this->episode;
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
	 * Get game platform.
	 * 
	 * @return Property\GamePlatform
	 */
	public function getGamePlatform() {
		return $this->gamePlatform;
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
	 * Get number of episodes.
	 * 
	 * @return Property\NumberOfEpisodes
	 */
	public function getNumberOfEpisodes() {
		return $this->numberOfEpisodes;
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
	 * Get number of seasons.
	 * 
	 * @return Property\NumberOfSeasons
	 */
	public function getNumberOfSeasons() {
		return $this->numberOfSeasons;
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
	 * Get production company.
	 * 
	 * @return Property\ProductionCompany
	 */
	public function getProductionCompany() {
		return $this->productionCompany;
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
		return 'https://schema.org/VideoGameSeries';
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
	 * @return VideoGameSeries
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set character attribute.
	 * 
	 * @param Property\CharacterAttribute $characterAttribute
	 * @return VideoGameSeries
	 */
	public function setCharacterAttribute(Property\CharacterAttribute $characterAttribute) {
		$this->characterAttribute = $characterAttribute;

		return $this;
	}

	/**
	 * Set cheat code.
	 * 
	 * @param Property\CheatCode $cheatCode
	 * @return VideoGameSeries
	 */
	public function setCheatCode(Property\CheatCode $cheatCode) {
		$this->cheatCode = $cheatCode;

		return $this;
	}

	/**
	 * Set contains season.
	 * 
	 * @param Property\ContainsSeason $containsSeason
	 * @return VideoGameSeries
	 */
	public function setContainsSeason(Property\ContainsSeason $containsSeason) {
		$this->containsSeason = $containsSeason;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return VideoGameSeries
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set episode.
	 * 
	 * @param Property\Episode $episode
	 * @return VideoGameSeries
	 */
	public function setEpisode(Property\Episode $episode) {
		$this->episode = $episode;

		return $this;
	}

	/**
	 * Set game item.
	 * 
	 * @param Property\GameItem $gameItem
	 * @return VideoGameSeries
	 */
	public function setGameItem(Property\GameItem $gameItem) {
		$this->gameItem = $gameItem;

		return $this;
	}

	/**
	 * Set game location.
	 * 
	 * @param Property\GameLocation $gameLocation
	 * @return VideoGameSeries
	 */
	public function setGameLocation(Property\GameLocation $gameLocation) {
		$this->gameLocation = $gameLocation;

		return $this;
	}

	/**
	 * Set game platform.
	 * 
	 * @param Property\GamePlatform $gamePlatform
	 * @return VideoGameSeries
	 */
	public function setGamePlatform(Property\GamePlatform $gamePlatform) {
		$this->gamePlatform = $gamePlatform;

		return $this;
	}

	/**
	 * Set music by.
	 * 
	 * @param Property\MusicBy $musicBy
	 * @return VideoGameSeries
	 */
	public function setMusicBy(Property\MusicBy $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set number of episodes.
	 * 
	 * @param Property\NumberOfEpisodes $numberOfEpisodes
	 * @return VideoGameSeries
	 */
	public function setNumberOfEpisodes(Property\NumberOfEpisodes $numberOfEpisodes) {
		$this->numberOfEpisodes = $numberOfEpisodes;

		return $this;
	}

	/**
	 * Set number of players.
	 * 
	 * @param Property\NumberOfPlayers $numberOfPlayers
	 * @return VideoGameSeries
	 */
	public function setNumberOfPlayers(Property\NumberOfPlayers $numberOfPlayers) {
		$this->numberOfPlayers = $numberOfPlayers;

		return $this;
	}

	/**
	 * Set number of seasons.
	 * 
	 * @param Property\NumberOfSeasons $numberOfSeasons
	 * @return VideoGameSeries
	 */
	public function setNumberOfSeasons(Property\NumberOfSeasons $numberOfSeasons) {
		$this->numberOfSeasons = $numberOfSeasons;

		return $this;
	}

	/**
	 * Set play mode.
	 * 
	 * @param Property\PlayMode $playMode
	 * @return VideoGameSeries
	 */
	public function setPlayMode(Property\PlayMode $playMode) {
		$this->playMode = $playMode;

		return $this;
	}

	/**
	 * Set production company.
	 * 
	 * @param Property\ProductionCompany $productionCompany
	 * @return VideoGameSeries
	 */
	public function setProductionCompany(Property\ProductionCompany $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set quest.
	 * 
	 * @param Property\Quest $quest
	 * @return VideoGameSeries
	 */
	public function setQuest(Property\Quest $quest) {
		$this->quest = $quest;

		return $this;
	}

	/**
	 * Set trailer.
	 * 
	 * @param Property\Trailer $trailer
	 * @return VideoGameSeries
	 */
	public function setTrailer(Property\Trailer $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}