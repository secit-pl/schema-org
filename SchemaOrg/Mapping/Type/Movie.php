<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Movie.
 * 
 * @method Movie setAbout(Property\About $about)
 * @method Movie setAccessMode(Property\AccessMode $accessMode)
 * @method Movie setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Movie setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Movie setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Movie setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Movie setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Movie setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Movie setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Movie setAdditionalType(Property\AdditionalType $additionalType)
 * @method Movie setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Movie setAlternateName(Property\AlternateName $alternateName)
 * @method Movie setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Movie setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Movie setAudience(Property\Audience $audience)
 * @method Movie setAudio(Property\Audio $audio)
 * @method Movie setAuthor(Property\Author $author)
 * @method Movie setAward(Property\Award $award)
 * @method Movie setCharacter(Property\Character $character)
 * @method Movie setCitation(Property\Citation $citation)
 * @method Movie setComment(Property\Comment $comment)
 * @method Movie setCommentCount(Property\CommentCount $commentCount)
 * @method Movie setContentLocation(Property\ContentLocation $contentLocation)
 * @method Movie setContentRating(Property\ContentRating $contentRating)
 * @method Movie setContributor(Property\Contributor $contributor)
 * @method Movie setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Movie setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Movie setCreator(Property\Creator $creator)
 * @method Movie setDateCreated(Property\DateCreated $dateCreated)
 * @method Movie setDateModified(Property\DateModified $dateModified)
 * @method Movie setDatePublished(Property\DatePublished $datePublished)
 * @method Movie setDescription(Property\Description $description)
 * @method Movie setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Movie setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Movie setEditor(Property\Editor $editor)
 * @method Movie setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Movie setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Movie setEncoding(Property\Encoding $encoding)
 * @method Movie setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Movie setFileFormat(Property\FileFormat $fileFormat)
 * @method Movie setFunder(Property\Funder $funder)
 * @method Movie setGenre(Property\Genre $genre)
 * @method Movie setHasPart(Property\HasPart $hasPart)
 * @method Movie setHeadline(Property\Headline $headline)
 * @method Movie setIdentifier(Property\Identifier $identifier)
 * @method Movie setImage(Property\Image $image)
 * @method Movie setInLanguage(Property\InLanguage $inLanguage)
 * @method Movie setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Movie setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Movie setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Movie setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Movie setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Movie setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Movie setKeywords(Property\Keywords $keywords)
 * @method Movie setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Movie setLicense(Property\License $license)
 * @method Movie setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Movie setMainEntity(Property\MainEntity $mainEntity)
 * @method Movie setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Movie setMaterial(Property\Material $material)
 * @method Movie setMentions(Property\Mentions $mentions)
 * @method Movie setName(Property\Name $name)
 * @method Movie setOffers(Property\Offers $offers)
 * @method Movie setPosition(Property\Position $position)
 * @method Movie setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Movie setProducer(Property\Producer $producer)
 * @method Movie setProvider(Property\Provider $provider)
 * @method Movie setPublication(Property\Publication $publication)
 * @method Movie setPublisher(Property\Publisher $publisher)
 * @method Movie setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Movie setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Movie setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Movie setReview(Property\Review $review)
 * @method Movie setSameAs(Property\SameAs $sameAs)
 * @method Movie setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Movie setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Movie setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Movie setSponsor(Property\Sponsor $sponsor)
 * @method Movie setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Movie setText(Property\Text $text)
 * @method Movie setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Movie setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Movie setTranslator(Property\Translator $translator)
 * @method Movie setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Movie setUrl(Property\Url $url)
 * @method Movie setVersion(Property\Version $version)
 * @method Movie setVideo(Property\Video $video)
 * @method Movie setWorkExample(Property\WorkExample $workExample)
 */
class Movie extends CreativeWork {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\CountryOfOrigin
	 */
	private $countryOfOrigin;

	/**
	 * @var Property\Director
	 */
	private $director;

	/**
	 * @var Property\Duration
	 */
	private $duration;

	/**
	 * @var Property\MusicBy
	 */
	private $musicBy;

	/**
	 * @var Property\ProductionCompany
	 */
	private $productionCompany;

	/**
	 * @var Property\SubtitleLanguage
	 */
	private $subtitleLanguage;

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
	 * Get country of origin.
	 * 
	 * @return Property\CountryOfOrigin
	 */
	public function getCountryOfOrigin() {
		return $this->countryOfOrigin;
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
	 * Get duration.
	 * 
	 * @return Property\Duration
	 */
	public function getDuration() {
		return $this->duration;
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
		return 'https://schema.org/Movie';
	}

	/**
	 * Get subtitle language.
	 * 
	 * @return Property\SubtitleLanguage
	 */
	public function getSubtitleLanguage() {
		return $this->subtitleLanguage;
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
	 * @return Movie
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set country of origin.
	 * 
	 * @param Property\CountryOfOrigin $countryOfOrigin
	 * @return Movie
	 */
	public function setCountryOfOrigin(Property\CountryOfOrigin $countryOfOrigin) {
		$this->countryOfOrigin = $countryOfOrigin;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return Movie
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set duration.
	 * 
	 * @param Property\Duration $duration
	 * @return Movie
	 */
	public function setDuration(Property\Duration $duration) {
		$this->duration = $duration;

		return $this;
	}

	/**
	 * Set music by.
	 * 
	 * @param Property\MusicBy $musicBy
	 * @return Movie
	 */
	public function setMusicBy(Property\MusicBy $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set production company.
	 * 
	 * @param Property\ProductionCompany $productionCompany
	 * @return Movie
	 */
	public function setProductionCompany(Property\ProductionCompany $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set subtitle language.
	 * 
	 * @param Property\SubtitleLanguage $subtitleLanguage
	 * @return Movie
	 */
	public function setSubtitleLanguage(Property\SubtitleLanguage $subtitleLanguage) {
		$this->subtitleLanguage = $subtitleLanguage;

		return $this;
	}

	/**
	 * Set trailer.
	 * 
	 * @param Property\Trailer $trailer
	 * @return Movie
	 */
	public function setTrailer(Property\Trailer $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}