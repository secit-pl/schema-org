<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A media object, such as an image, video, audio, or text object embedded in a web page or a downloadable dataset i.e. DataDownload. Note that a creative work may have many media objects associated with it on the same web page. For example, a page about a single song (MusicRecording) may have a music video (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).
 * 
 * @method MediaObjectType setAbout(Property\AboutProperty $about)
 * @method MediaObjectType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method MediaObjectType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method MediaObjectType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method MediaObjectType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method MediaObjectType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method MediaObjectType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method MediaObjectType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method MediaObjectType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method MediaObjectType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MediaObjectType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MediaObjectType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MediaObjectType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method MediaObjectType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method MediaObjectType setAudience(Property\AudienceProperty $audience)
 * @method MediaObjectType setAudio(Property\AudioProperty $audio)
 * @method MediaObjectType setAuthor(Property\AuthorProperty $author)
 * @method MediaObjectType setAward(Property\AwardProperty $award)
 * @method MediaObjectType setCharacter(Property\CharacterProperty $character)
 * @method MediaObjectType setCitation(Property\CitationProperty $citation)
 * @method MediaObjectType setComment(Property\CommentProperty $comment)
 * @method MediaObjectType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method MediaObjectType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method MediaObjectType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method MediaObjectType setContributor(Property\ContributorProperty $contributor)
 * @method MediaObjectType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method MediaObjectType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method MediaObjectType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method MediaObjectType setCreator(Property\CreatorProperty $creator)
 * @method MediaObjectType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method MediaObjectType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method MediaObjectType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method MediaObjectType setDescription(Property\DescriptionProperty $description)
 * @method MediaObjectType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MediaObjectType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method MediaObjectType setEditor(Property\EditorProperty $editor)
 * @method MediaObjectType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method MediaObjectType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method MediaObjectType setEncoding(Property\EncodingProperty $encoding)
 * @method MediaObjectType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method MediaObjectType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method MediaObjectType setExpires(Property\ExpiresProperty $expires)
 * @method MediaObjectType setFunder(Property\FunderProperty $funder)
 * @method MediaObjectType setGenre(Property\GenreProperty $genre)
 * @method MediaObjectType setHasPart(Property\HasPartProperty $hasPart)
 * @method MediaObjectType setHeadline(Property\HeadlineProperty $headline)
 * @method MediaObjectType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MediaObjectType setImage(Property\ImageProperty $image)
 * @method MediaObjectType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method MediaObjectType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method MediaObjectType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method MediaObjectType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MediaObjectType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method MediaObjectType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method MediaObjectType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method MediaObjectType setKeywords(Property\KeywordsProperty $keywords)
 * @method MediaObjectType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method MediaObjectType setLicense(Property\LicenseProperty $license)
 * @method MediaObjectType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method MediaObjectType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method MediaObjectType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MediaObjectType setMaterial(Property\MaterialProperty $material)
 * @method MediaObjectType setMentions(Property\MentionsProperty $mentions)
 * @method MediaObjectType setName(Property\NameProperty $name)
 * @method MediaObjectType setOffers(Property\OffersProperty $offers)
 * @method MediaObjectType setPosition(Property\PositionProperty $position)
 * @method MediaObjectType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MediaObjectType setProducer(Property\ProducerProperty $producer)
 * @method MediaObjectType setPublication(Property\PublicationProperty $publication)
 * @method MediaObjectType setPublisher(Property\PublisherProperty $publisher)
 * @method MediaObjectType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method MediaObjectType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MediaObjectType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method MediaObjectType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method MediaObjectType setReview(Property\ReviewProperty $review)
 * @method MediaObjectType setSameAs(Property\SameAsProperty $sameAs)
 * @method MediaObjectType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method MediaObjectType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method MediaObjectType setSpatial(Property\SpatialProperty $spatial)
 * @method MediaObjectType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method MediaObjectType setSponsor(Property\SponsorProperty $sponsor)
 * @method MediaObjectType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MediaObjectType setTemporal(Property\TemporalProperty $temporal)
 * @method MediaObjectType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method MediaObjectType setText(Property\TextProperty $text)
 * @method MediaObjectType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method MediaObjectType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method MediaObjectType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method MediaObjectType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method MediaObjectType setTranslator(Property\TranslatorProperty $translator)
 * @method MediaObjectType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method MediaObjectType setUrl(Property\UrlProperty $url)
 * @method MediaObjectType setVersion(Property\VersionProperty $version)
 * @method MediaObjectType setVideo(Property\VideoProperty $video)
 * @method MediaObjectType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method MediaObjectType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class MediaObjectType extends CreativeWorkType {

	/**
	 * @var Property\AssociatedArticleProperty
	 */
	private $associatedArticle;

	/**
	 * @var Property\BitrateProperty
	 */
	private $bitrate;

	/**
	 * @var Property\ContentSizeProperty
	 */
	private $contentSize;

	/**
	 * @var Property\ContentUrlProperty
	 */
	private $contentUrl;

	/**
	 * @var Property\DurationProperty
	 */
	private $duration;

	/**
	 * @var Property\EmbedUrlProperty
	 */
	private $embedUrl;

	/**
	 * @var Property\EncodesCreativeWorkProperty
	 */
	private $encodesCreativeWork;

	/**
	 * @var Property\EncodingFormatProperty
	 */
	private $encodingFormat;

	/**
	 * @var Property\EndTimeProperty
	 */
	private $endTime;

	/**
	 * @var Property\HeightProperty
	 */
	private $height;

	/**
	 * @var Property\PlayerTypeProperty
	 */
	private $playerType;

	/**
	 * @var Property\ProductionCompanyProperty
	 */
	private $productionCompany;

	/**
	 * @var Property\RegionsAllowedProperty
	 */
	private $regionsAllowed;

	/**
	 * @var Property\RequiresSubscriptionProperty
	 */
	private $requiresSubscription;

	/**
	 * @var Property\StartTimeProperty
	 */
	private $startTime;

	/**
	 * @var Property\UploadDateProperty
	 */
	private $uploadDate;

	/**
	 * @var Property\WidthProperty
	 */
	private $width;

	/**
	 * Get associated article.
	 *
	 * @return Property\AssociatedArticleProperty
	 */
	public function getAssociatedArticle() {
		return $this->associatedArticle;
	}

	/**
	 * Get bitrate.
	 *
	 * @return Property\BitrateProperty
	 */
	public function getBitrate() {
		return $this->bitrate;
	}

	/**
	 * Get content size.
	 *
	 * @return Property\ContentSizeProperty
	 */
	public function getContentSize() {
		return $this->contentSize;
	}

	/**
	 * Get content url.
	 *
	 * @return Property\ContentUrlProperty
	 */
	public function getContentUrl() {
		return $this->contentUrl;
	}

	/**
	 * Get duration.
	 *
	 * @return Property\DurationProperty
	 */
	public function getDuration() {
		return $this->duration;
	}

	/**
	 * Get embed url.
	 *
	 * @return Property\EmbedUrlProperty
	 */
	public function getEmbedUrl() {
		return $this->embedUrl;
	}

	/**
	 * Get encodes creative work.
	 *
	 * @return Property\EncodesCreativeWorkProperty
	 */
	public function getEncodesCreativeWork() {
		return $this->encodesCreativeWork;
	}

	/**
	 * Get encoding format.
	 *
	 * @return Property\EncodingFormatProperty
	 */
	public function getEncodingFormat() {
		return $this->encodingFormat;
	}

	/**
	 * Get end time.
	 *
	 * @return Property\EndTimeProperty
	 */
	public function getEndTime() {
		return $this->endTime;
	}

	/**
	 * Get height.
	 *
	 * @return Property\HeightProperty
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Get player type.
	 *
	 * @return Property\PlayerTypeProperty
	 */
	public function getPlayerType() {
		return $this->playerType;
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
	 * Get regions allowed.
	 *
	 * @return Property\RegionsAllowedProperty
	 */
	public function getRegionsAllowed() {
		return $this->regionsAllowed;
	}

	/**
	 * Get requires subscription.
	 *
	 * @return Property\RequiresSubscriptionProperty
	 */
	public function getRequiresSubscription() {
		return $this->requiresSubscription;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MediaObject';
	}

	/**
	 * Get start time.
	 *
	 * @return Property\StartTimeProperty
	 */
	public function getStartTime() {
		return $this->startTime;
	}

	/**
	 * Get upload date.
	 *
	 * @return Property\UploadDateProperty
	 */
	public function getUploadDate() {
		return $this->uploadDate;
	}

	/**
	 * Get width.
	 *
	 * @return Property\WidthProperty
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Set associated article.
	 *
	 * @param Property\AssociatedArticleProperty $associatedArticle
	 * @return MediaObjectType
	 */
	public function setAssociatedArticle(Property\AssociatedArticleProperty $associatedArticle) {
		$this->associatedArticle = $associatedArticle;

		return $this;
	}

	/**
	 * Set bitrate.
	 *
	 * @param Property\BitrateProperty $bitrate
	 * @return MediaObjectType
	 */
	public function setBitrate(Property\BitrateProperty $bitrate) {
		$this->bitrate = $bitrate;

		return $this;
	}

	/**
	 * Set content size.
	 *
	 * @param Property\ContentSizeProperty $contentSize
	 * @return MediaObjectType
	 */
	public function setContentSize(Property\ContentSizeProperty $contentSize) {
		$this->contentSize = $contentSize;

		return $this;
	}

	/**
	 * Set content url.
	 *
	 * @param Property\ContentUrlProperty $contentUrl
	 * @return MediaObjectType
	 */
	public function setContentUrl(Property\ContentUrlProperty $contentUrl) {
		$this->contentUrl = $contentUrl;

		return $this;
	}

	/**
	 * Set duration.
	 *
	 * @param Property\DurationProperty $duration
	 * @return MediaObjectType
	 */
	public function setDuration(Property\DurationProperty $duration) {
		$this->duration = $duration;

		return $this;
	}

	/**
	 * Set embed url.
	 *
	 * @param Property\EmbedUrlProperty $embedUrl
	 * @return MediaObjectType
	 */
	public function setEmbedUrl(Property\EmbedUrlProperty $embedUrl) {
		$this->embedUrl = $embedUrl;

		return $this;
	}

	/**
	 * Set encodes creative work.
	 *
	 * @param Property\EncodesCreativeWorkProperty $encodesCreativeWork
	 * @return MediaObjectType
	 */
	public function setEncodesCreativeWork(Property\EncodesCreativeWorkProperty $encodesCreativeWork) {
		$this->encodesCreativeWork = $encodesCreativeWork;

		return $this;
	}

	/**
	 * Set encoding format.
	 *
	 * @param Property\EncodingFormatProperty $encodingFormat
	 * @return MediaObjectType
	 */
	public function setEncodingFormat(Property\EncodingFormatProperty $encodingFormat) {
		$this->encodingFormat = $encodingFormat;

		return $this;
	}

	/**
	 * Set end time.
	 *
	 * @param Property\EndTimeProperty $endTime
	 * @return MediaObjectType
	 */
	public function setEndTime(Property\EndTimeProperty $endTime) {
		$this->endTime = $endTime;

		return $this;
	}

	/**
	 * Set height.
	 *
	 * @param Property\HeightProperty $height
	 * @return MediaObjectType
	 */
	public function setHeight(Property\HeightProperty $height) {
		$this->height = $height;

		return $this;
	}

	/**
	 * Set player type.
	 *
	 * @param Property\PlayerTypeProperty $playerType
	 * @return MediaObjectType
	 */
	public function setPlayerType(Property\PlayerTypeProperty $playerType) {
		$this->playerType = $playerType;

		return $this;
	}

	/**
	 * Set production company.
	 *
	 * @param Property\ProductionCompanyProperty $productionCompany
	 * @return MediaObjectType
	 */
	public function setProductionCompany(Property\ProductionCompanyProperty $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set regions allowed.
	 *
	 * @param Property\RegionsAllowedProperty $regionsAllowed
	 * @return MediaObjectType
	 */
	public function setRegionsAllowed(Property\RegionsAllowedProperty $regionsAllowed) {
		$this->regionsAllowed = $regionsAllowed;

		return $this;
	}

	/**
	 * Set requires subscription.
	 *
	 * @param Property\RequiresSubscriptionProperty $requiresSubscription
	 * @return MediaObjectType
	 */
	public function setRequiresSubscription(Property\RequiresSubscriptionProperty $requiresSubscription) {
		$this->requiresSubscription = $requiresSubscription;

		return $this;
	}

	/**
	 * Set start time.
	 *
	 * @param Property\StartTimeProperty $startTime
	 * @return MediaObjectType
	 */
	public function setStartTime(Property\StartTimeProperty $startTime) {
		$this->startTime = $startTime;

		return $this;
	}

	/**
	 * Set upload date.
	 *
	 * @param Property\UploadDateProperty $uploadDate
	 * @return MediaObjectType
	 */
	public function setUploadDate(Property\UploadDateProperty $uploadDate) {
		$this->uploadDate = $uploadDate;

		return $this;
	}

	/**
	 * Set width.
	 *
	 * @param Property\WidthProperty $width
	 * @return MediaObjectType
	 */
	public function setWidth(Property\WidthProperty $width) {
		$this->width = $width;

		return $this;
	}
}