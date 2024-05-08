<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A book.
 * 
 * @method BookType setAbout(Property\AboutProperty $about)
 * @method BookType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method BookType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method BookType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method BookType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method BookType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method BookType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method BookType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method BookType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method BookType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BookType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BookType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BookType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method BookType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method BookType setAudience(Property\AudienceProperty $audience)
 * @method BookType setAudio(Property\AudioProperty $audio)
 * @method BookType setAuthor(Property\AuthorProperty $author)
 * @method BookType setAward(Property\AwardProperty $award)
 * @method BookType setCharacter(Property\CharacterProperty $character)
 * @method BookType setCitation(Property\CitationProperty $citation)
 * @method BookType setComment(Property\CommentProperty $comment)
 * @method BookType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method BookType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method BookType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method BookType setContributor(Property\ContributorProperty $contributor)
 * @method BookType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method BookType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method BookType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method BookType setCreator(Property\CreatorProperty $creator)
 * @method BookType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method BookType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method BookType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method BookType setDescription(Property\DescriptionProperty $description)
 * @method BookType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BookType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method BookType setEditor(Property\EditorProperty $editor)
 * @method BookType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method BookType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method BookType setEncoding(Property\EncodingProperty $encoding)
 * @method BookType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method BookType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method BookType setExpires(Property\ExpiresProperty $expires)
 * @method BookType setFunder(Property\FunderProperty $funder)
 * @method BookType setGenre(Property\GenreProperty $genre)
 * @method BookType setHasPart(Property\HasPartProperty $hasPart)
 * @method BookType setHeadline(Property\HeadlineProperty $headline)
 * @method BookType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BookType setImage(Property\ImageProperty $image)
 * @method BookType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method BookType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method BookType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method BookType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BookType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method BookType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method BookType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method BookType setKeywords(Property\KeywordsProperty $keywords)
 * @method BookType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method BookType setLicense(Property\LicenseProperty $license)
 * @method BookType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method BookType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method BookType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BookType setMaterial(Property\MaterialProperty $material)
 * @method BookType setMentions(Property\MentionsProperty $mentions)
 * @method BookType setName(Property\NameProperty $name)
 * @method BookType setOffers(Property\OffersProperty $offers)
 * @method BookType setPosition(Property\PositionProperty $position)
 * @method BookType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BookType setProducer(Property\ProducerProperty $producer)
 * @method BookType setPublication(Property\PublicationProperty $publication)
 * @method BookType setPublisher(Property\PublisherProperty $publisher)
 * @method BookType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method BookType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method BookType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method BookType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method BookType setReview(Property\ReviewProperty $review)
 * @method BookType setSameAs(Property\SameAsProperty $sameAs)
 * @method BookType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method BookType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method BookType setSpatial(Property\SpatialProperty $spatial)
 * @method BookType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method BookType setSponsor(Property\SponsorProperty $sponsor)
 * @method BookType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BookType setTemporal(Property\TemporalProperty $temporal)
 * @method BookType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method BookType setText(Property\TextProperty $text)
 * @method BookType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method BookType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method BookType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method BookType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method BookType setTranslator(Property\TranslatorProperty $translator)
 * @method BookType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method BookType setUrl(Property\UrlProperty $url)
 * @method BookType setVersion(Property\VersionProperty $version)
 * @method BookType setVideo(Property\VideoProperty $video)
 * @method BookType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method BookType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class BookType extends CreativeWorkType {

	/**
	 * @var Property\AbridgedProperty
	 */
	private $abridged;

	/**
	 * @var Property\BookEditionProperty
	 */
	private $bookEdition;

	/**
	 * @var Property\BookFormatProperty
	 */
	private $bookFormat;

	/**
	 * @var Property\IllustratorProperty
	 */
	private $illustrator;

	/**
	 * @var Property\IsbnProperty
	 */
	private $isbn;

	/**
	 * @var Property\NumberOfPagesProperty
	 */
	private $numberOfPages;

	/**
	 * Get abridged.
	 *
	 * @return Property\AbridgedProperty
	 */
	public function getAbridged() {
		return $this->abridged;
	}

	/**
	 * Get book edition.
	 *
	 * @return Property\BookEditionProperty
	 */
	public function getBookEdition() {
		return $this->bookEdition;
	}

	/**
	 * Get book format.
	 *
	 * @return Property\BookFormatProperty
	 */
	public function getBookFormat() {
		return $this->bookFormat;
	}

	/**
	 * Get illustrator.
	 *
	 * @return Property\IllustratorProperty
	 */
	public function getIllustrator() {
		return $this->illustrator;
	}

	/**
	 * Get isbn.
	 *
	 * @return Property\IsbnProperty
	 */
	public function getIsbn() {
		return $this->isbn;
	}

	/**
	 * Get number of pages.
	 *
	 * @return Property\NumberOfPagesProperty
	 */
	public function getNumberOfPages() {
		return $this->numberOfPages;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Book';
	}

	/**
	 * Set abridged.
	 *
	 * @param Property\AbridgedProperty $abridged
	 * @return BookType
	 */
	public function setAbridged(Property\AbridgedProperty $abridged) {
		$this->abridged = $abridged;

		return $this;
	}

	/**
	 * Set book edition.
	 *
	 * @param Property\BookEditionProperty $bookEdition
	 * @return BookType
	 */
	public function setBookEdition(Property\BookEditionProperty $bookEdition) {
		$this->bookEdition = $bookEdition;

		return $this;
	}

	/**
	 * Set book format.
	 *
	 * @param Property\BookFormatProperty $bookFormat
	 * @return BookType
	 */
	public function setBookFormat(Property\BookFormatProperty $bookFormat) {
		$this->bookFormat = $bookFormat;

		return $this;
	}

	/**
	 * Set illustrator.
	 *
	 * @param Property\IllustratorProperty $illustrator
	 * @return BookType
	 */
	public function setIllustrator(Property\IllustratorProperty $illustrator) {
		$this->illustrator = $illustrator;

		return $this;
	}

	/**
	 * Set isbn.
	 *
	 * @param Property\IsbnProperty $isbn
	 * @return BookType
	 */
	public function setIsbn(Property\IsbnProperty $isbn) {
		$this->isbn = $isbn;

		return $this;
	}

	/**
	 * Set number of pages.
	 *
	 * @param Property\NumberOfPagesProperty $numberOfPages
	 * @return BookType
	 */
	public function setNumberOfPages(Property\NumberOfPagesProperty $numberOfPages) {
		$this->numberOfPages = $numberOfPages;

		return $this;
	}
}