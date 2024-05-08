<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A collection of items, e.g. creative works or products.
 * 
 * @method CollectionType setAbout(Property\AboutProperty $about)
 * @method CollectionType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method CollectionType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method CollectionType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method CollectionType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method CollectionType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method CollectionType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method CollectionType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method CollectionType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method CollectionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CollectionType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CollectionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CollectionType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method CollectionType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method CollectionType setAudience(Property\AudienceProperty $audience)
 * @method CollectionType setAudio(Property\AudioProperty $audio)
 * @method CollectionType setAuthor(Property\AuthorProperty $author)
 * @method CollectionType setAward(Property\AwardProperty $award)
 * @method CollectionType setCharacter(Property\CharacterProperty $character)
 * @method CollectionType setCitation(Property\CitationProperty $citation)
 * @method CollectionType setComment(Property\CommentProperty $comment)
 * @method CollectionType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method CollectionType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method CollectionType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method CollectionType setContributor(Property\ContributorProperty $contributor)
 * @method CollectionType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method CollectionType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method CollectionType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method CollectionType setCreator(Property\CreatorProperty $creator)
 * @method CollectionType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method CollectionType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method CollectionType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method CollectionType setDescription(Property\DescriptionProperty $description)
 * @method CollectionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CollectionType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method CollectionType setEditor(Property\EditorProperty $editor)
 * @method CollectionType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method CollectionType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method CollectionType setEncoding(Property\EncodingProperty $encoding)
 * @method CollectionType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method CollectionType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method CollectionType setExpires(Property\ExpiresProperty $expires)
 * @method CollectionType setFunder(Property\FunderProperty $funder)
 * @method CollectionType setGenre(Property\GenreProperty $genre)
 * @method CollectionType setHasPart(Property\HasPartProperty $hasPart)
 * @method CollectionType setHeadline(Property\HeadlineProperty $headline)
 * @method CollectionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CollectionType setImage(Property\ImageProperty $image)
 * @method CollectionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method CollectionType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method CollectionType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method CollectionType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CollectionType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method CollectionType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method CollectionType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method CollectionType setKeywords(Property\KeywordsProperty $keywords)
 * @method CollectionType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method CollectionType setLicense(Property\LicenseProperty $license)
 * @method CollectionType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method CollectionType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method CollectionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CollectionType setMaterial(Property\MaterialProperty $material)
 * @method CollectionType setMentions(Property\MentionsProperty $mentions)
 * @method CollectionType setName(Property\NameProperty $name)
 * @method CollectionType setOffers(Property\OffersProperty $offers)
 * @method CollectionType setPosition(Property\PositionProperty $position)
 * @method CollectionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CollectionType setProducer(Property\ProducerProperty $producer)
 * @method CollectionType setPublication(Property\PublicationProperty $publication)
 * @method CollectionType setPublisher(Property\PublisherProperty $publisher)
 * @method CollectionType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method CollectionType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method CollectionType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method CollectionType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method CollectionType setReview(Property\ReviewProperty $review)
 * @method CollectionType setSameAs(Property\SameAsProperty $sameAs)
 * @method CollectionType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method CollectionType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method CollectionType setSpatial(Property\SpatialProperty $spatial)
 * @method CollectionType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method CollectionType setSponsor(Property\SponsorProperty $sponsor)
 * @method CollectionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CollectionType setTemporal(Property\TemporalProperty $temporal)
 * @method CollectionType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method CollectionType setText(Property\TextProperty $text)
 * @method CollectionType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method CollectionType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method CollectionType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method CollectionType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method CollectionType setTranslator(Property\TranslatorProperty $translator)
 * @method CollectionType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method CollectionType setUrl(Property\UrlProperty $url)
 * @method CollectionType setVersion(Property\VersionProperty $version)
 * @method CollectionType setVideo(Property\VideoProperty $video)
 * @method CollectionType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method CollectionType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class CollectionType extends CreativeWorkType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Collection';
	}
}