<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * One or more messages between organizations or people on a particular topic. Individual messages can be linked to the conversation with isPartOf or hasPart properties.
 * 
 * @method ConversationType setAbout(Property\AboutProperty $about)
 * @method ConversationType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method ConversationType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method ConversationType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method ConversationType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method ConversationType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method ConversationType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method ConversationType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method ConversationType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method ConversationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ConversationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ConversationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ConversationType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method ConversationType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method ConversationType setAudience(Property\AudienceProperty $audience)
 * @method ConversationType setAudio(Property\AudioProperty $audio)
 * @method ConversationType setAuthor(Property\AuthorProperty $author)
 * @method ConversationType setAward(Property\AwardProperty $award)
 * @method ConversationType setCharacter(Property\CharacterProperty $character)
 * @method ConversationType setCitation(Property\CitationProperty $citation)
 * @method ConversationType setComment(Property\CommentProperty $comment)
 * @method ConversationType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method ConversationType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method ConversationType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method ConversationType setContributor(Property\ContributorProperty $contributor)
 * @method ConversationType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method ConversationType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method ConversationType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method ConversationType setCreator(Property\CreatorProperty $creator)
 * @method ConversationType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method ConversationType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method ConversationType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method ConversationType setDescription(Property\DescriptionProperty $description)
 * @method ConversationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ConversationType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method ConversationType setEditor(Property\EditorProperty $editor)
 * @method ConversationType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method ConversationType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method ConversationType setEncoding(Property\EncodingProperty $encoding)
 * @method ConversationType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method ConversationType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method ConversationType setExpires(Property\ExpiresProperty $expires)
 * @method ConversationType setFunder(Property\FunderProperty $funder)
 * @method ConversationType setGenre(Property\GenreProperty $genre)
 * @method ConversationType setHasPart(Property\HasPartProperty $hasPart)
 * @method ConversationType setHeadline(Property\HeadlineProperty $headline)
 * @method ConversationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ConversationType setImage(Property\ImageProperty $image)
 * @method ConversationType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method ConversationType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method ConversationType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method ConversationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ConversationType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method ConversationType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method ConversationType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method ConversationType setKeywords(Property\KeywordsProperty $keywords)
 * @method ConversationType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method ConversationType setLicense(Property\LicenseProperty $license)
 * @method ConversationType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method ConversationType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method ConversationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ConversationType setMaterial(Property\MaterialProperty $material)
 * @method ConversationType setMentions(Property\MentionsProperty $mentions)
 * @method ConversationType setName(Property\NameProperty $name)
 * @method ConversationType setOffers(Property\OffersProperty $offers)
 * @method ConversationType setPosition(Property\PositionProperty $position)
 * @method ConversationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ConversationType setProducer(Property\ProducerProperty $producer)
 * @method ConversationType setPublication(Property\PublicationProperty $publication)
 * @method ConversationType setPublisher(Property\PublisherProperty $publisher)
 * @method ConversationType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method ConversationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ConversationType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method ConversationType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method ConversationType setReview(Property\ReviewProperty $review)
 * @method ConversationType setSameAs(Property\SameAsProperty $sameAs)
 * @method ConversationType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method ConversationType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method ConversationType setSpatial(Property\SpatialProperty $spatial)
 * @method ConversationType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method ConversationType setSponsor(Property\SponsorProperty $sponsor)
 * @method ConversationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ConversationType setTemporal(Property\TemporalProperty $temporal)
 * @method ConversationType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method ConversationType setText(Property\TextProperty $text)
 * @method ConversationType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method ConversationType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method ConversationType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method ConversationType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method ConversationType setTranslator(Property\TranslatorProperty $translator)
 * @method ConversationType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method ConversationType setUrl(Property\UrlProperty $url)
 * @method ConversationType setVersion(Property\VersionProperty $version)
 * @method ConversationType setVideo(Property\VideoProperty $video)
 * @method ConversationType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method ConversationType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class ConversationType extends CreativeWorkType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Conversation';
	}
}