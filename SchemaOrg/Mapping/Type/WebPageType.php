<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A web page. Every web page is implicitly assumed to be declared to be of type WebPage, so the various properties about that webpage, such as breadcrumb may be used. We recommend explicit declaration if these properties are specified, but if they are found outside of an itemscope, they will be assumed to be about the page.
 * 
 * @method WebPageType setAbout(Property\AboutProperty $about)
 * @method WebPageType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method WebPageType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method WebPageType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method WebPageType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method WebPageType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method WebPageType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method WebPageType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method WebPageType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method WebPageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WebPageType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method WebPageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WebPageType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method WebPageType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method WebPageType setAudience(Property\AudienceProperty $audience)
 * @method WebPageType setAudio(Property\AudioProperty $audio)
 * @method WebPageType setAuthor(Property\AuthorProperty $author)
 * @method WebPageType setAward(Property\AwardProperty $award)
 * @method WebPageType setCharacter(Property\CharacterProperty $character)
 * @method WebPageType setCitation(Property\CitationProperty $citation)
 * @method WebPageType setComment(Property\CommentProperty $comment)
 * @method WebPageType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method WebPageType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method WebPageType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method WebPageType setContributor(Property\ContributorProperty $contributor)
 * @method WebPageType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method WebPageType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method WebPageType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method WebPageType setCreator(Property\CreatorProperty $creator)
 * @method WebPageType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method WebPageType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method WebPageType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method WebPageType setDescription(Property\DescriptionProperty $description)
 * @method WebPageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WebPageType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method WebPageType setEditor(Property\EditorProperty $editor)
 * @method WebPageType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method WebPageType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method WebPageType setEncoding(Property\EncodingProperty $encoding)
 * @method WebPageType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method WebPageType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method WebPageType setExpires(Property\ExpiresProperty $expires)
 * @method WebPageType setFunder(Property\FunderProperty $funder)
 * @method WebPageType setGenre(Property\GenreProperty $genre)
 * @method WebPageType setHasPart(Property\HasPartProperty $hasPart)
 * @method WebPageType setHeadline(Property\HeadlineProperty $headline)
 * @method WebPageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WebPageType setImage(Property\ImageProperty $image)
 * @method WebPageType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method WebPageType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method WebPageType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method WebPageType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method WebPageType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method WebPageType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method WebPageType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method WebPageType setKeywords(Property\KeywordsProperty $keywords)
 * @method WebPageType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method WebPageType setLicense(Property\LicenseProperty $license)
 * @method WebPageType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method WebPageType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method WebPageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WebPageType setMaterial(Property\MaterialProperty $material)
 * @method WebPageType setMentions(Property\MentionsProperty $mentions)
 * @method WebPageType setName(Property\NameProperty $name)
 * @method WebPageType setOffers(Property\OffersProperty $offers)
 * @method WebPageType setPosition(Property\PositionProperty $position)
 * @method WebPageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WebPageType setProducer(Property\ProducerProperty $producer)
 * @method WebPageType setPublication(Property\PublicationProperty $publication)
 * @method WebPageType setPublisher(Property\PublisherProperty $publisher)
 * @method WebPageType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method WebPageType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method WebPageType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method WebPageType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method WebPageType setReview(Property\ReviewProperty $review)
 * @method WebPageType setSameAs(Property\SameAsProperty $sameAs)
 * @method WebPageType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method WebPageType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method WebPageType setSpatial(Property\SpatialProperty $spatial)
 * @method WebPageType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method WebPageType setSponsor(Property\SponsorProperty $sponsor)
 * @method WebPageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WebPageType setTemporal(Property\TemporalProperty $temporal)
 * @method WebPageType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method WebPageType setText(Property\TextProperty $text)
 * @method WebPageType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method WebPageType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method WebPageType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method WebPageType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method WebPageType setTranslator(Property\TranslatorProperty $translator)
 * @method WebPageType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method WebPageType setUrl(Property\UrlProperty $url)
 * @method WebPageType setVersion(Property\VersionProperty $version)
 * @method WebPageType setVideo(Property\VideoProperty $video)
 * @method WebPageType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method WebPageType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class WebPageType extends CreativeWorkType {

	/**
	 * @var Property\BreadcrumbProperty
	 */
	private $breadcrumb;

	/**
	 * @var Property\LastReviewedProperty
	 */
	private $lastReviewed;

	/**
	 * @var Property\MainContentOfPageProperty
	 */
	private $mainContentOfPage;

	/**
	 * @var Property\PrimaryImageOfPageProperty
	 */
	private $primaryImageOfPage;

	/**
	 * @var Property\RelatedLinkProperty
	 */
	private $relatedLink;

	/**
	 * @var Property\ReviewedByProperty
	 */
	private $reviewedBy;

	/**
	 * @var Property\SignificantLinkProperty
	 */
	private $significantLink;

	/**
	 * @var Property\SpeakableProperty
	 */
	private $speakable;

	/**
	 * @var Property\SpecialtyProperty
	 */
	private $specialty;

	/**
	 * Get breadcrumb.
	 *
	 * @return Property\BreadcrumbProperty
	 */
	public function getBreadcrumb() {
		return $this->breadcrumb;
	}

	/**
	 * Get last reviewed.
	 *
	 * @return Property\LastReviewedProperty
	 */
	public function getLastReviewed() {
		return $this->lastReviewed;
	}

	/**
	 * Get main content of page.
	 *
	 * @return Property\MainContentOfPageProperty
	 */
	public function getMainContentOfPage() {
		return $this->mainContentOfPage;
	}

	/**
	 * Get primary image of page.
	 *
	 * @return Property\PrimaryImageOfPageProperty
	 */
	public function getPrimaryImageOfPage() {
		return $this->primaryImageOfPage;
	}

	/**
	 * Get related link.
	 *
	 * @return Property\RelatedLinkProperty
	 */
	public function getRelatedLink() {
		return $this->relatedLink;
	}

	/**
	 * Get reviewed by.
	 *
	 * @return Property\ReviewedByProperty
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
	 * @return Property\SignificantLinkProperty
	 */
	public function getSignificantLink() {
		return $this->significantLink;
	}

	/**
	 * Get speakable.
	 *
	 * @return Property\SpeakableProperty
	 */
	public function getSpeakable() {
		return $this->speakable;
	}

	/**
	 * Get specialty.
	 *
	 * @return Property\SpecialtyProperty
	 */
	public function getSpecialty() {
		return $this->specialty;
	}

	/**
	 * Set breadcrumb.
	 *
	 * @param Property\BreadcrumbProperty $breadcrumb
	 * @return WebPageType
	 */
	public function setBreadcrumb(Property\BreadcrumbProperty $breadcrumb) {
		$this->breadcrumb = $breadcrumb;

		return $this;
	}

	/**
	 * Set last reviewed.
	 *
	 * @param Property\LastReviewedProperty $lastReviewed
	 * @return WebPageType
	 */
	public function setLastReviewed(Property\LastReviewedProperty $lastReviewed) {
		$this->lastReviewed = $lastReviewed;

		return $this;
	}

	/**
	 * Set main content of page.
	 *
	 * @param Property\MainContentOfPageProperty $mainContentOfPage
	 * @return WebPageType
	 */
	public function setMainContentOfPage(Property\MainContentOfPageProperty $mainContentOfPage) {
		$this->mainContentOfPage = $mainContentOfPage;

		return $this;
	}

	/**
	 * Set primary image of page.
	 *
	 * @param Property\PrimaryImageOfPageProperty $primaryImageOfPage
	 * @return WebPageType
	 */
	public function setPrimaryImageOfPage(Property\PrimaryImageOfPageProperty $primaryImageOfPage) {
		$this->primaryImageOfPage = $primaryImageOfPage;

		return $this;
	}

	/**
	 * Set related link.
	 *
	 * @param Property\RelatedLinkProperty $relatedLink
	 * @return WebPageType
	 */
	public function setRelatedLink(Property\RelatedLinkProperty $relatedLink) {
		$this->relatedLink = $relatedLink;

		return $this;
	}

	/**
	 * Set reviewed by.
	 *
	 * @param Property\ReviewedByProperty $reviewedBy
	 * @return WebPageType
	 */
	public function setReviewedBy(Property\ReviewedByProperty $reviewedBy) {
		$this->reviewedBy = $reviewedBy;

		return $this;
	}

	/**
	 * Set significant link.
	 *
	 * @param Property\SignificantLinkProperty $significantLink
	 * @return WebPageType
	 */
	public function setSignificantLink(Property\SignificantLinkProperty $significantLink) {
		$this->significantLink = $significantLink;

		return $this;
	}

	/**
	 * Set speakable.
	 *
	 * @param Property\SpeakableProperty $speakable
	 * @return WebPageType
	 */
	public function setSpeakable(Property\SpeakableProperty $speakable) {
		$this->speakable = $speakable;

		return $this;
	}

	/**
	 * Set specialty.
	 *
	 * @param Property\SpecialtyProperty $specialty
	 * @return WebPageType
	 */
	public function setSpecialty(Property\SpecialtyProperty $specialty) {
		$this->specialty = $specialty;

		return $this;
	}
}