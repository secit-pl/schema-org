<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MediaObject.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\MediaObjectType instead.
 * 
 * @method MediaObject setAccessMode(Property\AccessMode $accessMode)
 * @method MediaObject setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method MediaObject setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method MediaObject setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method MediaObject setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method MediaObject setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method MediaObject setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method MediaObject setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method MediaObject setAdditionalType(Property\AdditionalType $additionalType)
 * @method MediaObject setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MediaObject setAlternateName(Property\AlternateName $alternateName)
 * @method MediaObject setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method MediaObject setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method MediaObject setAudience(Property\Audience $audience)
 * @method MediaObject setAudio(Property\Audio $audio)
 * @method MediaObject setAuthor(Property\Author $author)
 * @method MediaObject setAward(Property\Award $award)
 * @method MediaObject setCharacter(Property\Character $character)
 * @method MediaObject setCitation(Property\Citation $citation)
 * @method MediaObject setComment(Property\Comment $comment)
 * @method MediaObject setCommentCount(Property\CommentCount $commentCount)
 * @method MediaObject setContentLocation(Property\ContentLocation $contentLocation)
 * @method MediaObject setContentRating(Property\ContentRating $contentRating)
 * @method MediaObject setContributor(Property\Contributor $contributor)
 * @method MediaObject setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method MediaObject setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method MediaObject setCreator(Property\Creator $creator)
 * @method MediaObject setDateCreated(Property\DateCreated $dateCreated)
 * @method MediaObject setDateModified(Property\DateModified $dateModified)
 * @method MediaObject setDatePublished(Property\DatePublished $datePublished)
 * @method MediaObject setDescription(Property\Description $description)
 * @method MediaObject setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MediaObject setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method MediaObject setEditor(Property\Editor $editor)
 * @method MediaObject setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method MediaObject setEducationalUse(Property\EducationalUse $educationalUse)
 * @method MediaObject setEncoding(Property\Encoding $encoding)
 * @method MediaObject setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method MediaObject setExpires(Property\Expires $expires)
 * @method MediaObject setFileFormat(Property\FileFormat $fileFormat)
 * @method MediaObject setFunder(Property\Funder $funder)
 * @method MediaObject setGenre(Property\Genre $genre)
 * @method MediaObject setHasPart(Property\HasPart $hasPart)
 * @method MediaObject setHeadline(Property\Headline $headline)
 * @method MediaObject setIdentifier(Property\Identifier $identifier)
 * @method MediaObject setImage(Property\Image $image)
 * @method MediaObject setInLanguage(Property\InLanguage $inLanguage)
 * @method MediaObject setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method MediaObject setInteractivityType(Property\InteractivityType $interactivityType)
 * @method MediaObject setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method MediaObject setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method MediaObject setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method MediaObject setIsPartOf(Property\IsPartOf $isPartOf)
 * @method MediaObject setKeywords(Property\Keywords $keywords)
 * @method MediaObject setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method MediaObject setLicense(Property\License $license)
 * @method MediaObject setLocationCreated(Property\LocationCreated $locationCreated)
 * @method MediaObject setMainEntity(Property\MainEntity $mainEntity)
 * @method MediaObject setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MediaObject setMaterial(Property\Material $material)
 * @method MediaObject setMentions(Property\Mentions $mentions)
 * @method MediaObject setName(Property\Name $name)
 * @method MediaObject setOffers(Property\Offers $offers)
 * @method MediaObject setPosition(Property\Position $position)
 * @method MediaObject setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MediaObject setProducer(Property\Producer $producer)
 * @method MediaObject setProvider(Property\Provider $provider)
 * @method MediaObject setPublication(Property\Publication $publication)
 * @method MediaObject setPublisher(Property\Publisher $publisher)
 * @method MediaObject setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method MediaObject setRecordedAt(Property\RecordedAt $recordedAt)
 * @method MediaObject setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method MediaObject setReview(Property\Review $review)
 * @method MediaObject setSameAs(Property\SameAs $sameAs)
 * @method MediaObject setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method MediaObject setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method MediaObject setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method MediaObject setSponsor(Property\Sponsor $sponsor)
 * @method MediaObject setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method MediaObject setText(Property\Text $text)
 * @method MediaObject setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method MediaObject setTimeRequired(Property\TimeRequired $timeRequired)
 * @method MediaObject setTranslator(Property\Translator $translator)
 * @method MediaObject setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method MediaObject setUrl(Property\Url $url)
 * @method MediaObject setVersion(Property\Version $version)
 * @method MediaObject setVideo(Property\Video $video)
 * @method MediaObject setWorkExample(Property\WorkExample $workExample)
 */
class MediaObject extends CreativeWork {

	/**
	 * @var Property\AssociatedArticle
	 */
	private $associatedArticle;

	/**
	 * @var Property\Bitrate
	 */
	private $bitrate;

	/**
	 * @var Property\ContentSize
	 */
	private $contentSize;

	/**
	 * @var Property\ContentUrl
	 */
	private $contentUrl;

	/**
	 * @var Property\EmbedUrl
	 */
	private $embedUrl;

	/**
	 * @var Property\EncodesCreativeWork
	 */
	private $encodesCreativeWork;

	/**
	 * @var Property\EncodingFormat
	 */
	private $encodingFormat;

	/**
	 * @var Property\Height
	 */
	private $height;

	/**
	 * @var Property\PlayerType
	 */
	private $playerType;

	/**
	 * @var Property\ProductionCompany
	 */
	private $productionCompany;

	/**
	 * @var Property\RegionsAllowed
	 */
	private $regionsAllowed;

	/**
	 * @var Property\RequiresSubscription
	 */
	private $requiresSubscription;

	/**
	 * @var Property\UploadDate
	 */
	private $uploadDate;

	/**
	 * @var Property\Width
	 */
	private $width;

	/**
	 * Get associated article.
	 * 
	 * @return Property\AssociatedArticle
	 */
	public function getAssociatedArticle() {
		return $this->associatedArticle;
	}

	/**
	 * Get bitrate.
	 * 
	 * @return Property\Bitrate
	 */
	public function getBitrate() {
		return $this->bitrate;
	}

	/**
	 * Get content size.
	 * 
	 * @return Property\ContentSize
	 */
	public function getContentSize() {
		return $this->contentSize;
	}

	/**
	 * Get content url.
	 * 
	 * @return Property\ContentUrl
	 */
	public function getContentUrl() {
		return $this->contentUrl;
	}

	/**
	 * Get embed url.
	 * 
	 * @return Property\EmbedUrl
	 */
	public function getEmbedUrl() {
		return $this->embedUrl;
	}

	/**
	 * Get encodes creative work.
	 * 
	 * @return Property\EncodesCreativeWork
	 */
	public function getEncodesCreativeWork() {
		return $this->encodesCreativeWork;
	}

	/**
	 * Get encoding format.
	 * 
	 * @return Property\EncodingFormat
	 */
	public function getEncodingFormat() {
		return $this->encodingFormat;
	}

	/**
	 * Get height.
	 * 
	 * @return Property\Height
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Get player type.
	 * 
	 * @return Property\PlayerType
	 */
	public function getPlayerType() {
		return $this->playerType;
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
	 * Get regions allowed.
	 * 
	 * @return Property\RegionsAllowed
	 */
	public function getRegionsAllowed() {
		return $this->regionsAllowed;
	}

	/**
	 * Get requires subscription.
	 * 
	 * @return Property\RequiresSubscription
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
	 * Get upload date.
	 * 
	 * @return Property\UploadDate
	 */
	public function getUploadDate() {
		return $this->uploadDate;
	}

	/**
	 * Get width.
	 * 
	 * @return Property\Width
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Set associated article.
	 * 
	 * @param Property\AssociatedArticle $associatedArticle
	 * @return MediaObject
	 */
	public function setAssociatedArticle(Property\AssociatedArticle $associatedArticle) {
		$this->associatedArticle = $associatedArticle;

		return $this;
	}

	/**
	 * Set bitrate.
	 * 
	 * @param Property\Bitrate $bitrate
	 * @return MediaObject
	 */
	public function setBitrate(Property\Bitrate $bitrate) {
		$this->bitrate = $bitrate;

		return $this;
	}

	/**
	 * Set content size.
	 * 
	 * @param Property\ContentSize $contentSize
	 * @return MediaObject
	 */
	public function setContentSize(Property\ContentSize $contentSize) {
		$this->contentSize = $contentSize;

		return $this;
	}

	/**
	 * Set content url.
	 * 
	 * @param Property\ContentUrl $contentUrl
	 * @return MediaObject
	 */
	public function setContentUrl(Property\ContentUrl $contentUrl) {
		$this->contentUrl = $contentUrl;

		return $this;
	}

	/**
	 * Set embed url.
	 * 
	 * @param Property\EmbedUrl $embedUrl
	 * @return MediaObject
	 */
	public function setEmbedUrl(Property\EmbedUrl $embedUrl) {
		$this->embedUrl = $embedUrl;

		return $this;
	}

	/**
	 * Set encodes creative work.
	 * 
	 * @param Property\EncodesCreativeWork $encodesCreativeWork
	 * @return MediaObject
	 */
	public function setEncodesCreativeWork(Property\EncodesCreativeWork $encodesCreativeWork) {
		$this->encodesCreativeWork = $encodesCreativeWork;

		return $this;
	}

	/**
	 * Set encoding format.
	 * 
	 * @param Property\EncodingFormat $encodingFormat
	 * @return MediaObject
	 */
	public function setEncodingFormat(Property\EncodingFormat $encodingFormat) {
		$this->encodingFormat = $encodingFormat;

		return $this;
	}

	/**
	 * Set height.
	 * 
	 * @param Property\Height $height
	 * @return MediaObject
	 */
	public function setHeight(Property\Height $height) {
		$this->height = $height;

		return $this;
	}

	/**
	 * Set player type.
	 * 
	 * @param Property\PlayerType $playerType
	 * @return MediaObject
	 */
	public function setPlayerType(Property\PlayerType $playerType) {
		$this->playerType = $playerType;

		return $this;
	}

	/**
	 * Set production company.
	 * 
	 * @param Property\ProductionCompany $productionCompany
	 * @return MediaObject
	 */
	public function setProductionCompany(Property\ProductionCompany $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set regions allowed.
	 * 
	 * @param Property\RegionsAllowed $regionsAllowed
	 * @return MediaObject
	 */
	public function setRegionsAllowed(Property\RegionsAllowed $regionsAllowed) {
		$this->regionsAllowed = $regionsAllowed;

		return $this;
	}

	/**
	 * Set requires subscription.
	 * 
	 * @param Property\RequiresSubscription $requiresSubscription
	 * @return MediaObject
	 */
	public function setRequiresSubscription(Property\RequiresSubscription $requiresSubscription) {
		$this->requiresSubscription = $requiresSubscription;

		return $this;
	}

	/**
	 * Set upload date.
	 * 
	 * @param Property\UploadDate $uploadDate
	 * @return MediaObject
	 */
	public function setUploadDate(Property\UploadDate $uploadDate) {
		$this->uploadDate = $uploadDate;

		return $this;
	}

	/**
	 * Set width.
	 * 
	 * @param Property\Width $width
	 * @return MediaObject
	 */
	public function setWidth(Property\Width $width) {
		$this->width = $width;

		return $this;
	}
}