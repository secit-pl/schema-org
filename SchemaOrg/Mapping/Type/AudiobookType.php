<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An audiobook.
 * 
 * @method AudiobookType setAbout(Property\AboutProperty $about)
 * @method AudiobookType setAbridged(Property\AbridgedProperty $abridged)
 * @method AudiobookType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method AudiobookType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method AudiobookType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method AudiobookType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method AudiobookType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method AudiobookType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method AudiobookType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method AudiobookType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method AudiobookType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AudiobookType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AudiobookType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AudiobookType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method AudiobookType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method AudiobookType setAudience(Property\AudienceProperty $audience)
 * @method AudiobookType setAudio(Property\AudioProperty $audio)
 * @method AudiobookType setAuthor(Property\AuthorProperty $author)
 * @method AudiobookType setAward(Property\AwardProperty $award)
 * @method AudiobookType setBookEdition(Property\BookEditionProperty $bookEdition)
 * @method AudiobookType setBookFormat(Property\BookFormatProperty $bookFormat)
 * @method AudiobookType setCharacter(Property\CharacterProperty $character)
 * @method AudiobookType setCitation(Property\CitationProperty $citation)
 * @method AudiobookType setComment(Property\CommentProperty $comment)
 * @method AudiobookType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method AudiobookType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method AudiobookType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method AudiobookType setContributor(Property\ContributorProperty $contributor)
 * @method AudiobookType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method AudiobookType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method AudiobookType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method AudiobookType setCreator(Property\CreatorProperty $creator)
 * @method AudiobookType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method AudiobookType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method AudiobookType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method AudiobookType setDescription(Property\DescriptionProperty $description)
 * @method AudiobookType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AudiobookType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method AudiobookType setEditor(Property\EditorProperty $editor)
 * @method AudiobookType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method AudiobookType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method AudiobookType setEncoding(Property\EncodingProperty $encoding)
 * @method AudiobookType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method AudiobookType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method AudiobookType setExpires(Property\ExpiresProperty $expires)
 * @method AudiobookType setFunder(Property\FunderProperty $funder)
 * @method AudiobookType setGenre(Property\GenreProperty $genre)
 * @method AudiobookType setHasPart(Property\HasPartProperty $hasPart)
 * @method AudiobookType setHeadline(Property\HeadlineProperty $headline)
 * @method AudiobookType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AudiobookType setIllustrator(Property\IllustratorProperty $illustrator)
 * @method AudiobookType setImage(Property\ImageProperty $image)
 * @method AudiobookType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method AudiobookType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method AudiobookType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method AudiobookType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AudiobookType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method AudiobookType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method AudiobookType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method AudiobookType setIsbn(Property\IsbnProperty $isbn)
 * @method AudiobookType setKeywords(Property\KeywordsProperty $keywords)
 * @method AudiobookType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method AudiobookType setLicense(Property\LicenseProperty $license)
 * @method AudiobookType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method AudiobookType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method AudiobookType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AudiobookType setMaterial(Property\MaterialProperty $material)
 * @method AudiobookType setMentions(Property\MentionsProperty $mentions)
 * @method AudiobookType setName(Property\NameProperty $name)
 * @method AudiobookType setNumberOfPages(Property\NumberOfPagesProperty $numberOfPages)
 * @method AudiobookType setOffers(Property\OffersProperty $offers)
 * @method AudiobookType setPosition(Property\PositionProperty $position)
 * @method AudiobookType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AudiobookType setProducer(Property\ProducerProperty $producer)
 * @method AudiobookType setPublication(Property\PublicationProperty $publication)
 * @method AudiobookType setPublisher(Property\PublisherProperty $publisher)
 * @method AudiobookType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method AudiobookType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AudiobookType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method AudiobookType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method AudiobookType setReview(Property\ReviewProperty $review)
 * @method AudiobookType setSameAs(Property\SameAsProperty $sameAs)
 * @method AudiobookType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method AudiobookType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method AudiobookType setSpatial(Property\SpatialProperty $spatial)
 * @method AudiobookType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method AudiobookType setSponsor(Property\SponsorProperty $sponsor)
 * @method AudiobookType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AudiobookType setTemporal(Property\TemporalProperty $temporal)
 * @method AudiobookType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method AudiobookType setText(Property\TextProperty $text)
 * @method AudiobookType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method AudiobookType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method AudiobookType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method AudiobookType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method AudiobookType setTranslator(Property\TranslatorProperty $translator)
 * @method AudiobookType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method AudiobookType setUrl(Property\UrlProperty $url)
 * @method AudiobookType setVersion(Property\VersionProperty $version)
 * @method AudiobookType setVideo(Property\VideoProperty $video)
 * @method AudiobookType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method AudiobookType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class AudiobookType extends BookType {

	/**
	 * @var Property\DurationProperty
	 */
	private $duration;

	/**
	 * @var Property\ReadByProperty
	 */
	private $readBy;

	/**
	 * Get duration.
	 *
	 * @return Property\DurationProperty
	 */
	public function getDuration() {
		return $this->duration;
	}

	/**
	 * Get read by.
	 *
	 * @return Property\ReadByProperty
	 */
	public function getReadBy() {
		return $this->readBy;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Audiobook';
	}

	/**
	 * Set duration.
	 *
	 * @param Property\DurationProperty $duration
	 * @return AudiobookType
	 */
	public function setDuration(Property\DurationProperty $duration) {
		$this->duration = $duration;

		return $this;
	}

	/**
	 * Set read by.
	 *
	 * @param Property\ReadByProperty $readBy
	 * @return AudiobookType
	 */
	public function setReadBy(Property\ReadByProperty $readBy) {
		$this->readBy = $readBy;

		return $this;
	}
}