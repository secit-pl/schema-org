<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Episode.
 * 
 * @method Episode setAccessMode(Property\AccessMode $accessMode)
 * @method Episode setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Episode setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Episode setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Episode setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Episode setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Episode setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Episode setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Episode setAdditionalType(Property\AdditionalType $additionalType)
 * @method Episode setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Episode setAlternateName(Property\AlternateName $alternateName)
 * @method Episode setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Episode setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Episode setAudience(Property\Audience $audience)
 * @method Episode setAudio(Property\Audio $audio)
 * @method Episode setAuthor(Property\Author $author)
 * @method Episode setAward(Property\Award $award)
 * @method Episode setCharacter(Property\Character $character)
 * @method Episode setCitation(Property\Citation $citation)
 * @method Episode setComment(Property\Comment $comment)
 * @method Episode setCommentCount(Property\CommentCount $commentCount)
 * @method Episode setContentLocation(Property\ContentLocation $contentLocation)
 * @method Episode setContentRating(Property\ContentRating $contentRating)
 * @method Episode setContributor(Property\Contributor $contributor)
 * @method Episode setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Episode setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Episode setCreator(Property\Creator $creator)
 * @method Episode setDateCreated(Property\DateCreated $dateCreated)
 * @method Episode setDateModified(Property\DateModified $dateModified)
 * @method Episode setDatePublished(Property\DatePublished $datePublished)
 * @method Episode setDescription(Property\Description $description)
 * @method Episode setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Episode setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Episode setEditor(Property\Editor $editor)
 * @method Episode setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Episode setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Episode setEncoding(Property\Encoding $encoding)
 * @method Episode setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Episode setExpires(Property\Expires $expires)
 * @method Episode setFileFormat(Property\FileFormat $fileFormat)
 * @method Episode setFunder(Property\Funder $funder)
 * @method Episode setGenre(Property\Genre $genre)
 * @method Episode setHasPart(Property\HasPart $hasPart)
 * @method Episode setHeadline(Property\Headline $headline)
 * @method Episode setIdentifier(Property\Identifier $identifier)
 * @method Episode setImage(Property\Image $image)
 * @method Episode setInLanguage(Property\InLanguage $inLanguage)
 * @method Episode setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Episode setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Episode setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Episode setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Episode setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Episode setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Episode setKeywords(Property\Keywords $keywords)
 * @method Episode setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Episode setLicense(Property\License $license)
 * @method Episode setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Episode setMainEntity(Property\MainEntity $mainEntity)
 * @method Episode setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Episode setMaterial(Property\Material $material)
 * @method Episode setMentions(Property\Mentions $mentions)
 * @method Episode setName(Property\Name $name)
 * @method Episode setOffers(Property\Offers $offers)
 * @method Episode setPosition(Property\Position $position)
 * @method Episode setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Episode setProducer(Property\Producer $producer)
 * @method Episode setProvider(Property\Provider $provider)
 * @method Episode setPublication(Property\Publication $publication)
 * @method Episode setPublisher(Property\Publisher $publisher)
 * @method Episode setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Episode setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Episode setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Episode setReview(Property\Review $review)
 * @method Episode setSameAs(Property\SameAs $sameAs)
 * @method Episode setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Episode setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Episode setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Episode setSponsor(Property\Sponsor $sponsor)
 * @method Episode setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Episode setText(Property\Text $text)
 * @method Episode setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Episode setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Episode setTranslator(Property\Translator $translator)
 * @method Episode setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Episode setUrl(Property\Url $url)
 * @method Episode setVersion(Property\Version $version)
 * @method Episode setVideo(Property\Video $video)
 * @method Episode setWorkExample(Property\WorkExample $workExample)
 */
class Episode extends CreativeWork {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\Director
	 */
	private $director;

	/**
	 * @var Property\EpisodeNumber
	 */
	private $episodeNumber;

	/**
	 * @var Property\MusicBy
	 */
	private $musicBy;

	/**
	 * @var Property\PartOfSeason
	 */
	private $partOfSeason;

	/**
	 * @var Property\PartOfSeries
	 */
	private $partOfSeries;

	/**
	 * @var Property\ProductionCompany
	 */
	private $productionCompany;

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
	 * Get director.
	 * 
	 * @return Property\Director
	 */
	public function getDirector() {
		return $this->director;
	}

	/**
	 * Get episode number.
	 * 
	 * @return Property\EpisodeNumber
	 */
	public function getEpisodeNumber() {
		return $this->episodeNumber;
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
	 * Get part of season.
	 * 
	 * @return Property\PartOfSeason
	 */
	public function getPartOfSeason() {
		return $this->partOfSeason;
	}

	/**
	 * Get part of series.
	 * 
	 * @return Property\PartOfSeries
	 */
	public function getPartOfSeries() {
		return $this->partOfSeries;
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
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Episode';
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
	 * @return Episode
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return Episode
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set episode number.
	 * 
	 * @param Property\EpisodeNumber $episodeNumber
	 * @return Episode
	 */
	public function setEpisodeNumber(Property\EpisodeNumber $episodeNumber) {
		$this->episodeNumber = $episodeNumber;

		return $this;
	}

	/**
	 * Set music by.
	 * 
	 * @param Property\MusicBy $musicBy
	 * @return Episode
	 */
	public function setMusicBy(Property\MusicBy $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set part of season.
	 * 
	 * @param Property\PartOfSeason $partOfSeason
	 * @return Episode
	 */
	public function setPartOfSeason(Property\PartOfSeason $partOfSeason) {
		$this->partOfSeason = $partOfSeason;

		return $this;
	}

	/**
	 * Set part of series.
	 * 
	 * @param Property\PartOfSeries $partOfSeries
	 * @return Episode
	 */
	public function setPartOfSeries(Property\PartOfSeries $partOfSeries) {
		$this->partOfSeries = $partOfSeries;

		return $this;
	}

	/**
	 * Set production company.
	 * 
	 * @param Property\ProductionCompany $productionCompany
	 * @return Episode
	 */
	public function setProductionCompany(Property\ProductionCompany $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set trailer.
	 * 
	 * @param Property\Trailer $trailer
	 * @return Episode
	 */
	public function setTrailer(Property\Trailer $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}