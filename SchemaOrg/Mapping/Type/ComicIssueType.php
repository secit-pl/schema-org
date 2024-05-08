<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Individual comic issues are serially published as part of a larger series. For the sake of consistency, even one-shot issues belong to a series comprised of a single issue. All comic issues can be uniquely identified by: the combination of the name and volume number of the series to which the issue belongs; the issue number; and the variant description of the issue (if any).
 * 
 * @method ComicIssueType setAbout(Property\AboutProperty $about)
 * @method ComicIssueType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method ComicIssueType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method ComicIssueType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method ComicIssueType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method ComicIssueType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method ComicIssueType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method ComicIssueType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method ComicIssueType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method ComicIssueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ComicIssueType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ComicIssueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ComicIssueType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method ComicIssueType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method ComicIssueType setAudience(Property\AudienceProperty $audience)
 * @method ComicIssueType setAudio(Property\AudioProperty $audio)
 * @method ComicIssueType setAuthor(Property\AuthorProperty $author)
 * @method ComicIssueType setAward(Property\AwardProperty $award)
 * @method ComicIssueType setCharacter(Property\CharacterProperty $character)
 * @method ComicIssueType setCitation(Property\CitationProperty $citation)
 * @method ComicIssueType setComment(Property\CommentProperty $comment)
 * @method ComicIssueType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method ComicIssueType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method ComicIssueType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method ComicIssueType setContributor(Property\ContributorProperty $contributor)
 * @method ComicIssueType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method ComicIssueType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method ComicIssueType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method ComicIssueType setCreator(Property\CreatorProperty $creator)
 * @method ComicIssueType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method ComicIssueType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method ComicIssueType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method ComicIssueType setDescription(Property\DescriptionProperty $description)
 * @method ComicIssueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ComicIssueType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method ComicIssueType setEditor(Property\EditorProperty $editor)
 * @method ComicIssueType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method ComicIssueType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method ComicIssueType setEncoding(Property\EncodingProperty $encoding)
 * @method ComicIssueType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method ComicIssueType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method ComicIssueType setExpires(Property\ExpiresProperty $expires)
 * @method ComicIssueType setFunder(Property\FunderProperty $funder)
 * @method ComicIssueType setGenre(Property\GenreProperty $genre)
 * @method ComicIssueType setHasPart(Property\HasPartProperty $hasPart)
 * @method ComicIssueType setHeadline(Property\HeadlineProperty $headline)
 * @method ComicIssueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ComicIssueType setImage(Property\ImageProperty $image)
 * @method ComicIssueType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method ComicIssueType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method ComicIssueType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method ComicIssueType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ComicIssueType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method ComicIssueType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method ComicIssueType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method ComicIssueType setIssueNumber(Property\IssueNumberProperty $issueNumber)
 * @method ComicIssueType setKeywords(Property\KeywordsProperty $keywords)
 * @method ComicIssueType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method ComicIssueType setLicense(Property\LicenseProperty $license)
 * @method ComicIssueType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method ComicIssueType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method ComicIssueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ComicIssueType setMaterial(Property\MaterialProperty $material)
 * @method ComicIssueType setMentions(Property\MentionsProperty $mentions)
 * @method ComicIssueType setName(Property\NameProperty $name)
 * @method ComicIssueType setOffers(Property\OffersProperty $offers)
 * @method ComicIssueType setPageEnd(Property\PageEndProperty $pageEnd)
 * @method ComicIssueType setPageStart(Property\PageStartProperty $pageStart)
 * @method ComicIssueType setPagination(Property\PaginationProperty $pagination)
 * @method ComicIssueType setPosition(Property\PositionProperty $position)
 * @method ComicIssueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ComicIssueType setProducer(Property\ProducerProperty $producer)
 * @method ComicIssueType setPublication(Property\PublicationProperty $publication)
 * @method ComicIssueType setPublisher(Property\PublisherProperty $publisher)
 * @method ComicIssueType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method ComicIssueType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ComicIssueType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method ComicIssueType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method ComicIssueType setReview(Property\ReviewProperty $review)
 * @method ComicIssueType setSameAs(Property\SameAsProperty $sameAs)
 * @method ComicIssueType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method ComicIssueType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method ComicIssueType setSpatial(Property\SpatialProperty $spatial)
 * @method ComicIssueType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method ComicIssueType setSponsor(Property\SponsorProperty $sponsor)
 * @method ComicIssueType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ComicIssueType setTemporal(Property\TemporalProperty $temporal)
 * @method ComicIssueType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method ComicIssueType setText(Property\TextProperty $text)
 * @method ComicIssueType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method ComicIssueType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method ComicIssueType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method ComicIssueType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method ComicIssueType setTranslator(Property\TranslatorProperty $translator)
 * @method ComicIssueType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method ComicIssueType setUrl(Property\UrlProperty $url)
 * @method ComicIssueType setVersion(Property\VersionProperty $version)
 * @method ComicIssueType setVideo(Property\VideoProperty $video)
 * @method ComicIssueType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method ComicIssueType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class ComicIssueType extends PublicationIssueType {

	/**
	 * @var Property\ArtistProperty
	 */
	private $artist;

	/**
	 * @var Property\ColoristProperty
	 */
	private $colorist;

	/**
	 * @var Property\InkerProperty
	 */
	private $inker;

	/**
	 * @var Property\LettererProperty
	 */
	private $letterer;

	/**
	 * @var Property\PencilerProperty
	 */
	private $penciler;

	/**
	 * @var Property\VariantCoverProperty
	 */
	private $variantCover;

	/**
	 * Get artist.
	 *
	 * @return Property\ArtistProperty
	 */
	public function getArtist() {
		return $this->artist;
	}

	/**
	 * Get colorist.
	 *
	 * @return Property\ColoristProperty
	 */
	public function getColorist() {
		return $this->colorist;
	}

	/**
	 * Get inker.
	 *
	 * @return Property\InkerProperty
	 */
	public function getInker() {
		return $this->inker;
	}

	/**
	 * Get letterer.
	 *
	 * @return Property\LettererProperty
	 */
	public function getLetterer() {
		return $this->letterer;
	}

	/**
	 * Get penciler.
	 *
	 * @return Property\PencilerProperty
	 */
	public function getPenciler() {
		return $this->penciler;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComicIssue';
	}

	/**
	 * Get variant cover.
	 *
	 * @return Property\VariantCoverProperty
	 */
	public function getVariantCover() {
		return $this->variantCover;
	}

	/**
	 * Set artist.
	 *
	 * @param Property\ArtistProperty $artist
	 * @return ComicIssueType
	 */
	public function setArtist(Property\ArtistProperty $artist) {
		$this->artist = $artist;

		return $this;
	}

	/**
	 * Set colorist.
	 *
	 * @param Property\ColoristProperty $colorist
	 * @return ComicIssueType
	 */
	public function setColorist(Property\ColoristProperty $colorist) {
		$this->colorist = $colorist;

		return $this;
	}

	/**
	 * Set inker.
	 *
	 * @param Property\InkerProperty $inker
	 * @return ComicIssueType
	 */
	public function setInker(Property\InkerProperty $inker) {
		$this->inker = $inker;

		return $this;
	}

	/**
	 * Set letterer.
	 *
	 * @param Property\LettererProperty $letterer
	 * @return ComicIssueType
	 */
	public function setLetterer(Property\LettererProperty $letterer) {
		$this->letterer = $letterer;

		return $this;
	}

	/**
	 * Set penciler.
	 *
	 * @param Property\PencilerProperty $penciler
	 * @return ComicIssueType
	 */
	public function setPenciler(Property\PencilerProperty $penciler) {
		$this->penciler = $penciler;

		return $this;
	}

	/**
	 * Set variant cover.
	 *
	 * @param Property\VariantCoverProperty $variantCover
	 * @return ComicIssueType
	 */
	public function setVariantCover(Property\VariantCoverProperty $variantCover) {
		$this->variantCover = $variantCover;

		return $this;
	}
}