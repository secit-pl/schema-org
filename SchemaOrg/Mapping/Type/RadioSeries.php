<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RadioSeries.
 * 
 * @method RadioSeries setAbout(Property\About $about)
 * @method RadioSeries setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method RadioSeries setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method RadioSeries setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method RadioSeries setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method RadioSeries setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method RadioSeries setAdditionalType(Property\AdditionalType $additionalType)
 * @method RadioSeries setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method RadioSeries setAlternateName(Property\AlternateName $alternateName)
 * @method RadioSeries setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method RadioSeries setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method RadioSeries setAudience(Property\Audience $audience)
 * @method RadioSeries setAudio(Property\Audio $audio)
 * @method RadioSeries setAuthor(Property\Author $author)
 * @method RadioSeries setAward(Property\Award $award)
 * @method RadioSeries setCharacter(Property\Character $character)
 * @method RadioSeries setCitation(Property\Citation $citation)
 * @method RadioSeries setComment(Property\Comment $comment)
 * @method RadioSeries setCommentCount(Property\CommentCount $commentCount)
 * @method RadioSeries setContentLocation(Property\ContentLocation $contentLocation)
 * @method RadioSeries setContentRating(Property\ContentRating $contentRating)
 * @method RadioSeries setContributor(Property\Contributor $contributor)
 * @method RadioSeries setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method RadioSeries setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method RadioSeries setCreator(Property\Creator $creator)
 * @method RadioSeries setDateCreated(Property\DateCreated $dateCreated)
 * @method RadioSeries setDateModified(Property\DateModified $dateModified)
 * @method RadioSeries setDatePublished(Property\DatePublished $datePublished)
 * @method RadioSeries setDescription(Property\Description $description)
 * @method RadioSeries setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RadioSeries setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method RadioSeries setEditor(Property\Editor $editor)
 * @method RadioSeries setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method RadioSeries setEducationalUse(Property\EducationalUse $educationalUse)
 * @method RadioSeries setEncoding(Property\Encoding $encoding)
 * @method RadioSeries setEndDate(Property\EndDate $endDate)
 * @method RadioSeries setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method RadioSeries setFileFormat(Property\FileFormat $fileFormat)
 * @method RadioSeries setFunder(Property\Funder $funder)
 * @method RadioSeries setGenre(Property\Genre $genre)
 * @method RadioSeries setHasPart(Property\HasPart $hasPart)
 * @method RadioSeries setHeadline(Property\Headline $headline)
 * @method RadioSeries setImage(Property\Image $image)
 * @method RadioSeries setInLanguage(Property\InLanguage $inLanguage)
 * @method RadioSeries setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method RadioSeries setInteractivityType(Property\InteractivityType $interactivityType)
 * @method RadioSeries setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method RadioSeries setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method RadioSeries setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method RadioSeries setIsPartOf(Property\IsPartOf $isPartOf)
 * @method RadioSeries setKeywords(Property\Keywords $keywords)
 * @method RadioSeries setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method RadioSeries setLicense(Property\License $license)
 * @method RadioSeries setLocationCreated(Property\LocationCreated $locationCreated)
 * @method RadioSeries setMainEntity(Property\MainEntity $mainEntity)
 * @method RadioSeries setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RadioSeries setMentions(Property\Mentions $mentions)
 * @method RadioSeries setName(Property\Name $name)
 * @method RadioSeries setOffers(Property\Offers $offers)
 * @method RadioSeries setPosition(Property\Position $position)
 * @method RadioSeries setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RadioSeries setProducer(Property\Producer $producer)
 * @method RadioSeries setProvider(Property\Provider $provider)
 * @method RadioSeries setPublication(Property\Publication $publication)
 * @method RadioSeries setPublisher(Property\Publisher $publisher)
 * @method RadioSeries setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method RadioSeries setRecordedAt(Property\RecordedAt $recordedAt)
 * @method RadioSeries setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method RadioSeries setReview(Property\Review $review)
 * @method RadioSeries setSameAs(Property\SameAs $sameAs)
 * @method RadioSeries setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method RadioSeries setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method RadioSeries setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method RadioSeries setSponsor(Property\Sponsor $sponsor)
 * @method RadioSeries setStartDate(Property\StartDate $startDate)
 * @method RadioSeries setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method RadioSeries setText(Property\Text $text)
 * @method RadioSeries setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method RadioSeries setTimeRequired(Property\TimeRequired $timeRequired)
 * @method RadioSeries setTranslator(Property\Translator $translator)
 * @method RadioSeries setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method RadioSeries setUrl(Property\Url $url)
 * @method RadioSeries setVersion(Property\Version $version)
 * @method RadioSeries setVideo(Property\Video $video)
 * @method RadioSeries setWorkExample(Property\WorkExample $workExample)
 */
class RadioSeries extends CreativeWorkSeries {

	/**
	 * @var Property\Actor
	 */
	private $actor;

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
	 * @var Property\MusicBy
	 */
	private $musicBy;

	/**
	 * @var Property\NumberOfEpisodes
	 */
	private $numberOfEpisodes;

	/**
	 * @var Property\NumberOfSeasons
	 */
	private $numberOfSeasons;

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
	 * Get number of seasons.
	 * 
	 * @return Property\NumberOfSeasons
	 */
	public function getNumberOfSeasons() {
		return $this->numberOfSeasons;
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
		return 'https://schema.org/RadioSeries';
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
	 * @return RadioSeries
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set contains season.
	 * 
	 * @param Property\ContainsSeason $containsSeason
	 * @return RadioSeries
	 */
	public function setContainsSeason(Property\ContainsSeason $containsSeason) {
		$this->containsSeason = $containsSeason;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return RadioSeries
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set episode.
	 * 
	 * @param Property\Episode $episode
	 * @return RadioSeries
	 */
	public function setEpisode(Property\Episode $episode) {
		$this->episode = $episode;

		return $this;
	}

	/**
	 * Set music by.
	 * 
	 * @param Property\MusicBy $musicBy
	 * @return RadioSeries
	 */
	public function setMusicBy(Property\MusicBy $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set number of episodes.
	 * 
	 * @param Property\NumberOfEpisodes $numberOfEpisodes
	 * @return RadioSeries
	 */
	public function setNumberOfEpisodes(Property\NumberOfEpisodes $numberOfEpisodes) {
		$this->numberOfEpisodes = $numberOfEpisodes;

		return $this;
	}

	/**
	 * Set number of seasons.
	 * 
	 * @param Property\NumberOfSeasons $numberOfSeasons
	 * @return RadioSeries
	 */
	public function setNumberOfSeasons(Property\NumberOfSeasons $numberOfSeasons) {
		$this->numberOfSeasons = $numberOfSeasons;

		return $this;
	}

	/**
	 * Set production company.
	 * 
	 * @param Property\ProductionCompany $productionCompany
	 * @return RadioSeries
	 */
	public function setProductionCompany(Property\ProductionCompany $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set trailer.
	 * 
	 * @param Property\Trailer $trailer
	 * @return RadioSeries
	 */
	public function setTrailer(Property\Trailer $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}