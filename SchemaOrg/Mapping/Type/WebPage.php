<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WebPage.
 * 
 * @method WebPage setAbout(Property\About $about)
 * @method WebPage setAccessMode(Property\AccessMode $accessMode)
 * @method WebPage setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method WebPage setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method WebPage setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method WebPage setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method WebPage setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method WebPage setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method WebPage setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method WebPage setAdditionalType(Property\AdditionalType $additionalType)
 * @method WebPage setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method WebPage setAlternateName(Property\AlternateName $alternateName)
 * @method WebPage setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method WebPage setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method WebPage setAudience(Property\Audience $audience)
 * @method WebPage setAudio(Property\Audio $audio)
 * @method WebPage setAuthor(Property\Author $author)
 * @method WebPage setAward(Property\Award $award)
 * @method WebPage setCharacter(Property\Character $character)
 * @method WebPage setCitation(Property\Citation $citation)
 * @method WebPage setComment(Property\Comment $comment)
 * @method WebPage setCommentCount(Property\CommentCount $commentCount)
 * @method WebPage setContentLocation(Property\ContentLocation $contentLocation)
 * @method WebPage setContentRating(Property\ContentRating $contentRating)
 * @method WebPage setContributor(Property\Contributor $contributor)
 * @method WebPage setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method WebPage setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method WebPage setCreator(Property\Creator $creator)
 * @method WebPage setDateCreated(Property\DateCreated $dateCreated)
 * @method WebPage setDateModified(Property\DateModified $dateModified)
 * @method WebPage setDatePublished(Property\DatePublished $datePublished)
 * @method WebPage setDescription(Property\Description $description)
 * @method WebPage setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method WebPage setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method WebPage setEditor(Property\Editor $editor)
 * @method WebPage setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method WebPage setEducationalUse(Property\EducationalUse $educationalUse)
 * @method WebPage setEncoding(Property\Encoding $encoding)
 * @method WebPage setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method WebPage setFileFormat(Property\FileFormat $fileFormat)
 * @method WebPage setFunder(Property\Funder $funder)
 * @method WebPage setGenre(Property\Genre $genre)
 * @method WebPage setHasPart(Property\HasPart $hasPart)
 * @method WebPage setHeadline(Property\Headline $headline)
 * @method WebPage setIdentifier(Property\Identifier $identifier)
 * @method WebPage setImage(Property\Image $image)
 * @method WebPage setInLanguage(Property\InLanguage $inLanguage)
 * @method WebPage setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method WebPage setInteractivityType(Property\InteractivityType $interactivityType)
 * @method WebPage setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method WebPage setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method WebPage setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method WebPage setIsPartOf(Property\IsPartOf $isPartOf)
 * @method WebPage setKeywords(Property\Keywords $keywords)
 * @method WebPage setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method WebPage setLicense(Property\License $license)
 * @method WebPage setLocationCreated(Property\LocationCreated $locationCreated)
 * @method WebPage setMainEntity(Property\MainEntity $mainEntity)
 * @method WebPage setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method WebPage setMaterial(Property\Material $material)
 * @method WebPage setMentions(Property\Mentions $mentions)
 * @method WebPage setName(Property\Name $name)
 * @method WebPage setOffers(Property\Offers $offers)
 * @method WebPage setPosition(Property\Position $position)
 * @method WebPage setPotentialAction(Property\PotentialAction $potentialAction)
 * @method WebPage setProducer(Property\Producer $producer)
 * @method WebPage setProvider(Property\Provider $provider)
 * @method WebPage setPublication(Property\Publication $publication)
 * @method WebPage setPublisher(Property\Publisher $publisher)
 * @method WebPage setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method WebPage setRecordedAt(Property\RecordedAt $recordedAt)
 * @method WebPage setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method WebPage setReview(Property\Review $review)
 * @method WebPage setSameAs(Property\SameAs $sameAs)
 * @method WebPage setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method WebPage setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method WebPage setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method WebPage setSponsor(Property\Sponsor $sponsor)
 * @method WebPage setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method WebPage setText(Property\Text $text)
 * @method WebPage setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method WebPage setTimeRequired(Property\TimeRequired $timeRequired)
 * @method WebPage setTranslator(Property\Translator $translator)
 * @method WebPage setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method WebPage setUrl(Property\Url $url)
 * @method WebPage setVersion(Property\Version $version)
 * @method WebPage setVideo(Property\Video $video)
 * @method WebPage setWorkExample(Property\WorkExample $workExample)
 */
class WebPage extends CreativeWork {

	/**
	 * @var Property\Breadcrumb
	 */
	private $breadcrumb;

	/**
	 * @var Property\LastReviewed
	 */
	private $lastReviewed;

	/**
	 * @var Property\MainContentOfPage
	 */
	private $mainContentOfPage;

	/**
	 * @var Property\PrimaryImageOfPage
	 */
	private $primaryImageOfPage;

	/**
	 * @var Property\RelatedLink
	 */
	private $relatedLink;

	/**
	 * @var Property\ReviewedBy
	 */
	private $reviewedBy;

	/**
	 * @var Property\SignificantLink
	 */
	private $significantLink;

	/**
	 * @var Property\Specialty
	 */
	private $specialty;

	/**
	 * Get breadcrumb.
	 * 
	 * @return Property\Breadcrumb
	 */
	public function getBreadcrumb() {
		return $this->breadcrumb;
	}

	/**
	 * Get last reviewed.
	 * 
	 * @return Property\LastReviewed
	 */
	public function getLastReviewed() {
		return $this->lastReviewed;
	}

	/**
	 * Get main content of page.
	 * 
	 * @return Property\MainContentOfPage
	 */
	public function getMainContentOfPage() {
		return $this->mainContentOfPage;
	}

	/**
	 * Get primary image of page.
	 * 
	 * @return Property\PrimaryImageOfPage
	 */
	public function getPrimaryImageOfPage() {
		return $this->primaryImageOfPage;
	}

	/**
	 * Get related link.
	 * 
	 * @return Property\RelatedLink
	 */
	public function getRelatedLink() {
		return $this->relatedLink;
	}

	/**
	 * Get reviewed by.
	 * 
	 * @return Property\ReviewedBy
	 */
	public function getReviewedBy() {
		return $this->reviewedBy;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WebPage';
	}

	/**
	 * Get significant link.
	 * 
	 * @return Property\SignificantLink
	 */
	public function getSignificantLink() {
		return $this->significantLink;
	}

	/**
	 * Get specialty.
	 * 
	 * @return Property\Specialty
	 */
	public function getSpecialty() {
		return $this->specialty;
	}

	/**
	 * Set breadcrumb.
	 * 
	 * @param Property\Breadcrumb $breadcrumb
	 * @return WebPage
	 */
	public function setBreadcrumb(Property\Breadcrumb $breadcrumb) {
		$this->breadcrumb = $breadcrumb;

		return $this;
	}

	/**
	 * Set last reviewed.
	 * 
	 * @param Property\LastReviewed $lastReviewed
	 * @return WebPage
	 */
	public function setLastReviewed(Property\LastReviewed $lastReviewed) {
		$this->lastReviewed = $lastReviewed;

		return $this;
	}

	/**
	 * Set main content of page.
	 * 
	 * @param Property\MainContentOfPage $mainContentOfPage
	 * @return WebPage
	 */
	public function setMainContentOfPage(Property\MainContentOfPage $mainContentOfPage) {
		$this->mainContentOfPage = $mainContentOfPage;

		return $this;
	}

	/**
	 * Set primary image of page.
	 * 
	 * @param Property\PrimaryImageOfPage $primaryImageOfPage
	 * @return WebPage
	 */
	public function setPrimaryImageOfPage(Property\PrimaryImageOfPage $primaryImageOfPage) {
		$this->primaryImageOfPage = $primaryImageOfPage;

		return $this;
	}

	/**
	 * Set related link.
	 * 
	 * @param Property\RelatedLink $relatedLink
	 * @return WebPage
	 */
	public function setRelatedLink(Property\RelatedLink $relatedLink) {
		$this->relatedLink = $relatedLink;

		return $this;
	}

	/**
	 * Set reviewed by.
	 * 
	 * @param Property\ReviewedBy $reviewedBy
	 * @return WebPage
	 */
	public function setReviewedBy(Property\ReviewedBy $reviewedBy) {
		$this->reviewedBy = $reviewedBy;

		return $this;
	}

	/**
	 * Set significant link.
	 * 
	 * @param Property\SignificantLink $significantLink
	 * @return WebPage
	 */
	public function setSignificantLink(Property\SignificantLink $significantLink) {
		$this->significantLink = $significantLink;

		return $this;
	}

	/**
	 * Set specialty.
	 * 
	 * @param Property\Specialty $specialty
	 * @return WebPage
	 */
	public function setSpecialty(Property\Specialty $specialty) {
		$this->specialty = $specialty;

		return $this;
	}
}