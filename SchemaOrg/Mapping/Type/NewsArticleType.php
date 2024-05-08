<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A NewsArticle is an article whose content reports news, or provides background context and supporting materials for understanding the news. A more detailed overview of schema.org News markup is also available.
 * 
 * @method NewsArticleType setAbout(Property\AboutProperty $about)
 * @method NewsArticleType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method NewsArticleType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method NewsArticleType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method NewsArticleType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method NewsArticleType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method NewsArticleType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method NewsArticleType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method NewsArticleType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method NewsArticleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NewsArticleType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method NewsArticleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NewsArticleType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method NewsArticleType setArticleBody(Property\ArticleBodyProperty $articleBody)
 * @method NewsArticleType setArticleSection(Property\ArticleSectionProperty $articleSection)
 * @method NewsArticleType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method NewsArticleType setAudience(Property\AudienceProperty $audience)
 * @method NewsArticleType setAudio(Property\AudioProperty $audio)
 * @method NewsArticleType setAuthor(Property\AuthorProperty $author)
 * @method NewsArticleType setAward(Property\AwardProperty $award)
 * @method NewsArticleType setCharacter(Property\CharacterProperty $character)
 * @method NewsArticleType setCitation(Property\CitationProperty $citation)
 * @method NewsArticleType setComment(Property\CommentProperty $comment)
 * @method NewsArticleType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method NewsArticleType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method NewsArticleType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method NewsArticleType setContributor(Property\ContributorProperty $contributor)
 * @method NewsArticleType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method NewsArticleType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method NewsArticleType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method NewsArticleType setCreator(Property\CreatorProperty $creator)
 * @method NewsArticleType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method NewsArticleType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method NewsArticleType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method NewsArticleType setDescription(Property\DescriptionProperty $description)
 * @method NewsArticleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NewsArticleType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method NewsArticleType setEditor(Property\EditorProperty $editor)
 * @method NewsArticleType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method NewsArticleType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method NewsArticleType setEncoding(Property\EncodingProperty $encoding)
 * @method NewsArticleType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method NewsArticleType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method NewsArticleType setExpires(Property\ExpiresProperty $expires)
 * @method NewsArticleType setFunder(Property\FunderProperty $funder)
 * @method NewsArticleType setGenre(Property\GenreProperty $genre)
 * @method NewsArticleType setHasPart(Property\HasPartProperty $hasPart)
 * @method NewsArticleType setHeadline(Property\HeadlineProperty $headline)
 * @method NewsArticleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NewsArticleType setImage(Property\ImageProperty $image)
 * @method NewsArticleType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method NewsArticleType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method NewsArticleType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method NewsArticleType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method NewsArticleType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method NewsArticleType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method NewsArticleType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method NewsArticleType setKeywords(Property\KeywordsProperty $keywords)
 * @method NewsArticleType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method NewsArticleType setLicense(Property\LicenseProperty $license)
 * @method NewsArticleType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method NewsArticleType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method NewsArticleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NewsArticleType setMaterial(Property\MaterialProperty $material)
 * @method NewsArticleType setMentions(Property\MentionsProperty $mentions)
 * @method NewsArticleType setName(Property\NameProperty $name)
 * @method NewsArticleType setOffers(Property\OffersProperty $offers)
 * @method NewsArticleType setPageEnd(Property\PageEndProperty $pageEnd)
 * @method NewsArticleType setPageStart(Property\PageStartProperty $pageStart)
 * @method NewsArticleType setPagination(Property\PaginationProperty $pagination)
 * @method NewsArticleType setPosition(Property\PositionProperty $position)
 * @method NewsArticleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NewsArticleType setProducer(Property\ProducerProperty $producer)
 * @method NewsArticleType setPublication(Property\PublicationProperty $publication)
 * @method NewsArticleType setPublisher(Property\PublisherProperty $publisher)
 * @method NewsArticleType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method NewsArticleType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method NewsArticleType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method NewsArticleType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method NewsArticleType setReview(Property\ReviewProperty $review)
 * @method NewsArticleType setSameAs(Property\SameAsProperty $sameAs)
 * @method NewsArticleType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method NewsArticleType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method NewsArticleType setSpatial(Property\SpatialProperty $spatial)
 * @method NewsArticleType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method NewsArticleType setSpeakable(Property\SpeakableProperty $speakable)
 * @method NewsArticleType setSponsor(Property\SponsorProperty $sponsor)
 * @method NewsArticleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NewsArticleType setTemporal(Property\TemporalProperty $temporal)
 * @method NewsArticleType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method NewsArticleType setText(Property\TextProperty $text)
 * @method NewsArticleType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method NewsArticleType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method NewsArticleType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method NewsArticleType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method NewsArticleType setTranslator(Property\TranslatorProperty $translator)
 * @method NewsArticleType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method NewsArticleType setUrl(Property\UrlProperty $url)
 * @method NewsArticleType setVersion(Property\VersionProperty $version)
 * @method NewsArticleType setVideo(Property\VideoProperty $video)
 * @method NewsArticleType setWordCount(Property\WordCountProperty $wordCount)
 * @method NewsArticleType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method NewsArticleType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class NewsArticleType extends ArticleType {

	/**
	 * @var Property\DatelineProperty
	 */
	private $dateline;

	/**
	 * @var Property\PrintColumnProperty
	 */
	private $printColumn;

	/**
	 * @var Property\PrintEditionProperty
	 */
	private $printEdition;

	/**
	 * @var Property\PrintPageProperty
	 */
	private $printPage;

	/**
	 * @var Property\PrintSectionProperty
	 */
	private $printSection;

	/**
	 * Get dateline.
	 *
	 * @return Property\DatelineProperty
	 */
	public function getDateline() {
		return $this->dateline;
	}

	/**
	 * Get print column.
	 *
	 * @return Property\PrintColumnProperty
	 */
	public function getPrintColumn() {
		return $this->printColumn;
	}

	/**
	 * Get print edition.
	 *
	 * @return Property\PrintEditionProperty
	 */
	public function getPrintEdition() {
		return $this->printEdition;
	}

	/**
	 * Get print page.
	 *
	 * @return Property\PrintPageProperty
	 */
	public function getPrintPage() {
		return $this->printPage;
	}

	/**
	 * Get print section.
	 *
	 * @return Property\PrintSectionProperty
	 */
	public function getPrintSection() {
		return $this->printSection;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NewsArticle';
	}

	/**
	 * Set dateline.
	 *
	 * @param Property\DatelineProperty $dateline
	 * @return NewsArticleType
	 */
	public function setDateline(Property\DatelineProperty $dateline) {
		$this->dateline = $dateline;

		return $this;
	}

	/**
	 * Set print column.
	 *
	 * @param Property\PrintColumnProperty $printColumn
	 * @return NewsArticleType
	 */
	public function setPrintColumn(Property\PrintColumnProperty $printColumn) {
		$this->printColumn = $printColumn;

		return $this;
	}

	/**
	 * Set print edition.
	 *
	 * @param Property\PrintEditionProperty $printEdition
	 * @return NewsArticleType
	 */
	public function setPrintEdition(Property\PrintEditionProperty $printEdition) {
		$this->printEdition = $printEdition;

		return $this;
	}

	/**
	 * Set print page.
	 *
	 * @param Property\PrintPageProperty $printPage
	 * @return NewsArticleType
	 */
	public function setPrintPage(Property\PrintPageProperty $printPage) {
		$this->printPage = $printPage;

		return $this;
	}

	/**
	 * Set print section.
	 *
	 * @param Property\PrintSectionProperty $printSection
	 * @return NewsArticleType
	 */
	public function setPrintSection(Property\PrintSectionProperty $printSection) {
		$this->printSection = $printSection;

		return $this;
	}
}