<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types and this is intended to cover them all. See also blog post.
 * 
 * @method ArticleType setAbout(Property\AboutProperty $about)
 * @method ArticleType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method ArticleType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method ArticleType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method ArticleType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method ArticleType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method ArticleType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method ArticleType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method ArticleType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method ArticleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ArticleType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ArticleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ArticleType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method ArticleType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method ArticleType setAudience(Property\AudienceProperty $audience)
 * @method ArticleType setAudio(Property\AudioProperty $audio)
 * @method ArticleType setAuthor(Property\AuthorProperty $author)
 * @method ArticleType setAward(Property\AwardProperty $award)
 * @method ArticleType setCharacter(Property\CharacterProperty $character)
 * @method ArticleType setCitation(Property\CitationProperty $citation)
 * @method ArticleType setComment(Property\CommentProperty $comment)
 * @method ArticleType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method ArticleType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method ArticleType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method ArticleType setContributor(Property\ContributorProperty $contributor)
 * @method ArticleType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method ArticleType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method ArticleType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method ArticleType setCreator(Property\CreatorProperty $creator)
 * @method ArticleType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method ArticleType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method ArticleType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method ArticleType setDescription(Property\DescriptionProperty $description)
 * @method ArticleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ArticleType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method ArticleType setEditor(Property\EditorProperty $editor)
 * @method ArticleType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method ArticleType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method ArticleType setEncoding(Property\EncodingProperty $encoding)
 * @method ArticleType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method ArticleType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method ArticleType setExpires(Property\ExpiresProperty $expires)
 * @method ArticleType setFunder(Property\FunderProperty $funder)
 * @method ArticleType setGenre(Property\GenreProperty $genre)
 * @method ArticleType setHasPart(Property\HasPartProperty $hasPart)
 * @method ArticleType setHeadline(Property\HeadlineProperty $headline)
 * @method ArticleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ArticleType setImage(Property\ImageProperty $image)
 * @method ArticleType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method ArticleType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method ArticleType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method ArticleType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ArticleType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method ArticleType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method ArticleType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method ArticleType setKeywords(Property\KeywordsProperty $keywords)
 * @method ArticleType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method ArticleType setLicense(Property\LicenseProperty $license)
 * @method ArticleType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method ArticleType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method ArticleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ArticleType setMaterial(Property\MaterialProperty $material)
 * @method ArticleType setMentions(Property\MentionsProperty $mentions)
 * @method ArticleType setName(Property\NameProperty $name)
 * @method ArticleType setOffers(Property\OffersProperty $offers)
 * @method ArticleType setPosition(Property\PositionProperty $position)
 * @method ArticleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ArticleType setProducer(Property\ProducerProperty $producer)
 * @method ArticleType setPublication(Property\PublicationProperty $publication)
 * @method ArticleType setPublisher(Property\PublisherProperty $publisher)
 * @method ArticleType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method ArticleType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ArticleType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method ArticleType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method ArticleType setReview(Property\ReviewProperty $review)
 * @method ArticleType setSameAs(Property\SameAsProperty $sameAs)
 * @method ArticleType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method ArticleType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method ArticleType setSpatial(Property\SpatialProperty $spatial)
 * @method ArticleType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method ArticleType setSponsor(Property\SponsorProperty $sponsor)
 * @method ArticleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ArticleType setTemporal(Property\TemporalProperty $temporal)
 * @method ArticleType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method ArticleType setText(Property\TextProperty $text)
 * @method ArticleType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method ArticleType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method ArticleType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method ArticleType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method ArticleType setTranslator(Property\TranslatorProperty $translator)
 * @method ArticleType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method ArticleType setUrl(Property\UrlProperty $url)
 * @method ArticleType setVersion(Property\VersionProperty $version)
 * @method ArticleType setVideo(Property\VideoProperty $video)
 * @method ArticleType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method ArticleType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class ArticleType extends CreativeWorkType {

	/**
	 * @var Property\ArticleBodyProperty
	 */
	private $articleBody;

	/**
	 * @var Property\ArticleSectionProperty
	 */
	private $articleSection;

	/**
	 * @var Property\PageEndProperty
	 */
	private $pageEnd;

	/**
	 * @var Property\PageStartProperty
	 */
	private $pageStart;

	/**
	 * @var Property\PaginationProperty
	 */
	private $pagination;

	/**
	 * @var Property\SpeakableProperty
	 */
	private $speakable;

	/**
	 * @var Property\WordCountProperty
	 */
	private $wordCount;

	/**
	 * Get article body.
	 *
	 * @return Property\ArticleBodyProperty
	 */
	public function getArticleBody() {
		return $this->articleBody;
	}

	/**
	 * Get article section.
	 *
	 * @return Property\ArticleSectionProperty
	 */
	public function getArticleSection() {
		return $this->articleSection;
	}

	/**
	 * Get page end.
	 *
	 * @return Property\PageEndProperty
	 */
	public function getPageEnd() {
		return $this->pageEnd;
	}

	/**
	 * Get page start.
	 *
	 * @return Property\PageStartProperty
	 */
	public function getPageStart() {
		return $this->pageStart;
	}

	/**
	 * Get pagination.
	 *
	 * @return Property\PaginationProperty
	 */
	public function getPagination() {
		return $this->pagination;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Article';
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
	 * Get word count.
	 *
	 * @return Property\WordCountProperty
	 */
	public function getWordCount() {
		return $this->wordCount;
	}

	/**
	 * Set article body.
	 *
	 * @param Property\ArticleBodyProperty $articleBody
	 * @return ArticleType
	 */
	public function setArticleBody(Property\ArticleBodyProperty $articleBody) {
		$this->articleBody = $articleBody;

		return $this;
	}

	/**
	 * Set article section.
	 *
	 * @param Property\ArticleSectionProperty $articleSection
	 * @return ArticleType
	 */
	public function setArticleSection(Property\ArticleSectionProperty $articleSection) {
		$this->articleSection = $articleSection;

		return $this;
	}

	/**
	 * Set page end.
	 *
	 * @param Property\PageEndProperty $pageEnd
	 * @return ArticleType
	 */
	public function setPageEnd(Property\PageEndProperty $pageEnd) {
		$this->pageEnd = $pageEnd;

		return $this;
	}

	/**
	 * Set page start.
	 *
	 * @param Property\PageStartProperty $pageStart
	 * @return ArticleType
	 */
	public function setPageStart(Property\PageStartProperty $pageStart) {
		$this->pageStart = $pageStart;

		return $this;
	}

	/**
	 * Set pagination.
	 *
	 * @param Property\PaginationProperty $pagination
	 * @return ArticleType
	 */
	public function setPagination(Property\PaginationProperty $pagination) {
		$this->pagination = $pagination;

		return $this;
	}

	/**
	 * Set speakable.
	 *
	 * @param Property\SpeakableProperty $speakable
	 * @return ArticleType
	 */
	public function setSpeakable(Property\SpeakableProperty $speakable) {
		$this->speakable = $speakable;

		return $this;
	}

	/**
	 * Set word count.
	 *
	 * @param Property\WordCountProperty $wordCount
	 * @return ArticleType
	 */
	public function setWordCount(Property\WordCountProperty $wordCount) {
		$this->wordCount = $wordCount;

		return $this;
	}
}