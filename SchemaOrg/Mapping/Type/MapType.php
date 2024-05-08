<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A map.
 * 
 * @method MapType setAbout(Property\AboutProperty $about)
 * @method MapType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method MapType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method MapType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method MapType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method MapType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method MapType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method MapType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method MapType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method MapType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MapType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MapType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MapType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method MapType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method MapType setAudience(Property\AudienceProperty $audience)
 * @method MapType setAudio(Property\AudioProperty $audio)
 * @method MapType setAuthor(Property\AuthorProperty $author)
 * @method MapType setAward(Property\AwardProperty $award)
 * @method MapType setCharacter(Property\CharacterProperty $character)
 * @method MapType setCitation(Property\CitationProperty $citation)
 * @method MapType setComment(Property\CommentProperty $comment)
 * @method MapType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method MapType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method MapType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method MapType setContributor(Property\ContributorProperty $contributor)
 * @method MapType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method MapType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method MapType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method MapType setCreator(Property\CreatorProperty $creator)
 * @method MapType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method MapType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method MapType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method MapType setDescription(Property\DescriptionProperty $description)
 * @method MapType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MapType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method MapType setEditor(Property\EditorProperty $editor)
 * @method MapType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method MapType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method MapType setEncoding(Property\EncodingProperty $encoding)
 * @method MapType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method MapType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method MapType setExpires(Property\ExpiresProperty $expires)
 * @method MapType setFunder(Property\FunderProperty $funder)
 * @method MapType setGenre(Property\GenreProperty $genre)
 * @method MapType setHasPart(Property\HasPartProperty $hasPart)
 * @method MapType setHeadline(Property\HeadlineProperty $headline)
 * @method MapType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MapType setImage(Property\ImageProperty $image)
 * @method MapType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method MapType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method MapType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method MapType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MapType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method MapType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method MapType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method MapType setKeywords(Property\KeywordsProperty $keywords)
 * @method MapType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method MapType setLicense(Property\LicenseProperty $license)
 * @method MapType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method MapType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method MapType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MapType setMaterial(Property\MaterialProperty $material)
 * @method MapType setMentions(Property\MentionsProperty $mentions)
 * @method MapType setName(Property\NameProperty $name)
 * @method MapType setOffers(Property\OffersProperty $offers)
 * @method MapType setPosition(Property\PositionProperty $position)
 * @method MapType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MapType setProducer(Property\ProducerProperty $producer)
 * @method MapType setPublication(Property\PublicationProperty $publication)
 * @method MapType setPublisher(Property\PublisherProperty $publisher)
 * @method MapType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method MapType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MapType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method MapType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method MapType setReview(Property\ReviewProperty $review)
 * @method MapType setSameAs(Property\SameAsProperty $sameAs)
 * @method MapType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method MapType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method MapType setSpatial(Property\SpatialProperty $spatial)
 * @method MapType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method MapType setSponsor(Property\SponsorProperty $sponsor)
 * @method MapType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MapType setTemporal(Property\TemporalProperty $temporal)
 * @method MapType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method MapType setText(Property\TextProperty $text)
 * @method MapType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method MapType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method MapType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method MapType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method MapType setTranslator(Property\TranslatorProperty $translator)
 * @method MapType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method MapType setUrl(Property\UrlProperty $url)
 * @method MapType setVersion(Property\VersionProperty $version)
 * @method MapType setVideo(Property\VideoProperty $video)
 * @method MapType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method MapType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class MapType extends CreativeWorkType {

	/**
	 * @var Property\MapTypeProperty
	 */
	private $mapType;

	/**
	 * Get map type.
	 *
	 * @return Property\MapTypeProperty
	 */
	public function getMapType() {
		return $this->mapType;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Map';
	}

	/**
	 * Set map type.
	 *
	 * @param Property\MapTypeProperty $mapType
	 * @return MapType
	 */
	public function setMapType(Property\MapTypeProperty $mapType) {
		$this->mapType = $mapType;

		return $this;
	}
}