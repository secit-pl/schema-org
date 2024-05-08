<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A video game series.
 * 
 * @method VideoGameSeriesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VideoGameSeriesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VideoGameSeriesType setDescription(Property\DescriptionProperty $description)
 * @method VideoGameSeriesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VideoGameSeriesType setEndDate(Property\EndDateProperty $endDate)
 * @method VideoGameSeriesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VideoGameSeriesType setImage(Property\ImageProperty $image)
 * @method VideoGameSeriesType setIssn(Property\IssnProperty $issn)
 * @method VideoGameSeriesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VideoGameSeriesType setName(Property\NameProperty $name)
 * @method VideoGameSeriesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VideoGameSeriesType setSameAs(Property\SameAsProperty $sameAs)
 * @method VideoGameSeriesType setStartDate(Property\StartDateProperty $startDate)
 * @method VideoGameSeriesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method VideoGameSeriesType setUrl(Property\UrlProperty $url)
 */
class VideoGameSeriesType extends CreativeWorkSeriesType {

	/**
	 * @var Property\ActorProperty
	 */
	private $actor;

	/**
	 * @var Property\CharacterAttributeProperty
	 */
	private $characterAttribute;

	/**
	 * @var Property\CheatCodeProperty
	 */
	private $cheatCode;

	/**
	 * @var Property\ContainsSeasonProperty
	 */
	private $containsSeason;

	/**
	 * @var Property\DirectorProperty
	 */
	private $director;

	/**
	 * @var Property\EpisodeProperty
	 */
	private $episode;

	/**
	 * @var Property\GameItemProperty
	 */
	private $gameItem;

	/**
	 * @var Property\GameLocationProperty
	 */
	private $gameLocation;

	/**
	 * @var Property\GamePlatformProperty
	 */
	private $gamePlatform;

	/**
	 * @var Property\MusicByProperty
	 */
	private $musicBy;

	/**
	 * @var Property\NumberOfEpisodesProperty
	 */
	private $numberOfEpisodes;

	/**
	 * @var Property\NumberOfPlayersProperty
	 */
	private $numberOfPlayers;

	/**
	 * @var Property\NumberOfSeasonsProperty
	 */
	private $numberOfSeasons;

	/**
	 * @var Property\PlayModeProperty
	 */
	private $playMode;

	/**
	 * @var Property\ProductionCompanyProperty
	 */
	private $productionCompany;

	/**
	 * @var Property\QuestProperty
	 */
	private $quest;

	/**
	 * @var Property\TrailerProperty
	 */
	private $trailer;

	/**
	 * Get actor.
	 *
	 * @return Property\ActorProperty
	 */
	public function getActor() {
		return $this->actor;
	}

	/**
	 * Get character attribute.
	 *
	 * @return Property\CharacterAttributeProperty
	 */
	public function getCharacterAttribute() {
		return $this->characterAttribute;
	}

	/**
	 * Get cheat code.
	 *
	 * @return Property\CheatCodeProperty
	 */
	public function getCheatCode() {
		return $this->cheatCode;
	}

	/**
	 * Get contains season.
	 *
	 * @return Property\ContainsSeasonProperty
	 */
	public function getContainsSeason() {
		return $this->containsSeason;
	}

	/**
	 * Get director.
	 *
	 * @return Property\DirectorProperty
	 */
	public function getDirector() {
		return $this->director;
	}

	/**
	 * Get episode.
	 *
	 * @return Property\EpisodeProperty
	 */
	public function getEpisode() {
		return $this->episode;
	}

	/**
	 * Get game item.
	 *
	 * @return Property\GameItemProperty
	 */
	public function getGameItem() {
		return $this->gameItem;
	}

	/**
	 * Get game location.
	 *
	 * @return Property\GameLocationProperty
	 */
	public function getGameLocation() {
		return $this->gameLocation;
	}

	/**
	 * Get game platform.
	 *
	 * @return Property\GamePlatformProperty
	 */
	public function getGamePlatform() {
		return $this->gamePlatform;
	}

	/**
	 * Get music by.
	 *
	 * @return Property\MusicByProperty
	 */
	public function getMusicBy() {
		return $this->musicBy;
	}

	/**
	 * Get number of episodes.
	 *
	 * @return Property\NumberOfEpisodesProperty
	 */
	public function getNumberOfEpisodes() {
		return $this->numberOfEpisodes;
	}

	/**
	 * Get number of players.
	 *
	 * @return Property\NumberOfPlayersProperty
	 */
	public function getNumberOfPlayers() {
		return $this->numberOfPlayers;
	}

	/**
	 * Get number of seasons.
	 *
	 * @return Property\NumberOfSeasonsProperty
	 */
	public function getNumberOfSeasons() {
		return $this->numberOfSeasons;
	}

	/**
	 * Get play mode.
	 *
	 * @return Property\PlayModeProperty
	 */
	public function getPlayMode() {
		return $this->playMode;
	}

	/**
	 * Get production company.
	 *
	 * @return Property\ProductionCompanyProperty
	 */
	public function getProductionCompany() {
		return $this->productionCompany;
	}

	/**
	 * Get quest.
	 *
	 * @return Property\QuestProperty
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
	 * @return Property\TrailerProperty
	 */
	public function getTrailer() {
		return $this->trailer;
	}

	/**
	 * Set actor.
	 *
	 * @param Property\ActorProperty $actor
	 * @return VideoGameSeriesType
	 */
	public function setActor(Property\ActorProperty $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set character attribute.
	 *
	 * @param Property\CharacterAttributeProperty $characterAttribute
	 * @return VideoGameSeriesType
	 */
	public function setCharacterAttribute(Property\CharacterAttributeProperty $characterAttribute) {
		$this->characterAttribute = $characterAttribute;

		return $this;
	}

	/**
	 * Set cheat code.
	 *
	 * @param Property\CheatCodeProperty $cheatCode
	 * @return VideoGameSeriesType
	 */
	public function setCheatCode(Property\CheatCodeProperty $cheatCode) {
		$this->cheatCode = $cheatCode;

		return $this;
	}

	/**
	 * Set contains season.
	 *
	 * @param Property\ContainsSeasonProperty $containsSeason
	 * @return VideoGameSeriesType
	 */
	public function setContainsSeason(Property\ContainsSeasonProperty $containsSeason) {
		$this->containsSeason = $containsSeason;

		return $this;
	}

	/**
	 * Set director.
	 *
	 * @param Property\DirectorProperty $director
	 * @return VideoGameSeriesType
	 */
	public function setDirector(Property\DirectorProperty $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set episode.
	 *
	 * @param Property\EpisodeProperty $episode
	 * @return VideoGameSeriesType
	 */
	public function setEpisode(Property\EpisodeProperty $episode) {
		$this->episode = $episode;

		return $this;
	}

	/**
	 * Set game item.
	 *
	 * @param Property\GameItemProperty $gameItem
	 * @return VideoGameSeriesType
	 */
	public function setGameItem(Property\GameItemProperty $gameItem) {
		$this->gameItem = $gameItem;

		return $this;
	}

	/**
	 * Set game location.
	 *
	 * @param Property\GameLocationProperty $gameLocation
	 * @return VideoGameSeriesType
	 */
	public function setGameLocation(Property\GameLocationProperty $gameLocation) {
		$this->gameLocation = $gameLocation;

		return $this;
	}

	/**
	 * Set game platform.
	 *
	 * @param Property\GamePlatformProperty $gamePlatform
	 * @return VideoGameSeriesType
	 */
	public function setGamePlatform(Property\GamePlatformProperty $gamePlatform) {
		$this->gamePlatform = $gamePlatform;

		return $this;
	}

	/**
	 * Set music by.
	 *
	 * @param Property\MusicByProperty $musicBy
	 * @return VideoGameSeriesType
	 */
	public function setMusicBy(Property\MusicByProperty $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set number of episodes.
	 *
	 * @param Property\NumberOfEpisodesProperty $numberOfEpisodes
	 * @return VideoGameSeriesType
	 */
	public function setNumberOfEpisodes(Property\NumberOfEpisodesProperty $numberOfEpisodes) {
		$this->numberOfEpisodes = $numberOfEpisodes;

		return $this;
	}

	/**
	 * Set number of players.
	 *
	 * @param Property\NumberOfPlayersProperty $numberOfPlayers
	 * @return VideoGameSeriesType
	 */
	public function setNumberOfPlayers(Property\NumberOfPlayersProperty $numberOfPlayers) {
		$this->numberOfPlayers = $numberOfPlayers;

		return $this;
	}

	/**
	 * Set number of seasons.
	 *
	 * @param Property\NumberOfSeasonsProperty $numberOfSeasons
	 * @return VideoGameSeriesType
	 */
	public function setNumberOfSeasons(Property\NumberOfSeasonsProperty $numberOfSeasons) {
		$this->numberOfSeasons = $numberOfSeasons;

		return $this;
	}

	/**
	 * Set play mode.
	 *
	 * @param Property\PlayModeProperty $playMode
	 * @return VideoGameSeriesType
	 */
	public function setPlayMode(Property\PlayModeProperty $playMode) {
		$this->playMode = $playMode;

		return $this;
	}

	/**
	 * Set production company.
	 *
	 * @param Property\ProductionCompanyProperty $productionCompany
	 * @return VideoGameSeriesType
	 */
	public function setProductionCompany(Property\ProductionCompanyProperty $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set quest.
	 *
	 * @param Property\QuestProperty $quest
	 * @return VideoGameSeriesType
	 */
	public function setQuest(Property\QuestProperty $quest) {
		$this->quest = $quest;

		return $this;
	}

	/**
	 * Set trailer.
	 *
	 * @param Property\TrailerProperty $trailer
	 * @return VideoGameSeriesType
	 */
	public function setTrailer(Property\TrailerProperty $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}