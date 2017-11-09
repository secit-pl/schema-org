<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Game.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\GameType instead.
 * 
 * @method Game setAccessMode(Property\AccessMode $accessMode)
 * @method Game setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Game setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Game setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Game setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Game setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Game setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Game setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Game setAdditionalType(Property\AdditionalType $additionalType)
 * @method Game setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Game setAlternateName(Property\AlternateName $alternateName)
 * @method Game setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Game setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Game setAudience(Property\Audience $audience)
 * @method Game setAudio(Property\Audio $audio)
 * @method Game setAuthor(Property\Author $author)
 * @method Game setAward(Property\Award $award)
 * @method Game setCharacter(Property\Character $character)
 * @method Game setCitation(Property\Citation $citation)
 * @method Game setComment(Property\Comment $comment)
 * @method Game setCommentCount(Property\CommentCount $commentCount)
 * @method Game setContentLocation(Property\ContentLocation $contentLocation)
 * @method Game setContentRating(Property\ContentRating $contentRating)
 * @method Game setContributor(Property\Contributor $contributor)
 * @method Game setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Game setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Game setCreator(Property\Creator $creator)
 * @method Game setDateCreated(Property\DateCreated $dateCreated)
 * @method Game setDateModified(Property\DateModified $dateModified)
 * @method Game setDatePublished(Property\DatePublished $datePublished)
 * @method Game setDescription(Property\Description $description)
 * @method Game setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Game setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Game setEditor(Property\Editor $editor)
 * @method Game setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Game setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Game setEncoding(Property\Encoding $encoding)
 * @method Game setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Game setExpires(Property\Expires $expires)
 * @method Game setFileFormat(Property\FileFormat $fileFormat)
 * @method Game setFunder(Property\Funder $funder)
 * @method Game setGenre(Property\Genre $genre)
 * @method Game setHasPart(Property\HasPart $hasPart)
 * @method Game setHeadline(Property\Headline $headline)
 * @method Game setIdentifier(Property\Identifier $identifier)
 * @method Game setImage(Property\Image $image)
 * @method Game setInLanguage(Property\InLanguage $inLanguage)
 * @method Game setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Game setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Game setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Game setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Game setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Game setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Game setKeywords(Property\Keywords $keywords)
 * @method Game setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Game setLicense(Property\License $license)
 * @method Game setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Game setMainEntity(Property\MainEntity $mainEntity)
 * @method Game setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Game setMaterial(Property\Material $material)
 * @method Game setMentions(Property\Mentions $mentions)
 * @method Game setName(Property\Name $name)
 * @method Game setOffers(Property\Offers $offers)
 * @method Game setPosition(Property\Position $position)
 * @method Game setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Game setProducer(Property\Producer $producer)
 * @method Game setProvider(Property\Provider $provider)
 * @method Game setPublication(Property\Publication $publication)
 * @method Game setPublisher(Property\Publisher $publisher)
 * @method Game setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Game setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Game setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Game setReview(Property\Review $review)
 * @method Game setSameAs(Property\SameAs $sameAs)
 * @method Game setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Game setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Game setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Game setSponsor(Property\Sponsor $sponsor)
 * @method Game setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Game setText(Property\Text $text)
 * @method Game setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Game setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Game setTranslator(Property\Translator $translator)
 * @method Game setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Game setUrl(Property\Url $url)
 * @method Game setVersion(Property\Version $version)
 * @method Game setVideo(Property\Video $video)
 * @method Game setWorkExample(Property\WorkExample $workExample)
 */
class Game extends CreativeWork {

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
	 * @var Property\NumberOfPlayers
	 */
	private $numberOfPlayers;

	/**
	 * @var Property\Quest
	 */
	private $quest;

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