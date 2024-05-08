<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A comment on an item - for example, a comment on a blog post. The comment's content is expressed via the text property, and its topic via about, properties shared with all CreativeWorks.
 * 
 * @method CommentType setAbout(Property\AboutProperty $about)
 * @method CommentType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method CommentType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method CommentType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method CommentType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method CommentType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method CommentType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method CommentType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method CommentType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method CommentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CommentType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CommentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CommentType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method CommentType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method CommentType setAudience(Property\AudienceProperty $audience)
 * @method CommentType setAudio(Property\AudioProperty $audio)
 * @method CommentType setAuthor(Property\AuthorProperty $author)
 * @method CommentType setAward(Property\AwardProperty $award)
 * @method CommentType setCharacter(Property\CharacterProperty $character)
 * @method CommentType setCitation(Property\CitationProperty $citation)
 * @method CommentType setComment(Property\CommentProperty $comment)
 * @method CommentType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method CommentType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method CommentType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method CommentType setContributor(Property\ContributorProperty $contributor)
 * @method CommentType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method CommentType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method CommentType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method CommentType setCreator(Property\CreatorProperty $creator)
 * @method CommentType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method CommentType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method CommentType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method CommentType setDescription(Property\DescriptionProperty $description)
 * @method CommentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CommentType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method CommentType setEditor(Property\EditorProperty $editor)
 * @method CommentType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method CommentType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method CommentType setEncoding(Property\EncodingProperty $encoding)
 * @method CommentType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method CommentType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method CommentType setExpires(Property\ExpiresProperty $expires)
 * @method CommentType setFunder(Property\FunderProperty $funder)
 * @method CommentType setGenre(Property\GenreProperty $genre)
 * @method CommentType setHasPart(Property\HasPartProperty $hasPart)
 * @method CommentType setHeadline(Property\HeadlineProperty $headline)
 * @method CommentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CommentType setImage(Property\ImageProperty $image)
 * @method CommentType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method CommentType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method CommentType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method CommentType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CommentType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method CommentType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method CommentType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method CommentType setKeywords(Property\KeywordsProperty $keywords)
 * @method CommentType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method CommentType setLicense(Property\LicenseProperty $license)
 * @method CommentType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method CommentType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method CommentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CommentType setMaterial(Property\MaterialProperty $material)
 * @method CommentType setMentions(Property\MentionsProperty $mentions)
 * @method CommentType setName(Property\NameProperty $name)
 * @method CommentType setOffers(Property\OffersProperty $offers)
 * @method CommentType setPosition(Property\PositionProperty $position)
 * @method CommentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CommentType setProducer(Property\ProducerProperty $producer)
 * @method CommentType setPublication(Property\PublicationProperty $publication)
 * @method CommentType setPublisher(Property\PublisherProperty $publisher)
 * @method CommentType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method CommentType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method CommentType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method CommentType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method CommentType setReview(Property\ReviewProperty $review)
 * @method CommentType setSameAs(Property\SameAsProperty $sameAs)
 * @method CommentType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method CommentType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method CommentType setSpatial(Property\SpatialProperty $spatial)
 * @method CommentType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method CommentType setSponsor(Property\SponsorProperty $sponsor)
 * @method CommentType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CommentType setTemporal(Property\TemporalProperty $temporal)
 * @method CommentType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method CommentType setText(Property\TextProperty $text)
 * @method CommentType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method CommentType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method CommentType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method CommentType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method CommentType setTranslator(Property\TranslatorProperty $translator)
 * @method CommentType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method CommentType setUrl(Property\UrlProperty $url)
 * @method CommentType setVersion(Property\VersionProperty $version)
 * @method CommentType setVideo(Property\VideoProperty $video)
 * @method CommentType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method CommentType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class CommentType extends CreativeWorkType {

	/**
	 * @var Property\DownvoteCountProperty
	 */
	private $downvoteCount;

	/**
	 * @var Property\ParentItemProperty
	 */
	private $parentItem;

	/**
	 * @var Property\SharedContentProperty
	 */
	private $sharedContent;

	/**
	 * @var Property\UpvoteCountProperty
	 */
	private $upvoteCount;

	/**
	 * Get downvote count.
	 *
	 * @return Property\DownvoteCountProperty
	 */
	public function getDownvoteCount() {
		return $this->downvoteCount;
	}

	/**
	 * Get parent item.
	 *
	 * @return Property\ParentItemProperty
	 */
	public function getParentItem() {
		return $this->parentItem;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Comment';
	}

	/**
	 * Get shared content.
	 *
	 * @return Property\SharedContentProperty
	 */
	public function getSharedContent() {
		return $this->sharedContent;
	}

	/**
	 * Get upvote count.
	 *
	 * @return Property\UpvoteCountProperty
	 */
	public function getUpvoteCount() {
		return $this->upvoteCount;
	}

	/**
	 * Set downvote count.
	 *
	 * @param Property\DownvoteCountProperty $downvoteCount
	 * @return CommentType
	 */
	public function setDownvoteCount(Property\DownvoteCountProperty $downvoteCount) {
		$this->downvoteCount = $downvoteCount;

		return $this;
	}

	/**
	 * Set parent item.
	 *
	 * @param Property\ParentItemProperty $parentItem
	 * @return CommentType
	 */
	public function setParentItem(Property\ParentItemProperty $parentItem) {
		$this->parentItem = $parentItem;

		return $this;
	}

	/**
	 * Set shared content.
	 *
	 * @param Property\SharedContentProperty $sharedContent
	 * @return CommentType
	 */
	public function setSharedContent(Property\SharedContentProperty $sharedContent) {
		$this->sharedContent = $sharedContent;

		return $this;
	}

	/**
	 * Set upvote count.
	 *
	 * @param Property\UpvoteCountProperty $upvoteCount
	 * @return CommentType
	 */
	public function setUpvoteCount(Property\UpvoteCountProperty $upvoteCount) {
		$this->upvoteCount = $upvoteCount;

		return $this;
	}
}