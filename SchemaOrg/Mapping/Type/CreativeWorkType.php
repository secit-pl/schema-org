<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CreativeWorkType.
 * 
 * @method CreativeWorkType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CreativeWorkType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CreativeWorkType setDescription(Property\DescriptionProperty $description)
 * @method CreativeWorkType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CreativeWorkType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CreativeWorkType setImage(Property\ImageProperty $image)
 * @method CreativeWorkType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CreativeWorkType setName(Property\NameProperty $name)
 * @method CreativeWorkType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CreativeWorkType setSameAs(Property\SameAsProperty $sameAs)
 * @method CreativeWorkType setUrl(Property\UrlProperty $url)
 */
class CreativeWorkType extends ThingType {

	/**
	 * @var Property\AccessibilityAPIProperty
	 */
	private $accessibilityAPI;

	/**
	 * @var Property\AccessibilityControlProperty
	 */
	private $accessibilityControl;

	/**
	 * @var Property\AccessibilityFeatureProperty
	 */
	private $accessibilityFeature;

	/**
	 * @var Property\AccessibilityHazardProperty
	 */
	private $accessibilityHazard;

	/**
	 * @var Property\AccessibilitySummaryProperty
	 */
	private $accessibilitySummary;

	/**
	 * @var Property\AccessModeProperty
	 */
	private $accessMode;

	/**
	 * @var Property\AccessModeSufficientProperty
	 */
	private $accessModeSufficient;

	/**
	 * @var Property\AccountablePersonProperty
	 */
	private $accountablePerson;

	/**
	 * @var Property\AggregateRatingProperty
	 */
	private $aggregateRating;

	/**
	 * @var Property\AlternativeHeadlineProperty
	 */
	private $alternativeHeadline;

	/**
	 * @var Property\AssociatedMediaProperty
	 */
	private $associatedMedia;

	/**
	 * @var Property\AudienceProperty
	 */
	private $audience;

	/**
	 * @var Property\AudioProperty
	 */
	private $audio;

	/**
	 * @var Property\AuthorProperty
	 */
	private $author;

	/**
	 * @var Property\AwardProperty
	 */
	private $award;

	/**
	 * @var Property\CharacterProperty
	 */
	private $character;

	/**
	 * @var Property\CitationProperty
	 */
	private $citation;

	/**
	 * @var Property\CommentProperty
	 */
	private $comment;

	/**
	 * @var Property\CommentCountProperty
	 */
	private $commentCount;

	/**
	 * @var Property\ContentLocationProperty
	 */
	private $contentLocation;

	/**
	 * @var Property\ContentRatingProperty
	 */
	private $contentRating;

	/**
	 * @var Property\ContributorProperty
	 */
	private $contributor;

	/**
	 * @var Property\CopyrightHolderProperty
	 */
	private $copyrightHolder;

	/**
	 * @var Property\CopyrightYearProperty
	 */
	private $copyrightYear;

	/**
	 * @var Property\CreatorProperty
	 */
	private $creator;

	/**
	 * @var Property\DateCreatedProperty
	 */
	private $dateCreated;

	/**
	 * @var Property\DateModifiedProperty
	 */
	private $dateModified;

	/**
	 * @var Property\DatePublishedProperty
	 */
	private $datePublished;

	/**
	 * @var Property\DiscussionUrlProperty
	 */
	private $discussionUrl;

	/**
	 * @var Property\EditorProperty
	 */
	private $editor;

	/**
	 * @var Property\EducationalAlignmentProperty
	 */
	private $educationalAlignment;

	/**
	 * @var Property\EducationalUseProperty
	 */
	private $educationalUse;

	/**
	 * @var Property\EncodingProperty
	 */
	private $encoding;

	/**
	 * @var Property\ExampleOfWorkProperty
	 */
	private $exampleOfWork;

	/**
	 * @var Property\ExpiresProperty
	 */
	private $expires;

	/**
	 * @var Property\FileFormatProperty
	 */
	private $fileFormat;

	/**
	 * @var Property\FunderProperty
	 */
	private $funder;

	/**
	 * @var Property\GenreProperty
	 */
	private $genre;

	/**
	 * @var Property\HasPartProperty
	 */
	private $hasPart;

	/**
	 * @var Property\HeadlineProperty
	 */
	private $headline;

	/**
	 * @var Property\InLanguageProperty
	 */
	private $inLanguage;

	/**
	 * @var Property\InteractionStatisticProperty
	 */
	private $interactionStatistic;

	/**
	 * @var Property\InteractivityTypeProperty
	 */
	private $interactivityType;

	/**
	 * @var Property\IsAccessibleForFreeProperty
	 */
	private $isAccessibleForFree;

	/**
	 * @var Property\IsBasedOnProperty
	 */
	private $isBasedOn;

	/**
	 * @var Property\IsFamilyFriendlyProperty
	 */
	private $isFamilyFriendly;

	/**
	 * @var Property\IsPartOfProperty
	 */
	private $isPartOf;

	/**
	 * @var Property\KeywordsProperty
	 */
	private $keywords;

	/**
	 * @var Property\LearningResourceTypeProperty
	 */
	private $learningResourceType;

	/**
	 * @var Property\LicenseProperty
	 */
	private $license;

	/**
	 * @var Property\LocationCreatedProperty
	 */
	private $locationCreated;

	/**
	 * @var Property\MainEntityProperty
	 */
	private $mainEntity;

	/**
	 * @var Property\MaterialProperty
	 */
	private $material;

	/**
	 * @var Property\MentionsProperty
	 */
	private $mentions;

	/**
	 * @var Property\OffersProperty
	 */
	private $offers;

	/**
	 * @var Property\PositionProperty
	 */
	private $position;

	/**
	 * @var Property\ProducerProperty
	 */
	private $producer;

	/**
	 * @var Property\ProviderProperty
	 */
	private $provider;

	/**
	 * @var Property\PublicationProperty
	 */
	private $publication;

	/**
	 * @var Property\PublisherProperty
	 */
	private $publisher;

	/**
	 * @var Property\PublishingPrinciplesProperty
	 */
	private $publishingPrinciples;

	/**
	 * @var Property\RecordedAtProperty
	 */
	private $recordedAt;

	/**
	 * @var Property\ReleasedEventProperty
	 */
	private $releasedEvent;

	/**
	 * @var Property\ReviewProperty
	 */
	private $review;

	/**
	 * @var Property\SchemaVersionProperty
	 */
	private $schemaVersion;

	/**
	 * @var Property\SourceOrganizationProperty
	 */
	private $sourceOrganization;

	/**
	 * @var Property\SpatialCoverageProperty
	 */
	private $spatialCoverage;

	/**
	 * @var Property\SponsorProperty
	 */
	private $sponsor;

	/**
	 * @var Property\TemporalCoverageProperty
	 */
	private $temporalCoverage;

	/**
	 * @var Property\TextProperty
	 */
	private $text;

	/**
	 * @var Property\ThumbnailUrlProperty
	 */
	private $thumbnailUrl;

	/**
	 * @var Property\TimeRequiredProperty
	 */
	private $timeRequired;

	/**
	 * @var Property\TranslatorProperty
	 */
	private $translator;

	/**
	 * @var Property\TypicalAgeRangeProperty
	 */
	private $typicalAgeRange;

	/**
	 * @var Property\VersionProperty
	 */
	private $version;

	/**
	 * @var Property\VideoProperty
	 */
	private $video;

	/**
	 * @var Property\WorkExampleProperty
	 */
	private $workExample;

	/**
	 * Get accessibilityapi.
	 * 
	 * @return Property\AccessibilityAPIProperty
	 */
	public function getAccessibilityAPI() {
		return $this->accessibilityAPI;
	}

	/**
	 * Get accessibility control.
	 * 
	 * @return Property\AccessibilityControlProperty
	 */
	public function getAccessibilityControl() {
		return $this->accessibilityControl;
	}

	/**
	 * Get accessibility feature.
	 * 
	 * @return Property\AccessibilityFeatureProperty
	 */
	public function getAccessibilityFeature() {
		return $this->accessibilityFeature;
	}

	/**
	 * Get accessibility hazard.
	 * 
	 * @return Property\AccessibilityHazardProperty
	 */
	public function getAccessibilityHazard() {
		return $this->accessibilityHazard;
	}

	/**
	 * Get accessibility summary.
	 * 
	 * @return Property\AccessibilitySummaryProperty
	 */
	public function getAccessibilitySummary() {
		return $this->accessibilitySummary;
	}

	/**
	 * Get access mode.
	 * 
	 * @return Property\AccessModeProperty
	 */
	public function getAccessMode() {
		return $this->accessMode;
	}

	/**
	 * Get access mode sufficient.
	 * 
	 * @return Property\AccessModeSufficientProperty
	 */
	public function getAccessModeSufficient() {
		return $this->accessModeSufficient;
	}

	/**
	 * Get accountable person.
	 * 
	 * @return Property\AccountablePersonProperty
	 */
	public function getAccountablePerson() {
		return $this->accountablePerson;
	}

	/**
	 * Get aggregate rating.
	 * 
	 * @return Property\AggregateRatingProperty
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * Get alternative headline.
	 * 
	 * @return Property\AlternativeHeadlineProperty
	 */
	public function getAlternativeHeadline() {
		return $this->alternativeHeadline;
	}

	/**
	 * Get associated media.
	 * 
	 * @return Property\AssociatedMediaProperty
	 */
	public function getAssociatedMedia() {
		return $this->associatedMedia;
	}

	/**
	 * Get audience.
	 * 
	 * @return Property\AudienceProperty
	 */
	public function getAudience() {
		return $this->audience;
	}

	/**
	 * Get audio.
	 * 
	 * @return Property\AudioProperty
	 */
	public function getAudio() {
		return $this->audio;
	}

	/**
	 * Get author.
	 * 
	 * @return Property\AuthorProperty
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Get award.
	 * 
	 * @return Property\AwardProperty
	 */
	public function getAward() {
		return $this->award;
	}

	/**
	 * Get character.
	 * 
	 * @return Property\CharacterProperty
	 */
	public function getCharacter() {
		return $this->character;
	}

	/**
	 * Get citation.
	 * 
	 * @return Property\CitationProperty
	 */
	public function getCitation() {
		return $this->citation;
	}

	/**
	 * Get comment.
	 * 
	 * @return Property\CommentProperty
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * Get comment count.
	 * 
	 * @return Property\CommentCountProperty
	 */
	public function getCommentCount() {
		return $this->commentCount;
	}

	/**
	 * Get content location.
	 * 
	 * @return Property\ContentLocationProperty
	 */
	public function getContentLocation() {
		return $this->contentLocation;
	}

	/**
	 * Get content rating.
	 * 
	 * @return Property\ContentRatingProperty
	 */
	public function getContentRating() {
		return $this->contentRating;
	}

	/**
	 * Get contributor.
	 * 
	 * @return Property\ContributorProperty
	 */
	public function getContributor() {
		return $this->contributor;
	}

	/**
	 * Get copyright holder.
	 * 
	 * @return Property\CopyrightHolderProperty
	 */
	public function getCopyrightHolder() {
		return $this->copyrightHolder;
	}

	/**
	 * Get copyright year.
	 * 
	 * @return Property\CopyrightYearProperty
	 */
	public function getCopyrightYear() {
		return $this->copyrightYear;
	}

	/**
	 * Get creator.
	 * 
	 * @return Property\CreatorProperty
	 */
	public function getCreator() {
		return $this->creator;
	}

	/**
	 * Get date created.
	 * 
	 * @return Property\DateCreatedProperty
	 */
	public function getDateCreated() {
		return $this->dateCreated;
	}

	/**
	 * Get date modified.
	 * 
	 * @return Property\DateModifiedProperty
	 */
	public function getDateModified() {
		return $this->dateModified;
	}

	/**
	 * Get date published.
	 * 
	 * @return Property\DatePublishedProperty
	 */
	public function getDatePublished() {
		return $this->datePublished;
	}

	/**
	 * Get discussion url.
	 * 
	 * @return Property\DiscussionUrlProperty
	 */
	public function getDiscussionUrl() {
		return $this->discussionUrl;
	}

	/**
	 * Get editor.
	 * 
	 * @return Property\EditorProperty
	 */
	public function getEditor() {
		return $this->editor;
	}

	/**
	 * Get educational alignment.
	 * 
	 * @return Property\EducationalAlignmentProperty
	 */
	public function getEducationalAlignment() {
		return $this->educationalAlignment;
	}

	/**
	 * Get educational use.
	 * 
	 * @return Property\EducationalUseProperty
	 */
	public function getEducationalUse() {
		return $this->educationalUse;
	}

	/**
	 * Get encoding.
	 * 
	 * @return Property\EncodingProperty
	 */
	public function getEncoding() {
		return $this->encoding;
	}

	/**
	 * Get example of work.
	 * 
	 * @return Property\ExampleOfWorkProperty
	 */
	public function getExampleOfWork() {
		return $this->exampleOfWork;
	}

	/**
	 * Get expires.
	 * 
	 * @return Property\ExpiresProperty
	 */
	public function getExpires() {
		return $this->expires;
	}

	/**
	 * Get file format.
	 * 
	 * @return Property\FileFormatProperty
	 */
	public function getFileFormat() {
		return $this->fileFormat;
	}

	/**
	 * Get funder.
	 * 
	 * @return Property\FunderProperty
	 */
	public function getFunder() {
		return $this->funder;
	}

	/**
	 * Get genre.
	 * 
	 * @return Property\GenreProperty
	 */
	public function getGenre() {
		return $this->genre;
	}

	/**
	 * Get has part.
	 * 
	 * @return Property\HasPartProperty
	 */
	public function getHasPart() {
		return $this->hasPart;
	}

	/**
	 * Get headline.
	 * 
	 * @return Property\HeadlineProperty
	 */
	public function getHeadline() {
		return $this->headline;
	}

	/**
	 * Get in language.
	 * 
	 * @return Property\InLanguageProperty
	 */
	public function getInLanguage() {
		return $this->inLanguage;
	}

	/**
	 * Get interaction statistic.
	 * 
	 * @return Property\InteractionStatisticProperty
	 */
	public function getInteractionStatistic() {
		return $this->interactionStatistic;
	}

	/**
	 * Get interactivity type.
	 * 
	 * @return Property\InteractivityTypeProperty
	 */
	public function getInteractivityType() {
		return $this->interactivityType;
	}

	/**
	 * Get is accessible for free.
	 * 
	 * @return Property\IsAccessibleForFreeProperty
	 */
	public function getIsAccessibleForFree() {
		return $this->isAccessibleForFree;
	}

	/**
	 * Get is based on.
	 * 
	 * @return Property\IsBasedOnProperty
	 */
	public function getIsBasedOn() {
		return $this->isBasedOn;
	}

	/**
	 * Get is family friendly.
	 * 
	 * @return Property\IsFamilyFriendlyProperty
	 */
	public function getIsFamilyFriendly() {
		return $this->isFamilyFriendly;
	}

	/**
	 * Get is part of.
	 * 
	 * @return Property\IsPartOfProperty
	 */
	public function getIsPartOf() {
		return $this->isPartOf;
	}

	/**
	 * Get keywords.
	 * 
	 * @return Property\KeywordsProperty
	 */
	public function getKeywords() {
		return $this->keywords;
	}

	/**
	 * Get learning resource type.
	 * 
	 * @return Property\LearningResourceTypeProperty
	 */
	public function getLearningResourceType() {
		return $this->learningResourceType;
	}

	/**
	 * Get license.
	 * 
	 * @return Property\LicenseProperty
	 */
	public function getLicense() {
		return $this->license;
	}

	/**
	 * Get location created.
	 * 
	 * @return Property\LocationCreatedProperty
	 */
	public function getLocationCreated() {
		return $this->locationCreated;
	}

	/**
	 * Get main entity.
	 * 
	 * @return Property\MainEntityProperty
	 */
	public function getMainEntity() {
		return $this->mainEntity;
	}

	/**
	 * Get material.
	 * 
	 * @return Property\MaterialProperty
	 */
	public function getMaterial() {
		return $this->material;
	}

	/**
	 * Get mentions.
	 * 
	 * @return Property\MentionsProperty
	 */
	public function getMentions() {
		return $this->mentions;
	}

	/**
	 * Get offers.
	 * 
	 * @return Property\OffersProperty
	 */
	public function getOffers() {
		return $this->offers;
	}

	/**
	 * Get position.
	 * 
	 * @return Property\PositionProperty
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * Get producer.
	 * 
	 * @return Property\ProducerProperty
	 */
	public function getProducer() {
		return $this->producer;
	}

	/**
	 * Get provider.
	 * 
	 * @return Property\ProviderProperty
	 */
	public function getProvider() {
		return $this->provider;
	}

	/**
	 * Get publication.
	 * 
	 * @return Property\PublicationProperty
	 */
	public function getPublication() {
		return $this->publication;
	}

	/**
	 * Get publisher.
	 * 
	 * @return Property\PublisherProperty
	 */
	public function getPublisher() {
		return $this->publisher;
	}

	/**
	 * Get publishing principles.
	 * 
	 * @return Property\PublishingPrinciplesProperty
	 */
	public function getPublishingPrinciples() {
		return $this->publishingPrinciples;
	}

	/**
	 * Get recorded at.
	 * 
	 * @return Property\RecordedAtProperty
	 */
	public function getRecordedAt() {
		return $this->recordedAt;
	}

	/**
	 * Get released event.
	 * 
	 * @return Property\ReleasedEventProperty
	 */
	public function getReleasedEvent() {
		return $this->releasedEvent;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\ReviewProperty
	 */
	public function getReview() {
		return $this->review;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CreativeWork';
	}

	/**
	 * Get schema version.
	 * 
	 * @return Property\SchemaVersionProperty
	 */
	public function getSchemaVersion() {
		return $this->schemaVersion;
	}

	/**
	 * Get source organization.
	 * 
	 * @return Property\SourceOrganizationProperty
	 */
	public function getSourceOrganization() {
		return $this->sourceOrganization;
	}

	/**
	 * Get spatial coverage.
	 * 
	 * @return Property\SpatialCoverageProperty
	 */
	public function getSpatialCoverage() {
		return $this->spatialCoverage;
	}

	/**
	 * Get sponsor.
	 * 
	 * @return Property\SponsorProperty
	 */
	public function getSponsor() {
		return $this->sponsor;
	}

	/**
	 * Get temporal coverage.
	 * 
	 * @return Property\TemporalCoverageProperty
	 */
	public function getTemporalCoverage() {
		return $this->temporalCoverage;
	}

	/**
	 * Get text.
	 * 
	 * @return Property\TextProperty
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Get thumbnail url.
	 * 
	 * @return Property\ThumbnailUrlProperty
	 */
	public function getThumbnailUrl() {
		return $this->thumbnailUrl;
	}

	/**
	 * Get time required.
	 * 
	 * @return Property\TimeRequiredProperty
	 */
	public function getTimeRequired() {
		return $this->timeRequired;
	}

	/**
	 * Get translator.
	 * 
	 * @return Property\TranslatorProperty
	 */
	public function getTranslator() {
		return $this->translator;
	}

	/**
	 * Get typical age range.
	 * 
	 * @return Property\TypicalAgeRangeProperty
	 */
	public function getTypicalAgeRange() {
		return $this->typicalAgeRange;
	}

	/**
	 * Get version.
	 * 
	 * @return Property\VersionProperty
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * Get video.
	 * 
	 * @return Property\VideoProperty
	 */
	public function getVideo() {
		return $this->video;
	}

	/**
	 * Get work example.
	 * 
	 * @return Property\WorkExampleProperty
	 */
	public function getWorkExample() {
		return $this->workExample;
	}

	/**
	 * Set accessibilityapi.
	 * 
	 * @param Property\AccessibilityAPIProperty $accessibilityAPI
	 * @return CreativeWorkType
	 */
	public function setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI) {
		$this->accessibilityAPI = $accessibilityAPI;

		return $this;
	}

	/**
	 * Set accessibility control.
	 * 
	 * @param Property\AccessibilityControlProperty $accessibilityControl
	 * @return CreativeWorkType
	 */
	public function setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl) {
		$this->accessibilityControl = $accessibilityControl;

		return $this;
	}

	/**
	 * Set accessibility feature.
	 * 
	 * @param Property\AccessibilityFeatureProperty $accessibilityFeature
	 * @return CreativeWorkType
	 */
	public function setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature) {
		$this->accessibilityFeature = $accessibilityFeature;

		return $this;
	}

	/**
	 * Set accessibility hazard.
	 * 
	 * @param Property\AccessibilityHazardProperty $accessibilityHazard
	 * @return CreativeWorkType
	 */
	public function setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard) {
		$this->accessibilityHazard = $accessibilityHazard;

		return $this;
	}

	/**
	 * Set accessibility summary.
	 * 
	 * @param Property\AccessibilitySummaryProperty $accessibilitySummary
	 * @return CreativeWorkType
	 */
	public function setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary) {
		$this->accessibilitySummary = $accessibilitySummary;

		return $this;
	}

	/**
	 * Set access mode.
	 * 
	 * @param Property\AccessModeProperty $accessMode
	 * @return CreativeWorkType
	 */
	public function setAccessMode(Property\AccessModeProperty $accessMode) {
		$this->accessMode = $accessMode;

		return $this;
	}

	/**
	 * Set access mode sufficient.
	 * 
	 * @param Property\AccessModeSufficientProperty $accessModeSufficient
	 * @return CreativeWorkType
	 */
	public function setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient) {
		$this->accessModeSufficient = $accessModeSufficient;

		return $this;
	}

	/**
	 * Set accountable person.
	 * 
	 * @param Property\AccountablePersonProperty $accountablePerson
	 * @return CreativeWorkType
	 */
	public function setAccountablePerson(Property\AccountablePersonProperty $accountablePerson) {
		$this->accountablePerson = $accountablePerson;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRatingProperty $aggregateRating
	 * @return CreativeWorkType
	 */
	public function setAggregateRating(Property\AggregateRatingProperty $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set alternative headline.
	 * 
	 * @param Property\AlternativeHeadlineProperty $alternativeHeadline
	 * @return CreativeWorkType
	 */
	public function setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline) {
		$this->alternativeHeadline = $alternativeHeadline;

		return $this;
	}

	/**
	 * Set associated media.
	 * 
	 * @param Property\AssociatedMediaProperty $associatedMedia
	 * @return CreativeWorkType
	 */
	public function setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia) {
		$this->associatedMedia = $associatedMedia;

		return $this;
	}

	/**
	 * Set audience.
	 * 
	 * @param Property\AudienceProperty $audience
	 * @return CreativeWorkType
	 */
	public function setAudience(Property\AudienceProperty $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set audio.
	 * 
	 * @param Property\AudioProperty $audio
	 * @return CreativeWorkType
	 */
	public function setAudio(Property\AudioProperty $audio) {
		$this->audio = $audio;

		return $this;
	}

	/**
	 * Set author.
	 * 
	 * @param Property\AuthorProperty $author
	 * @return CreativeWorkType
	 */
	public function setAuthor(Property\AuthorProperty $author) {
		$this->author = $author;

		return $this;
	}

	/**
	 * Set award.
	 * 
	 * @param Property\AwardProperty $award
	 * @return CreativeWorkType
	 */
	public function setAward(Property\AwardProperty $award) {
		$this->award = $award;

		return $this;
	}

	/**
	 * Set character.
	 * 
	 * @param Property\CharacterProperty $character
	 * @return CreativeWorkType
	 */
	public function setCharacter(Property\CharacterProperty $character) {
		$this->character = $character;

		return $this;
	}

	/**
	 * Set citation.
	 * 
	 * @param Property\CitationProperty $citation
	 * @return CreativeWorkType
	 */
	public function setCitation(Property\CitationProperty $citation) {
		$this->citation = $citation;

		return $this;
	}

	/**
	 * Set comment.
	 * 
	 * @param Property\CommentProperty $comment
	 * @return CreativeWorkType
	 */
	public function setComment(Property\CommentProperty $comment) {
		$this->comment = $comment;

		return $this;
	}

	/**
	 * Set comment count.
	 * 
	 * @param Property\CommentCountProperty $commentCount
	 * @return CreativeWorkType
	 */
	public function setCommentCount(Property\CommentCountProperty $commentCount) {
		$this->commentCount = $commentCount;

		return $this;
	}

	/**
	 * Set content location.
	 * 
	 * @param Property\ContentLocationProperty $contentLocation
	 * @return CreativeWorkType
	 */
	public function setContentLocation(Property\ContentLocationProperty $contentLocation) {
		$this->contentLocation = $contentLocation;

		return $this;
	}

	/**
	 * Set content rating.
	 * 
	 * @param Property\ContentRatingProperty $contentRating
	 * @return CreativeWorkType
	 */
	public function setContentRating(Property\ContentRatingProperty $contentRating) {
		$this->contentRating = $contentRating;

		return $this;
	}

	/**
	 * Set contributor.
	 * 
	 * @param Property\ContributorProperty $contributor
	 * @return CreativeWorkType
	 */
	public function setContributor(Property\ContributorProperty $contributor) {
		$this->contributor = $contributor;

		return $this;
	}

	/**
	 * Set copyright holder.
	 * 
	 * @param Property\CopyrightHolderProperty $copyrightHolder
	 * @return CreativeWorkType
	 */
	public function setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder) {
		$this->copyrightHolder = $copyrightHolder;

		return $this;
	}

	/**
	 * Set copyright year.
	 * 
	 * @param Property\CopyrightYearProperty $copyrightYear
	 * @return CreativeWorkType
	 */
	public function setCopyrightYear(Property\CopyrightYearProperty $copyrightYear) {
		$this->copyrightYear = $copyrightYear;

		return $this;
	}

	/**
	 * Set creator.
	 * 
	 * @param Property\CreatorProperty $creator
	 * @return CreativeWorkType
	 */
	public function setCreator(Property\CreatorProperty $creator) {
		$this->creator = $creator;

		return $this;
	}

	/**
	 * Set date created.
	 * 
	 * @param Property\DateCreatedProperty $dateCreated
	 * @return CreativeWorkType
	 */
	public function setDateCreated(Property\DateCreatedProperty $dateCreated) {
		$this->dateCreated = $dateCreated;

		return $this;
	}

	/**
	 * Set date modified.
	 * 
	 * @param Property\DateModifiedProperty $dateModified
	 * @return CreativeWorkType
	 */
	public function setDateModified(Property\DateModifiedProperty $dateModified) {
		$this->dateModified = $dateModified;

		return $this;
	}

	/**
	 * Set date published.
	 * 
	 * @param Property\DatePublishedProperty $datePublished
	 * @return CreativeWorkType
	 */
	public function setDatePublished(Property\DatePublishedProperty $datePublished) {
		$this->datePublished = $datePublished;

		return $this;
	}

	/**
	 * Set discussion url.
	 * 
	 * @param Property\DiscussionUrlProperty $discussionUrl
	 * @return CreativeWorkType
	 */
	public function setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl) {
		$this->discussionUrl = $discussionUrl;

		return $this;
	}

	/**
	 * Set editor.
	 * 
	 * @param Property\EditorProperty $editor
	 * @return CreativeWorkType
	 */
	public function setEditor(Property\EditorProperty $editor) {
		$this->editor = $editor;

		return $this;
	}

	/**
	 * Set educational alignment.
	 * 
	 * @param Property\EducationalAlignmentProperty $educationalAlignment
	 * @return CreativeWorkType
	 */
	public function setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment) {
		$this->educationalAlignment = $educationalAlignment;

		return $this;
	}

	/**
	 * Set educational use.
	 * 
	 * @param Property\EducationalUseProperty $educationalUse
	 * @return CreativeWorkType
	 */
	public function setEducationalUse(Property\EducationalUseProperty $educationalUse) {
		$this->educationalUse = $educationalUse;

		return $this;
	}

	/**
	 * Set encoding.
	 * 
	 * @param Property\EncodingProperty $encoding
	 * @return CreativeWorkType
	 */
	public function setEncoding(Property\EncodingProperty $encoding) {
		$this->encoding = $encoding;

		return $this;
	}

	/**
	 * Set example of work.
	 * 
	 * @param Property\ExampleOfWorkProperty $exampleOfWork
	 * @return CreativeWorkType
	 */
	public function setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork) {
		$this->exampleOfWork = $exampleOfWork;

		return $this;
	}

	/**
	 * Set expires.
	 * 
	 * @param Property\ExpiresProperty $expires
	 * @return CreativeWorkType
	 */
	public function setExpires(Property\ExpiresProperty $expires) {
		$this->expires = $expires;

		return $this;
	}

	/**
	 * Set file format.
	 * 
	 * @param Property\FileFormatProperty $fileFormat
	 * @return CreativeWorkType
	 */
	public function setFileFormat(Property\FileFormatProperty $fileFormat) {
		$this->fileFormat = $fileFormat;

		return $this;
	}

	/**
	 * Set funder.
	 * 
	 * @param Property\FunderProperty $funder
	 * @return CreativeWorkType
	 */
	public function setFunder(Property\FunderProperty $funder) {
		$this->funder = $funder;

		return $this;
	}

	/**
	 * Set genre.
	 * 
	 * @param Property\GenreProperty $genre
	 * @return CreativeWorkType
	 */
	public function setGenre(Property\GenreProperty $genre) {
		$this->genre = $genre;

		return $this;
	}

	/**
	 * Set has part.
	 * 
	 * @param Property\HasPartProperty $hasPart
	 * @return CreativeWorkType
	 */
	public function setHasPart(Property\HasPartProperty $hasPart) {
		$this->hasPart = $hasPart;

		return $this;
	}

	/**
	 * Set headline.
	 * 
	 * @param Property\HeadlineProperty $headline
	 * @return CreativeWorkType
	 */
	public function setHeadline(Property\HeadlineProperty $headline) {
		$this->headline = $headline;

		return $this;
	}

	/**
	 * Set in language.
	 * 
	 * @param Property\InLanguageProperty $inLanguage
	 * @return CreativeWorkType
	 */
	public function setInLanguage(Property\InLanguageProperty $inLanguage) {
		$this->inLanguage = $inLanguage;

		return $this;
	}

	/**
	 * Set interaction statistic.
	 * 
	 * @param Property\InteractionStatisticProperty $interactionStatistic
	 * @return CreativeWorkType
	 */
	public function setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic) {
		$this->interactionStatistic = $interactionStatistic;

		return $this;
	}

	/**
	 * Set interactivity type.
	 * 
	 * @param Property\InteractivityTypeProperty $interactivityType
	 * @return CreativeWorkType
	 */
	public function setInteractivityType(Property\InteractivityTypeProperty $interactivityType) {
		$this->interactivityType = $interactivityType;

		return $this;
	}

	/**
	 * Set is accessible for free.
	 * 
	 * @param Property\IsAccessibleForFreeProperty $isAccessibleForFree
	 * @return CreativeWorkType
	 */
	public function setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree) {
		$this->isAccessibleForFree = $isAccessibleForFree;

		return $this;
	}

	/**
	 * Set is based on.
	 * 
	 * @param Property\IsBasedOnProperty $isBasedOn
	 * @return CreativeWorkType
	 */
	public function setIsBasedOn(Property\IsBasedOnProperty $isBasedOn) {
		$this->isBasedOn = $isBasedOn;

		return $this;
	}

	/**
	 * Set is family friendly.
	 * 
	 * @param Property\IsFamilyFriendlyProperty $isFamilyFriendly
	 * @return CreativeWorkType
	 */
	public function setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly) {
		$this->isFamilyFriendly = $isFamilyFriendly;

		return $this;
	}

	/**
	 * Set is part of.
	 * 
	 * @param Property\IsPartOfProperty $isPartOf
	 * @return CreativeWorkType
	 */
	public function setIsPartOf(Property\IsPartOfProperty $isPartOf) {
		$this->isPartOf = $isPartOf;

		return $this;
	}

	/**
	 * Set keywords.
	 * 
	 * @param Property\KeywordsProperty $keywords
	 * @return CreativeWorkType
	 */
	public function setKeywords(Property\KeywordsProperty $keywords) {
		$this->keywords = $keywords;

		return $this;
	}

	/**
	 * Set learning resource type.
	 * 
	 * @param Property\LearningResourceTypeProperty $learningResourceType
	 * @return CreativeWorkType
	 */
	public function setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType) {
		$this->learningResourceType = $learningResourceType;

		return $this;
	}

	/**
	 * Set license.
	 * 
	 * @param Property\LicenseProperty $license
	 * @return CreativeWorkType
	 */
	public function setLicense(Property\LicenseProperty $license) {
		$this->license = $license;

		return $this;
	}

	/**
	 * Set location created.
	 * 
	 * @param Property\LocationCreatedProperty $locationCreated
	 * @return CreativeWorkType
	 */
	public function setLocationCreated(Property\LocationCreatedProperty $locationCreated) {
		$this->locationCreated = $locationCreated;

		return $this;
	}

	/**
	 * Set main entity.
	 * 
	 * @param Property\MainEntityProperty $mainEntity
	 * @return CreativeWorkType
	 */
	public function setMainEntity(Property\MainEntityProperty $mainEntity) {
		$this->mainEntity = $mainEntity;

		return $this;
	}

	/**
	 * Set material.
	 * 
	 * @param Property\MaterialProperty $material
	 * @return CreativeWorkType
	 */
	public function setMaterial(Property\MaterialProperty $material) {
		$this->material = $material;

		return $this;
	}

	/**
	 * Set mentions.
	 * 
	 * @param Property\MentionsProperty $mentions
	 * @return CreativeWorkType
	 */
	public function setMentions(Property\MentionsProperty $mentions) {
		$this->mentions = $mentions;

		return $this;
	}

	/**
	 * Set offers.
	 * 
	 * @param Property\OffersProperty $offers
	 * @return CreativeWorkType
	 */
	public function setOffers(Property\OffersProperty $offers) {
		$this->offers = $offers;

		return $this;
	}

	/**
	 * Set position.
	 * 
	 * @param Property\PositionProperty $position
	 * @return CreativeWorkType
	 */
	public function setPosition(Property\PositionProperty $position) {
		$this->position = $position;

		return $this;
	}

	/**
	 * Set producer.
	 * 
	 * @param Property\ProducerProperty $producer
	 * @return CreativeWorkType
	 */
	public function setProducer(Property\ProducerProperty $producer) {
		$this->producer = $producer;

		return $this;
	}

	/**
	 * Set provider.
	 * 
	 * @param Property\ProviderProperty $provider
	 * @return CreativeWorkType
	 */
	public function setProvider(Property\ProviderProperty $provider) {
		$this->provider = $provider;

		return $this;
	}

	/**
	 * Set publication.
	 * 
	 * @param Property\PublicationProperty $publication
	 * @return CreativeWorkType
	 */
	public function setPublication(Property\PublicationProperty $publication) {
		$this->publication = $publication;

		return $this;
	}

	/**
	 * Set publisher.
	 * 
	 * @param Property\PublisherProperty $publisher
	 * @return CreativeWorkType
	 */
	public function setPublisher(Property\PublisherProperty $publisher) {
		$this->publisher = $publisher;

		return $this;
	}

	/**
	 * Set publishing principles.
	 * 
	 * @param Property\PublishingPrinciplesProperty $publishingPrinciples
	 * @return CreativeWorkType
	 */
	public function setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples) {
		$this->publishingPrinciples = $publishingPrinciples;

		return $this;
	}

	/**
	 * Set recorded at.
	 * 
	 * @param Property\RecordedAtProperty $recordedAt
	 * @return CreativeWorkType
	 */
	public function setRecordedAt(Property\RecordedAtProperty $recordedAt) {
		$this->recordedAt = $recordedAt;

		return $this;
	}

	/**
	 * Set released event.
	 * 
	 * @param Property\ReleasedEventProperty $releasedEvent
	 * @return CreativeWorkType
	 */
	public function setReleasedEvent(Property\ReleasedEventProperty $releasedEvent) {
		$this->releasedEvent = $releasedEvent;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\ReviewProperty $review
	 * @return CreativeWorkType
	 */
	public function setReview(Property\ReviewProperty $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set schema version.
	 * 
	 * @param Property\SchemaVersionProperty $schemaVersion
	 * @return CreativeWorkType
	 */
	public function setSchemaVersion(Property\SchemaVersionProperty $schemaVersion) {
		$this->schemaVersion = $schemaVersion;

		return $this;
	}

	/**
	 * Set source organization.
	 * 
	 * @param Property\SourceOrganizationProperty $sourceOrganization
	 * @return CreativeWorkType
	 */
	public function setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization) {
		$this->sourceOrganization = $sourceOrganization;

		return $this;
	}

	/**
	 * Set spatial coverage.
	 * 
	 * @param Property\SpatialCoverageProperty $spatialCoverage
	 * @return CreativeWorkType
	 */
	public function setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage) {
		$this->spatialCoverage = $spatialCoverage;

		return $this;
	}

	/**
	 * Set sponsor.
	 * 
	 * @param Property\SponsorProperty $sponsor
	 * @return CreativeWorkType
	 */
	public function setSponsor(Property\SponsorProperty $sponsor) {
		$this->sponsor = $sponsor;

		return $this;
	}

	/**
	 * Set temporal coverage.
	 * 
	 * @param Property\TemporalCoverageProperty $temporalCoverage
	 * @return CreativeWorkType
	 */
	public function setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage) {
		$this->temporalCoverage = $temporalCoverage;

		return $this;
	}

	/**
	 * Set text.
	 * 
	 * @param Property\TextProperty $text
	 * @return CreativeWorkType
	 */
	public function setText(Property\TextProperty $text) {
		$this->text = $text;

		return $this;
	}

	/**
	 * Set thumbnail url.
	 * 
	 * @param Property\ThumbnailUrlProperty $thumbnailUrl
	 * @return CreativeWorkType
	 */
	public function setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl) {
		$this->thumbnailUrl = $thumbnailUrl;

		return $this;
	}

	/**
	 * Set time required.
	 * 
	 * @param Property\TimeRequiredProperty $timeRequired
	 * @return CreativeWorkType
	 */
	public function setTimeRequired(Property\TimeRequiredProperty $timeRequired) {
		$this->timeRequired = $timeRequired;

		return $this;
	}

	/**
	 * Set translator.
	 * 
	 * @param Property\TranslatorProperty $translator
	 * @return CreativeWorkType
	 */
	public function setTranslator(Property\TranslatorProperty $translator) {
		$this->translator = $translator;

		return $this;
	}

	/**
	 * Set typical age range.
	 * 
	 * @param Property\TypicalAgeRangeProperty $typicalAgeRange
	 * @return CreativeWorkType
	 */
	public function setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange) {
		$this->typicalAgeRange = $typicalAgeRange;

		return $this;
	}

	/**
	 * Set version.
	 * 
	 * @param Property\VersionProperty $version
	 * @return CreativeWorkType
	 */
	public function setVersion(Property\VersionProperty $version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Set video.
	 * 
	 * @param Property\VideoProperty $video
	 * @return CreativeWorkType
	 */
	public function setVideo(Property\VideoProperty $video) {
		$this->video = $video;

		return $this;
	}

	/**
	 * Set work example.
	 * 
	 * @param Property\WorkExampleProperty $workExample
	 * @return CreativeWorkType
	 */
	public function setWorkExample(Property\WorkExampleProperty $workExample) {
		$this->workExample = $workExample;

		return $this;
	}
}