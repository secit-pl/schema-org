<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicComposition.
 * 
 * @method MusicComposition setAbout(Property\About $about)
 * @method MusicComposition setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method MusicComposition setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method MusicComposition setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method MusicComposition setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method MusicComposition setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method MusicComposition setAdditionalType(Property\AdditionalType $additionalType)
 * @method MusicComposition setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MusicComposition setAlternateName(Property\AlternateName $alternateName)
 * @method MusicComposition setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method MusicComposition setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method MusicComposition setAudience(Property\Audience $audience)
 * @method MusicComposition setAudio(Property\Audio $audio)
 * @method MusicComposition setAuthor(Property\Author $author)
 * @method MusicComposition setAward(Property\Award $award)
 * @method MusicComposition setCharacter(Property\Character $character)
 * @method MusicComposition setCitation(Property\Citation $citation)
 * @method MusicComposition setComment(Property\Comment $comment)
 * @method MusicComposition setCommentCount(Property\CommentCount $commentCount)
 * @method MusicComposition setContentLocation(Property\ContentLocation $contentLocation)
 * @method MusicComposition setContentRating(Property\ContentRating $contentRating)
 * @method MusicComposition setContributor(Property\Contributor $contributor)
 * @method MusicComposition setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method MusicComposition setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method MusicComposition setCreator(Property\Creator $creator)
 * @method MusicComposition setDateCreated(Property\DateCreated $dateCreated)
 * @method MusicComposition setDateModified(Property\DateModified $dateModified)
 * @method MusicComposition setDatePublished(Property\DatePublished $datePublished)
 * @method MusicComposition setDescription(Property\Description $description)
 * @method MusicComposition setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MusicComposition setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method MusicComposition setEditor(Property\Editor $editor)
 * @method MusicComposition setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method MusicComposition setEducationalUse(Property\EducationalUse $educationalUse)
 * @method MusicComposition setEncoding(Property\Encoding $encoding)
 * @method MusicComposition setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method MusicComposition setFileFormat(Property\FileFormat $fileFormat)
 * @method MusicComposition setFunder(Property\Funder $funder)
 * @method MusicComposition setGenre(Property\Genre $genre)
 * @method MusicComposition setHasPart(Property\HasPart $hasPart)
 * @method MusicComposition setHeadline(Property\Headline $headline)
 * @method MusicComposition setImage(Property\Image $image)
 * @method MusicComposition setInLanguage(Property\InLanguage $inLanguage)
 * @method MusicComposition setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method MusicComposition setInteractivityType(Property\InteractivityType $interactivityType)
 * @method MusicComposition setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method MusicComposition setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method MusicComposition setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method MusicComposition setIsPartOf(Property\IsPartOf $isPartOf)
 * @method MusicComposition setKeywords(Property\Keywords $keywords)
 * @method MusicComposition setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method MusicComposition setLicense(Property\License $license)
 * @method MusicComposition setLocationCreated(Property\LocationCreated $locationCreated)
 * @method MusicComposition setMainEntity(Property\MainEntity $mainEntity)
 * @method MusicComposition setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MusicComposition setMentions(Property\Mentions $mentions)
 * @method MusicComposition setName(Property\Name $name)
 * @method MusicComposition setOffers(Property\Offers $offers)
 * @method MusicComposition setPosition(Property\Position $position)
 * @method MusicComposition setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MusicComposition setProducer(Property\Producer $producer)
 * @method MusicComposition setProvider(Property\Provider $provider)
 * @method MusicComposition setPublication(Property\Publication $publication)
 * @method MusicComposition setPublisher(Property\Publisher $publisher)
 * @method MusicComposition setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method MusicComposition setRecordedAt(Property\RecordedAt $recordedAt)
 * @method MusicComposition setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method MusicComposition setReview(Property\Review $review)
 * @method MusicComposition setSameAs(Property\SameAs $sameAs)
 * @method MusicComposition setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method MusicComposition setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method MusicComposition setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method MusicComposition setSponsor(Property\Sponsor $sponsor)
 * @method MusicComposition setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method MusicComposition setText(Property\Text $text)
 * @method MusicComposition setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method MusicComposition setTimeRequired(Property\TimeRequired $timeRequired)
 * @method MusicComposition setTranslator(Property\Translator $translator)
 * @method MusicComposition setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method MusicComposition setUrl(Property\Url $url)
 * @method MusicComposition setVersion(Property\Version $version)
 * @method MusicComposition setVideo(Property\Video $video)
 * @method MusicComposition setWorkExample(Property\WorkExample $workExample)
 */
class MusicComposition extends CreativeWork {

	/**
	 * @var Property\Composer
	 */
	private $composer;

	/**
	 * @var Property\FirstPerformance
	 */
	private $firstPerformance;

	/**
	 * @var Property\IncludedComposition
	 */
	private $includedComposition;

	/**
	 * @var Property\IswcCode
	 */
	private $iswcCode;

	/**
	 * @var Property\Lyricist
	 */
	private $lyricist;

	/**
	 * @var Property\Lyrics
	 */
	private $lyrics;

	/**
	 * @var Property\MusicalKey
	 */
	private $musicalKey;

	/**
	 * @var Property\MusicArrangement
	 */
	private $musicArrangement;

	/**
	 * @var Property\MusicCompositionForm
	 */
	private $musicCompositionForm;

	/**
	 * @var Property\RecordedAs
	 */
	private $recordedAs;

	/**
	 * Get composer.
	 * 
	 * @return Property\Composer
	 */
	public function getComposer() {
		return $this->composer;
	}

	/**
	 * Get first performance.
	 * 
	 * @return Property\FirstPerformance
	 */
	public function getFirstPerformance() {
		return $this->firstPerformance;
	}

	/**
	 * Get included composition.
	 * 
	 * @return Property\IncludedComposition
	 */
	public function getIncludedComposition() {
		return $this->includedComposition;
	}

	/**
	 * Get iswc code.
	 * 
	 * @return Property\IswcCode
	 */
	public function getIswcCode() {
		return $this->iswcCode;
	}

	/**
	 * Get lyricist.
	 * 
	 * @return Property\Lyricist
	 */
	public function getLyricist() {
		return $this->lyricist;
	}

	/**
	 * Get lyrics.
	 * 
	 * @return Property\Lyrics
	 */
	public function getLyrics() {
		return $this->lyrics;
	}

	/**
	 * Get musical key.
	 * 
	 * @return Property\MusicalKey
	 */
	public function getMusicalKey() {
		return $this->musicalKey;
	}

	/**
	 * Get music arrangement.
	 * 
	 * @return Property\MusicArrangement
	 */
	public function getMusicArrangement() {
		return $this->musicArrangement;
	}

	/**
	 * Get music composition form.
	 * 
	 * @return Property\MusicCompositionForm
	 */
	public function getMusicCompositionForm() {
		return $this->musicCompositionForm;
	}

	/**
	 * Get recorded as.
	 * 
	 * @return Property\RecordedAs
	 */
	public function getRecordedAs() {
		return $this->recordedAs;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicComposition';
	}

	/**
	 * Set composer.
	 * 
	 * @param Property\Composer $composer
	 * @return MusicComposition
	 */
	public function setComposer(Property\Composer $composer) {
		$this->composer = $composer;

		return $this;
	}

	/**
	 * Set first performance.
	 * 
	 * @param Property\FirstPerformance $firstPerformance
	 * @return MusicComposition
	 */
	public function setFirstPerformance(Property\FirstPerformance $firstPerformance) {
		$this->firstPerformance = $firstPerformance;

		return $this;
	}

	/**
	 * Set included composition.
	 * 
	 * @param Property\IncludedComposition $includedComposition
	 * @return MusicComposition
	 */
	public function setIncludedComposition(Property\IncludedComposition $includedComposition) {
		$this->includedComposition = $includedComposition;

		return $this;
	}

	/**
	 * Set iswc code.
	 * 
	 * @param Property\IswcCode $iswcCode
	 * @return MusicComposition
	 */
	public function setIswcCode(Property\IswcCode $iswcCode) {
		$this->iswcCode = $iswcCode;

		return $this;
	}

	/**
	 * Set lyricist.
	 * 
	 * @param Property\Lyricist $lyricist
	 * @return MusicComposition
	 */
	public function setLyricist(Property\Lyricist $lyricist) {
		$this->lyricist = $lyricist;

		return $this;
	}

	/**
	 * Set lyrics.
	 * 
	 * @param Property\Lyrics $lyrics
	 * @return MusicComposition
	 */
	public function setLyrics(Property\Lyrics $lyrics) {
		$this->lyrics = $lyrics;

		return $this;
	}

	/**
	 * Set musical key.
	 * 
	 * @param Property\MusicalKey $musicalKey
	 * @return MusicComposition
	 */
	public function setMusicalKey(Property\MusicalKey $musicalKey) {
		$this->musicalKey = $musicalKey;

		return $this;
	}

	/**
	 * Set music arrangement.
	 * 
	 * @param Property\MusicArrangement $musicArrangement
	 * @return MusicComposition
	 */
	public function setMusicArrangement(Property\MusicArrangement $musicArrangement) {
		$this->musicArrangement = $musicArrangement;

		return $this;
	}

	/**
	 * Set music composition form.
	 * 
	 * @param Property\MusicCompositionForm $musicCompositionForm
	 * @return MusicComposition
	 */
	public function setMusicCompositionForm(Property\MusicCompositionForm $musicCompositionForm) {
		$this->musicCompositionForm = $musicCompositionForm;

		return $this;
	}

	/**
	 * Set recorded as.
	 * 
	 * @param Property\RecordedAs $recordedAs
	 * @return MusicComposition
	 */
	public function setRecordedAs(Property\RecordedAs $recordedAs) {
		$this->recordedAs = $recordedAs;

		return $this;
	}
}