<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A QAPage is a WebPage focussed on a specific Question and its Answer(s), e.g. in a question answering site or documenting Frequently Asked Questions (FAQs).
 * 
 * @method QAPageType setAbout(Property\AboutProperty $about)
 * @method QAPageType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method QAPageType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method QAPageType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method QAPageType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method QAPageType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method QAPageType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method QAPageType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method QAPageType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method QAPageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method QAPageType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method QAPageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method QAPageType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method QAPageType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method QAPageType setAudience(Property\AudienceProperty $audience)
 * @method QAPageType setAudio(Property\AudioProperty $audio)
 * @method QAPageType setAuthor(Property\AuthorProperty $author)
 * @method QAPageType setAward(Property\AwardProperty $award)
 * @method QAPageType setBreadcrumb(Property\BreadcrumbProperty $breadcrumb)
 * @method QAPageType setCharacter(Property\CharacterProperty $character)
 * @method QAPageType setCitation(Property\CitationProperty $citation)
 * @method QAPageType setComment(Property\CommentProperty $comment)
 * @method QAPageType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method QAPageType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method QAPageType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method QAPageType setContributor(Property\ContributorProperty $contributor)
 * @method QAPageType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method QAPageType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method QAPageType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method QAPageType setCreator(Property\CreatorProperty $creator)
 * @method QAPageType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method QAPageType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method QAPageType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method QAPageType setDescription(Property\DescriptionProperty $description)
 * @method QAPageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method QAPageType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method QAPageType setEditor(Property\EditorProperty $editor)
 * @method QAPageType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method QAPageType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method QAPageType setEncoding(Property\EncodingProperty $encoding)
 * @method QAPageType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method QAPageType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method QAPageType setExpires(Property\ExpiresProperty $expires)
 * @method QAPageType setFunder(Property\FunderProperty $funder)
 * @method QAPageType setGenre(Property\GenreProperty $genre)
 * @method QAPageType setHasPart(Property\HasPartProperty $hasPart)
 * @method QAPageType setHeadline(Property\HeadlineProperty $headline)
 * @method QAPageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method QAPageType setImage(Property\ImageProperty $image)
 * @method QAPageType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method QAPageType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method QAPageType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method QAPageType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method QAPageType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method QAPageType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method QAPageType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method QAPageType setKeywords(Property\KeywordsProperty $keywords)
 * @method QAPageType setLastReviewed(Property\LastReviewedProperty $lastReviewed)
 * @method QAPageType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method QAPageType setLicense(Property\LicenseProperty $license)
 * @method QAPageType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method QAPageType setMainContentOfPage(Property\MainContentOfPageProperty $mainContentOfPage)
 * @method QAPageType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method QAPageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method QAPageType setMaterial(Property\MaterialProperty $material)
 * @method QAPageType setMentions(Property\MentionsProperty $mentions)
 * @method QAPageType setName(Property\NameProperty $name)
 * @method QAPageType setOffers(Property\OffersProperty $offers)
 * @method QAPageType setPosition(Property\PositionProperty $position)
 * @method QAPageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method QAPageType setPrimaryImageOfPage(Property\PrimaryImageOfPageProperty $primaryImageOfPage)
 * @method QAPageType setProducer(Property\ProducerProperty $producer)
 * @method QAPageType setPublication(Property\PublicationProperty $publication)
 * @method QAPageType setPublisher(Property\PublisherProperty $publisher)
 * @method QAPageType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method QAPageType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method QAPageType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method QAPageType setRelatedLink(Property\RelatedLinkProperty $relatedLink)
 * @method QAPageType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method QAPageType setReview(Property\ReviewProperty $review)
 * @method QAPageType setReviewedBy(Property\ReviewedByProperty $reviewedBy)
 * @method QAPageType setSameAs(Property\SameAsProperty $sameAs)
 * @method QAPageType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method QAPageType setSignificantLink(Property\SignificantLinkProperty $significantLink)
 * @method QAPageType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method QAPageType setSpatial(Property\SpatialProperty $spatial)
 * @method QAPageType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method QAPageType setSpeakable(Property\SpeakableProperty $speakable)
 * @method QAPageType setSpecialty(Property\SpecialtyProperty $specialty)
 * @method QAPageType setSponsor(Property\SponsorProperty $sponsor)
 * @method QAPageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method QAPageType setTemporal(Property\TemporalProperty $temporal)
 * @method QAPageType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method QAPageType setText(Property\TextProperty $text)
 * @method QAPageType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method QAPageType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method QAPageType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method QAPageType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method QAPageType setTranslator(Property\TranslatorProperty $translator)
 * @method QAPageType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method QAPageType setUrl(Property\UrlProperty $url)
 * @method QAPageType setVersion(Property\VersionProperty $version)
 * @method QAPageType setVideo(Property\VideoProperty $video)
 * @method QAPageType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method QAPageType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class QAPageType extends WebPageType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/QAPage';
	}
}