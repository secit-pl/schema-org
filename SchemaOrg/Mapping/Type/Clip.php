<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Clip.
 * 
 * @method Clip setAbout(Property\About $about)
 * @method Clip setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Clip setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Clip setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Clip setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Clip setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Clip setAdditionalType(Property\AdditionalType $additionalType)
 * @method Clip setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Clip setAlternateName(Property\AlternateName $alternateName)
 * @method Clip setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Clip setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Clip setAudience(Property\Audience $audience)
 * @method Clip setAudio(Property\Audio $audio)
 * @method Clip setAuthor(Property\Author $author)
 * @method Clip setAward(Property\Award $award)
 * @method Clip setCharacter(Property\Character $character)
 * @method Clip setCitation(Property\Citation $citation)
 * @method Clip setComment(Property\Comment $comment)
 * @method Clip setCommentCount(Property\CommentCount $commentCount)
 * @method Clip setContentLocation(Property\ContentLocation $contentLocation)
 * @method Clip setContentRating(Property\ContentRating $contentRating)
 * @method Clip setContributor(Property\Contributor $contributor)
 * @method Clip setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Clip setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Clip setCreator(Property\Creator $creator)
 * @method Clip setDateCreated(Property\DateCreated $dateCreated)
 * @method Clip setDateModified(Property\DateModified $dateModified)
 * @method Clip setDatePublished(Property\DatePublished $datePublished)
 * @method Clip setDescription(Property\Description $description)
 * @method Clip setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Clip setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Clip setEditor(Property\Editor $editor)
 * @method Clip setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Clip setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Clip setEncoding(Property\Encoding $encoding)
 * @method Clip setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Clip setFileFormat(Property\FileFormat $fileFormat)
 * @method Clip setFunder(Property\Funder $funder)
 * @method Clip setGenre(Property\Genre $genre)
 * @method Clip setHasPart(Property\HasPart $hasPart)
 * @method Clip setHeadline(Property\Headline $headline)
 * @method Clip setImage(Property\Image $image)
 * @method Clip setInLanguage(Property\InLanguage $inLanguage)
 * @method Clip setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Clip setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Clip setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Clip setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Clip setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Clip setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Clip setKeywords(Property\Keywords $keywords)
 * @method Clip setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Clip setLicense(Property\License $license)
 * @method Clip setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Clip setMainEntity(Property\MainEntity $mainEntity)
 * @method Clip setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Clip setMentions(Property\Mentions $mentions)
 * @method Clip setName(Property\Name $name)
 * @method Clip setOffers(Property\Offers $offers)
 * @method Clip setPosition(Property\Position $position)
 * @method Clip setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Clip setProducer(Property\Producer $producer)
 * @method Clip setProvider(Property\Provider $provider)
 * @method Clip setPublication(Property\Publication $publication)
 * @method Clip setPublisher(Property\Publisher $publisher)
 * @method Clip setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Clip setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Clip setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Clip setReview(Property\Review $review)
 * @method Clip setSameAs(Property\SameAs $sameAs)
 * @method Clip setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Clip setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Clip setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Clip setSponsor(Property\Sponsor $sponsor)
 * @method Clip setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Clip setText(Property\Text $text)
 * @method Clip setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Clip setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Clip setTranslator(Property\Translator $translator)
 * @method Clip setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Clip setUrl(Property\Url $url)
 * @method Clip setVersion(Property\Version $version)
 * @method Clip setVideo(Property\Video $video)
 * @method Clip setWorkExample(Property\WorkExample $workExample)
 */
class Clip extends CreativeWork {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\ClipNumber
	 */
	private $clipNumber;

	/**
	 * @var Property\Director
	 */
	private $director;

	/**
	 * @var Property\MusicBy
	 */
	private $musicBy;

	/**
	 * @var Property\PartOfEpisode
	 */
	private $partOfEpisode;

	/**
	 * @var Property\PartOfSeason
	 */
	private $partOfSeason;

	/**
	 * @var Property\PartOfSeries
	 */
	private $partOfSeries;

	/**
	 * Get actor.
	 * 
	 * @return Property\Actor
	 */
	public function getActor() {
		return $this->actor;
	}

	/**
	 * Get clip number.
	 * 
	 * @return Property\ClipNumber
	 */
	public function getClipNumber() {
		return $this->clipNumber;
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
	 * Get music by.
	 * 
	 * @return Property\MusicBy
	 */
	public function getMusicBy() {
		return $this->musicBy;
	}

	/**
	 * Get part of episode.
	 * 
	 * @return Property\PartOfEpisode
	 */
	public function getPartOfEpisode() {
		return $this->partOfEpisode;
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
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Clip';
	}

	/**
	 * Set actor.
	 * 
	 * @param Property\Actor $actor
	 * @return Clip
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set clip number.
	 * 
	 * @param Property\ClipNumber $clipNumber
	 * @return Clip
	 */
	public function setClipNumber(Property\ClipNumber $clipNumber) {
		$this->clipNumber = $clipNumber;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return Clip
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set music by.
	 * 
	 * @param Property\MusicBy $musicBy
	 * @return Clip
	 */
	public function setMusicBy(Property\MusicBy $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set part of episode.
	 * 
	 * @param Property\PartOfEpisode $partOfEpisode
	 * @return Clip
	 */
	public function setPartOfEpisode(Property\PartOfEpisode $partOfEpisode) {
		$this->partOfEpisode = $partOfEpisode;

		return $this;
	}

	/**
	 * Set part of season.
	 * 
	 * @param Property\PartOfSeason $partOfSeason
	 * @return Clip
	 */
	public function setPartOfSeason(Property\PartOfSeason $partOfSeason) {
		$this->partOfSeason = $partOfSeason;

		return $this;
	}

	/**
	 * Set part of series.
	 * 
	 * @param Property\PartOfSeries $partOfSeries
	 * @return Clip
	 */
	public function setPartOfSeries(Property\PartOfSeries $partOfSeries) {
		$this->partOfSeries = $partOfSeries;

		return $this;
	}
}