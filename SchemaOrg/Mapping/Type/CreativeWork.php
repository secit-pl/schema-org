<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CreativeWork.
 * 
 * @method CreativeWork setAdditionalType(Property\AdditionalType $additionalType)
 * @method CreativeWork setAlternateName(Property\AlternateName $alternateName)
 * @method CreativeWork setDescription(Property\Description $description)
 * @method CreativeWork setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CreativeWork setIdentifier(Property\Identifier $identifier)
 * @method CreativeWork setImage(Property\Image $image)
 * @method CreativeWork setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CreativeWork setName(Property\Name $name)
 * @method CreativeWork setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CreativeWork setSameAs(Property\SameAs $sameAs)
 * @method CreativeWork setUrl(Property\Url $url)
 */
class CreativeWork extends Thing {

	/**
	 * @var Property\About
	 */
	private $about;

	/**
	 * @var Property\AccessibilityAPI
	 */
	private $accessibilityAPI;

	/**
	 * @var Property\AccessibilityControl
	 */
	private $accessibilityControl;

	/**
	 * @var Property\AccessibilityFeature
	 */
	private $accessibilityFeature;

	/**
	 * @var Property\AccessibilityHazard
	 */
	private $accessibilityHazard;

	/**
	 * @var Property\AccessibilitySummary
	 */
	private $accessibilitySummary;

	/**
	 * @var Property\AccessMode
	 */
	private $accessMode;

	/**
	 * @var Property\AccessModeSufficient
	 */
	private $accessModeSufficient;

	/**
	 * @var Property\AccountablePerson
	 */
	private $accountablePerson;

	/**
	 * @var Property\AggregateRating
	 */
	private $aggregateRating;

	/**
	 * @var Property\AlternativeHeadline
	 */
	private $alternativeHeadline;

	/**
	 * @var Property\AssociatedMedia
	 */
	private $associatedMedia;

	/**
	 * @var Property\Audience
	 */
	private $audience;

	/**
	 * @var Property\Audio
	 */
	private $audio;

	/**
	 * @var Property\Author
	 */
	private $author;

	/**
	 * @var Property\Award
	 */
	private $award;

	/**
	 * @var Property\Character
	 */
	private $character;

	/**
	 * @var Property\Citation
	 */
	private $citation;

	/**
	 * @var Property\Comment
	 */
	private $comment;

	/**
	 * @var Property\CommentCount
	 */
	private $commentCount;

	/**
	 * @var Property\ContentLocation
	 */
	private $contentLocation;

	/**
	 * @var Property\ContentRating
	 */
	private $contentRating;

	/**
	 * @var Property\Contributor
	 */
	private $contributor;

	/**
	 * @var Property\CopyrightHolder
	 */
	private $copyrightHolder;

	/**
	 * @var Property\CopyrightYear
	 */
	private $copyrightYear;

	/**
	 * @var Property\Creator
	 */
	private $creator;

	/**
	 * @var Property\DateCreated
	 */
	private $dateCreated;

	/**
	 * @var Property\DateModified
	 */
	private $dateModified;

	/**
	 * @var Property\DatePublished
	 */
	private $datePublished;

	/**
	 * @var Property\DiscussionUrl
	 */
	private $discussionUrl;

	/**
	 * @var Property\Editor
	 */
	private $editor;

	/**
	 * @var Property\EducationalAlignment
	 */
	private $educationalAlignment;

	/**
	 * @var Property\EducationalUse
	 */
	private $educationalUse;

	/**
	 * @var Property\Encoding
	 */
	private $encoding;

	/**
	 * @var Property\ExampleOfWork
	 */
	private $exampleOfWork;

	/**
	 * @var Property\FileFormat
	 */
	private $fileFormat;

	/**
	 * @var Property\Funder
	 */
	private $funder;

	/**
	 * @var Property\Genre
	 */
	private $genre;

	/**
	 * @var Property\HasPart
	 */
	private $hasPart;

	/**
	 * @var Property\Headline
	 */
	private $headline;

	/**
	 * @var Property\InLanguage
	 */
	private $inLanguage;

	/**
	 * @var Property\InteractionStatistic
	 */
	private $interactionStatistic;

	/**
	 * @var Property\InteractivityType
	 */
	private $interactivityType;

	/**
	 * @var Property\IsAccessibleForFree
	 */
	private $isAccessibleForFree;

	/**
	 * @var Property\IsBasedOn
	 */
	private $isBasedOn;

	/**
	 * @var Property\IsFamilyFriendly
	 */
	private $isFamilyFriendly;

	/**
	 * @var Property\IsPartOf
	 */
	private $isPartOf;

	/**
	 * @var Property\Keywords
	 */
	private $keywords;

	/**
	 * @var Property\LearningResourceType
	 */
	private $learningResourceType;

	/**
	 * @var Property\License
	 */
	private $license;

	/**
	 * @var Property\LocationCreated
	 */
	private $locationCreated;

	/**
	 * @var Property\MainEntity
	 */
	private $mainEntity;

	/**
	 * @var Property\Material
	 */
	private $material;

	/**
	 * @var Property\Mentions
	 */
	private $mentions;

	/**
	 * @var Property\Offers
	 */
	private $offers;

	/**
	 * @var Property\Position
	 */
	private $position;

	/**
	 * @var Property\Producer
	 */
	private $producer;

	/**
	 * @var Property\Provider
	 */
	private $provider;

	/**
	 * @var Property\Publication
	 */
	private $publication;

	/**
	 * @var Property\Publisher
	 */
	private $publisher;

	/**
	 * @var Property\PublishingPrinciples
	 */
	private $publishingPrinciples;

	/**
	 * @var Property\RecordedAt
	 */
	private $recordedAt;

	/**
	 * @var Property\ReleasedEvent
	 */
	private $releasedEvent;

	/**
	 * @var Property\Review
	 */
	private $review;

	/**
	 * @var Property\SchemaVersion
	 */
	private $schemaVersion;

	/**
	 * @var Property\SourceOrganization
	 */
	private $sourceOrganization;

	/**
	 * @var Property\SpatialCoverage
	 */
	private $spatialCoverage;

	/**
	 * @var Property\Sponsor
	 */
	private $sponsor;

	/**
	 * @var Property\TemporalCoverage
	 */
	private $temporalCoverage;

	/**
	 * @var Property\Text
	 */
	private $text;

	/**
	 * @var Property\ThumbnailUrl
	 */
	private $thumbnailUrl;

	/**
	 * @var Property\TimeRequired
	 */
	private $timeRequired;

	/**
	 * @var Property\Translator
	 */
	private $translator;

	/**
	 * @var Property\TypicalAgeRange
	 */
	private $typicalAgeRange;

	/**
	 * @var Property\Version
	 */
	private $version;

	/**
	 * @var Property\Video
	 */
	private $video;

	/**
	 * @var Property\WorkExample
	 */
	private $workExample;

	/**
	 * Get about.
	 * 
	 * @return Property\About
	 */
	public function getAbout() {
		return $this->about;
	}

	/**
	 * Get accessibilityapi.
	 * 
	 * @return Property\AccessibilityAPI
	 */
	public function getAccessibilityAPI() {
		return $this->accessibilityAPI;
	}

	/**
	 * Get accessibility control.
	 * 
	 * @return Property\AccessibilityControl
	 */
	public function getAccessibilityControl() {
		return $this->accessibilityControl;
	}

	/**
	 * Get accessibility feature.
	 * 
	 * @return Property\AccessibilityFeature
	 */
	public function getAccessibilityFeature() {
		return $this->accessibilityFeature;
	}

	/**
	 * Get accessibility hazard.
	 * 
	 * @return Property\AccessibilityHazard
	 */
	public function getAccessibilityHazard() {
		return $this->accessibilityHazard;
	}

	/**
	 * Get accessibility summary.
	 * 
	 * @return Property\AccessibilitySummary
	 */
	public function getAccessibilitySummary() {
		return $this->accessibilitySummary;
	}

	/**
	 * Get access mode.
	 * 
	 * @return Property\AccessMode
	 */
	public function getAccessMode() {
		return $this->accessMode;
	}

	/**
	 * Get access mode sufficient.
	 * 
	 * @return Property\AccessModeSufficient
	 */
	public function getAccessModeSufficient() {
		return $this->accessModeSufficient;
	}

	/**
	 * Get accountable person.
	 * 
	 * @return Property\AccountablePerson
	 */
	public function getAccountablePerson() {
		return $this->accountablePerson;
	}

	/**
	 * Get aggregate rating.
	 * 
	 * @return Property\AggregateRating
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * Get alternative headline.
	 * 
	 * @return Property\AlternativeHeadline
	 */
	public function getAlternativeHeadline() {
		return $this->alternativeHeadline;
	}

	/**
	 * Get associated media.
	 * 
	 * @return Property\AssociatedMedia
	 */
	public function getAssociatedMedia() {
		return $this->associatedMedia;
	}

	/**
	 * Get audience.
	 * 
	 * @return Property\Audience
	 */
	public function getAudience() {
		return $this->audience;
	}

	/**
	 * Get audio.
	 * 
	 * @return Property\Audio
	 */
	public function getAudio() {
		return $this->audio;
	}

	/**
	 * Get author.
	 * 
	 * @return Property\Author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Get award.
	 * 
	 * @return Property\Award
	 */
	public function getAward() {
		return $this->award;
	}

	/**
	 * Get character.
	 * 
	 * @return Property\Character
	 */
	public function getCharacter() {
		return $this->character;
	}

	/**
	 * Get citation.
	 * 
	 * @return Property\Citation
	 */
	public function getCitation() {
		return $this->citation;
	}

	/**
	 * Get comment.
	 * 
	 * @return Property\Comment
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * Get comment count.
	 * 
	 * @return Property\CommentCount
	 */
	public function getCommentCount() {
		return $this->commentCount;
	}

	/**
	 * Get content location.
	 * 
	 * @return Property\ContentLocation
	 */
	public function getContentLocation() {
		return $this->contentLocation;
	}

	/**
	 * Get content rating.
	 * 
	 * @return Property\ContentRating
	 */
	public function getContentRating() {
		return $this->contentRating;
	}

	/**
	 * Get contributor.
	 * 
	 * @return Property\Contributor
	 */
	public function getContributor() {
		return $this->contributor;
	}

	/**
	 * Get copyright holder.
	 * 
	 * @return Property\CopyrightHolder
	 */
	public function getCopyrightHolder() {
		return $this->copyrightHolder;
	}

	/**
	 * Get copyright year.
	 * 
	 * @return Property\CopyrightYear
	 */
	public function getCopyrightYear() {
		return $this->copyrightYear;
	}

	/**
	 * Get creator.
	 * 
	 * @return Property\Creator
	 */
	public function getCreator() {
		return $this->creator;
	}

	/**
	 * Get date created.
	 * 
	 * @return Property\DateCreated
	 */
	public function getDateCreated() {
		return $this->dateCreated;
	}

	/**
	 * Get date modified.
	 * 
	 * @return Property\DateModified
	 */
	public function getDateModified() {
		return $this->dateModified;
	}

	/**
	 * Get date published.
	 * 
	 * @return Property\DatePublished
	 */
	public function getDatePublished() {
		return $this->datePublished;
	}

	/**
	 * Get discussion url.
	 * 
	 * @return Property\DiscussionUrl
	 */
	public function getDiscussionUrl() {
		return $this->discussionUrl;
	}

	/**
	 * Get editor.
	 * 
	 * @return Property\Editor
	 */
	public function getEditor() {
		return $this->editor;
	}

	/**
	 * Get educational alignment.
	 * 
	 * @return Property\EducationalAlignment
	 */
	public function getEducationalAlignment() {
		return $this->educationalAlignment;
	}

	/**
	 * Get educational use.
	 * 
	 * @return Property\EducationalUse
	 */
	public function getEducationalUse() {
		return $this->educationalUse;
	}

	/**
	 * Get encoding.
	 * 
	 * @return Property\Encoding
	 */
	public function getEncoding() {
		return $this->encoding;
	}

	/**
	 * Get example of work.
	 * 
	 * @return Property\ExampleOfWork
	 */
	public function getExampleOfWork() {
		return $this->exampleOfWork;
	}

	/**
	 * Get file format.
	 * 
	 * @return Property\FileFormat
	 */
	public function getFileFormat() {
		return $this->fileFormat;
	}

	/**
	 * Get funder.
	 * 
	 * @return Property\Funder
	 */
	public function getFunder() {
		return $this->funder;
	}

	/**
	 * Get genre.
	 * 
	 * @return Property\Genre
	 */
	public function getGenre() {
		return $this->genre;
	}

	/**
	 * Get has part.
	 * 
	 * @return Property\HasPart
	 */
	public function getHasPart() {
		return $this->hasPart;
	}

	/**
	 * Get headline.
	 * 
	 * @return Property\Headline
	 */
	public function getHeadline() {
		return $this->headline;
	}

	/**
	 * Get in language.
	 * 
	 * @return Property\InLanguage
	 */
	public function getInLanguage() {
		return $this->inLanguage;
	}

	/**
	 * Get interaction statistic.
	 * 
	 * @return Property\InteractionStatistic
	 */
	public function getInteractionStatistic() {
		return $this->interactionStatistic;
	}

	/**
	 * Get interactivity type.
	 * 
	 * @return Property\InteractivityType
	 */
	public function getInteractivityType() {
		return $this->interactivityType;
	}

	/**
	 * Get is accessible for free.
	 * 
	 * @return Property\IsAccessibleForFree
	 */
	public function getIsAccessibleForFree() {
		return $this->isAccessibleForFree;
	}

	/**
	 * Get is based on.
	 * 
	 * @return Property\IsBasedOn
	 */
	public function getIsBasedOn() {
		return $this->isBasedOn;
	}

	/**
	 * Get is family friendly.
	 * 
	 * @return Property\IsFamilyFriendly
	 */
	public function getIsFamilyFriendly() {
		return $this->isFamilyFriendly;
	}

	/**
	 * Get is part of.
	 * 
	 * @return Property\IsPartOf
	 */
	public function getIsPartOf() {
		return $this->isPartOf;
	}

	/**
	 * Get keywords.
	 * 
	 * @return Property\Keywords
	 */
	public function getKeywords() {
		return $this->keywords;
	}

	/**
	 * Get learning resource type.
	 * 
	 * @return Property\LearningResourceType
	 */
	public function getLearningResourceType() {
		return $this->learningResourceType;
	}

	/**
	 * Get license.
	 * 
	 * @return Property\License
	 */
	public function getLicense() {
		return $this->license;
	}

	/**
	 * Get location created.
	 * 
	 * @return Property\LocationCreated
	 */
	public function getLocationCreated() {
		return $this->locationCreated;
	}

	/**
	 * Get main entity.
	 * 
	 * @return Property\MainEntity
	 */
	public function getMainEntity() {
		return $this->mainEntity;
	}

	/**
	 * Get material.
	 * 
	 * @return Property\Material
	 */
	public function getMaterial() {
		return $this->material;
	}

	/**
	 * Get mentions.
	 * 
	 * @return Property\Mentions
	 */
	public function getMentions() {
		return $this->mentions;
	}

	/**
	 * Get offers.
	 * 
	 * @return Property\Offers
	 */
	public function getOffers() {
		return $this->offers;
	}

	/**
	 * Get position.
	 * 
	 * @return Property\Position
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * Get producer.
	 * 
	 * @return Property\Producer
	 */
	public function getProducer() {
		return $this->producer;
	}

	/**
	 * Get provider.
	 * 
	 * @return Property\Provider
	 */
	public function getProvider() {
		return $this->provider;
	}

	/**
	 * Get publication.
	 * 
	 * @return Property\Publication
	 */
	public function getPublication() {
		return $this->publication;
	}

	/**
	 * Get publisher.
	 * 
	 * @return Property\Publisher
	 */
	public function getPublisher() {
		return $this->publisher;
	}

	/**
	 * Get publishing principles.
	 * 
	 * @return Property\PublishingPrinciples
	 */
	public function getPublishingPrinciples() {
		return $this->publishingPrinciples;
	}

	/**
	 * Get recorded at.
	 * 
	 * @return Property\RecordedAt
	 */
	public function getRecordedAt() {
		return $this->recordedAt;
	}

	/**
	 * Get released event.
	 * 
	 * @return Property\ReleasedEvent
	 */
	public function getReleasedEvent() {
		return $this->releasedEvent;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\Review
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
	 * @return Property\SchemaVersion
	 */
	public function getSchemaVersion() {
		return $this->schemaVersion;
	}

	/**
	 * Get source organization.
	 * 
	 * @return Property\SourceOrganization
	 */
	public function getSourceOrganization() {
		return $this->sourceOrganization;
	}

	/**
	 * Get spatial coverage.
	 * 
	 * @return Property\SpatialCoverage
	 */
	public function getSpatialCoverage() {
		return $this->spatialCoverage;
	}

	/**
	 * Get sponsor.
	 * 
	 * @return Property\Sponsor
	 */
	public function getSponsor() {
		return $this->sponsor;
	}

	/**
	 * Get temporal coverage.
	 * 
	 * @return Property\TemporalCoverage
	 */
	public function getTemporalCoverage() {
		return $this->temporalCoverage;
	}

	/**
	 * Get text.
	 * 
	 * @return Property\Text
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Get thumbnail url.
	 * 
	 * @return Property\ThumbnailUrl
	 */
	public function getThumbnailUrl() {
		return $this->thumbnailUrl;
	}

	/**
	 * Get time required.
	 * 
	 * @return Property\TimeRequired
	 */
	public function getTimeRequired() {
		return $this->timeRequired;
	}

	/**
	 * Get translator.
	 * 
	 * @return Property\Translator
	 */
	public function getTranslator() {
		return $this->translator;
	}

	/**
	 * Get typical age range.
	 * 
	 * @return Property\TypicalAgeRange
	 */
	public function getTypicalAgeRange() {
		return $this->typicalAgeRange;
	}

	/**
	 * Get version.
	 * 
	 * @return Property\Version
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * Get video.
	 * 
	 * @return Property\Video
	 */
	public function getVideo() {
		return $this->video;
	}

	/**
	 * Get work example.
	 * 
	 * @return Property\WorkExample
	 */
	public function getWorkExample() {
		return $this->workExample;
	}

	/**
	 * Set about.
	 * 
	 * @param Property\About $about
	 * @return CreativeWork
	 */
	public function setAbout(Property\About $about) {
		$this->about = $about;

		return $this;
	}

	/**
	 * Set accessibilityapi.
	 * 
	 * @param Property\AccessibilityAPI $accessibilityAPI
	 * @return CreativeWork
	 */
	public function setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI) {
		$this->accessibilityAPI = $accessibilityAPI;

		return $this;
	}

	/**
	 * Set accessibility control.
	 * 
	 * @param Property\AccessibilityControl $accessibilityControl
	 * @return CreativeWork
	 */
	public function setAccessibilityControl(Property\AccessibilityControl $accessibilityControl) {
		$this->accessibilityControl = $accessibilityControl;

		return $this;
	}

	/**
	 * Set accessibility feature.
	 * 
	 * @param Property\AccessibilityFeature $accessibilityFeature
	 * @return CreativeWork
	 */
	public function setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature) {
		$this->accessibilityFeature = $accessibilityFeature;

		return $this;
	}

	/**
	 * Set accessibility hazard.
	 * 
	 * @param Property\AccessibilityHazard $accessibilityHazard
	 * @return CreativeWork
	 */
	public function setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard) {
		$this->accessibilityHazard = $accessibilityHazard;

		return $this;
	}

	/**
	 * Set accessibility summary.
	 * 
	 * @param Property\AccessibilitySummary $accessibilitySummary
	 * @return CreativeWork
	 */
	public function setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary) {
		$this->accessibilitySummary = $accessibilitySummary;

		return $this;
	}

	/**
	 * Set access mode.
	 * 
	 * @param Property\AccessMode $accessMode
	 * @return CreativeWork
	 */
	public function setAccessMode(Property\AccessMode $accessMode) {
		$this->accessMode = $accessMode;

		return $this;
	}

	/**
	 * Set access mode sufficient.
	 * 
	 * @param Property\AccessModeSufficient $accessModeSufficient
	 * @return CreativeWork
	 */
	public function setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient) {
		$this->accessModeSufficient = $accessModeSufficient;

		return $this;
	}

	/**
	 * Set accountable person.
	 * 
	 * @param Property\AccountablePerson $accountablePerson
	 * @return CreativeWork
	 */
	public function setAccountablePerson(Property\AccountablePerson $accountablePerson) {
		$this->accountablePerson = $accountablePerson;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRating $aggregateRating
	 * @return CreativeWork
	 */
	public function setAggregateRating(Property\AggregateRating $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set alternative headline.
	 * 
	 * @param Property\AlternativeHeadline $alternativeHeadline
	 * @return CreativeWork
	 */
	public function setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline) {
		$this->alternativeHeadline = $alternativeHeadline;

		return $this;
	}

	/**
	 * Set associated media.
	 * 
	 * @param Property\AssociatedMedia $associatedMedia
	 * @return CreativeWork
	 */
	public function setAssociatedMedia(Property\AssociatedMedia $associatedMedia) {
		$this->associatedMedia = $associatedMedia;

		return $this;
	}

	/**
	 * Set audience.
	 * 
	 * @param Property\Audience $audience
	 * @return CreativeWork
	 */
	public function setAudience(Property\Audience $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set audio.
	 * 
	 * @param Property\Audio $audio
	 * @return CreativeWork
	 */
	public function setAudio(Property\Audio $audio) {
		$this->audio = $audio;

		return $this;
	}

	/**
	 * Set author.
	 * 
	 * @param Property\Author $author
	 * @return CreativeWork
	 */
	public function setAuthor(Property\Author $author) {
		$this->author = $author;

		return $this;
	}

	/**
	 * Set award.
	 * 
	 * @param Property\Award $award
	 * @return CreativeWork
	 */
	public function setAward(Property\Award $award) {
		$this->award = $award;

		return $this;
	}

	/**
	 * Set character.
	 * 
	 * @param Property\Character $character
	 * @return CreativeWork
	 */
	public function setCharacter(Property\Character $character) {
		$this->character = $character;

		return $this;
	}

	/**
	 * Set citation.
	 * 
	 * @param Property\Citation $citation
	 * @return CreativeWork
	 */
	public function setCitation(Property\Citation $citation) {
		$this->citation = $citation;

		return $this;
	}

	/**
	 * Set comment.
	 * 
	 * @param Property\Comment $comment
	 * @return CreativeWork
	 */
	public function setComment(Property\Comment $comment) {
		$this->comment = $comment;

		return $this;
	}

	/**
	 * Set comment count.
	 * 
	 * @param Property\CommentCount $commentCount
	 * @return CreativeWork
	 */
	public function setCommentCount(Property\CommentCount $commentCount) {
		$this->commentCount = $commentCount;

		return $this;
	}

	/**
	 * Set content location.
	 * 
	 * @param Property\ContentLocation $contentLocation
	 * @return CreativeWork
	 */
	public function setContentLocation(Property\ContentLocation $contentLocation) {
		$this->contentLocation = $contentLocation;

		return $this;
	}

	/**
	 * Set content rating.
	 * 
	 * @param Property\ContentRating $contentRating
	 * @return CreativeWork
	 */
	public function setContentRating(Property\ContentRating $contentRating) {
		$this->contentRating = $contentRating;

		return $this;
	}

	/**
	 * Set contributor.
	 * 
	 * @param Property\Contributor $contributor
	 * @return CreativeWork
	 */
	public function setContributor(Property\Contributor $contributor) {
		$this->contributor = $contributor;

		return $this;
	}

	/**
	 * Set copyright holder.
	 * 
	 * @param Property\CopyrightHolder $copyrightHolder
	 * @return CreativeWork
	 */
	public function setCopyrightHolder(Property\CopyrightHolder $copyrightHolder) {
		$this->copyrightHolder = $copyrightHolder;

		return $this;
	}

	/**
	 * Set copyright year.
	 * 
	 * @param Property\CopyrightYear $copyrightYear
	 * @return CreativeWork
	 */
	public function setCopyrightYear(Property\CopyrightYear $copyrightYear) {
		$this->copyrightYear = $copyrightYear;

		return $this;
	}

	/**
	 * Set creator.
	 * 
	 * @param Property\Creator $creator
	 * @return CreativeWork
	 */
	public function setCreator(Property\Creator $creator) {
		$this->creator = $creator;

		return $this;
	}

	/**
	 * Set date created.
	 * 
	 * @param Property\DateCreated $dateCreated
	 * @return CreativeWork
	 */
	public function setDateCreated(Property\DateCreated $dateCreated) {
		$this->dateCreated = $dateCreated;

		return $this;
	}

	/**
	 * Set date modified.
	 * 
	 * @param Property\DateModified $dateModified
	 * @return CreativeWork
	 */
	public function setDateModified(Property\DateModified $dateModified) {
		$this->dateModified = $dateModified;

		return $this;
	}

	/**
	 * Set date published.
	 * 
	 * @param Property\DatePublished $datePublished
	 * @return CreativeWork
	 */
	public function setDatePublished(Property\DatePublished $datePublished) {
		$this->datePublished = $datePublished;

		return $this;
	}

	/**
	 * Set discussion url.
	 * 
	 * @param Property\DiscussionUrl $discussionUrl
	 * @return CreativeWork
	 */
	public function setDiscussionUrl(Property\DiscussionUrl $discussionUrl) {
		$this->discussionUrl = $discussionUrl;

		return $this;
	}

	/**
	 * Set editor.
	 * 
	 * @param Property\Editor $editor
	 * @return CreativeWork
	 */
	public function setEditor(Property\Editor $editor) {
		$this->editor = $editor;

		return $this;
	}

	/**
	 * Set educational alignment.
	 * 
	 * @param Property\EducationalAlignment $educationalAlignment
	 * @return CreativeWork
	 */
	public function setEducationalAlignment(Property\EducationalAlignment $educationalAlignment) {
		$this->educationalAlignment = $educationalAlignment;

		return $this;
	}

	/**
	 * Set educational use.
	 * 
	 * @param Property\EducationalUse $educationalUse
	 * @return CreativeWork
	 */
	public function setEducationalUse(Property\EducationalUse $educationalUse) {
		$this->educationalUse = $educationalUse;

		return $this;
	}

	/**
	 * Set encoding.
	 * 
	 * @param Property\Encoding $encoding
	 * @return CreativeWork
	 */
	public function setEncoding(Property\Encoding $encoding) {
		$this->encoding = $encoding;

		return $this;
	}

	/**
	 * Set example of work.
	 * 
	 * @param Property\ExampleOfWork $exampleOfWork
	 * @return CreativeWork
	 */
	public function setExampleOfWork(Property\ExampleOfWork $exampleOfWork) {
		$this->exampleOfWork = $exampleOfWork;

		return $this;
	}

	/**
	 * Set file format.
	 * 
	 * @param Property\FileFormat $fileFormat
	 * @return CreativeWork
	 */
	public function setFileFormat(Property\FileFormat $fileFormat) {
		$this->fileFormat = $fileFormat;

		return $this;
	}

	/**
	 * Set funder.
	 * 
	 * @param Property\Funder $funder
	 * @return CreativeWork
	 */
	public function setFunder(Property\Funder $funder) {
		$this->funder = $funder;

		return $this;
	}

	/**
	 * Set genre.
	 * 
	 * @param Property\Genre $genre
	 * @return CreativeWork
	 */
	public function setGenre(Property\Genre $genre) {
		$this->genre = $genre;

		return $this;
	}

	/**
	 * Set has part.
	 * 
	 * @param Property\HasPart $hasPart
	 * @return CreativeWork
	 */
	public function setHasPart(Property\HasPart $hasPart) {
		$this->hasPart = $hasPart;

		return $this;
	}

	/**
	 * Set headline.
	 * 
	 * @param Property\Headline $headline
	 * @return CreativeWork
	 */
	public function setHeadline(Property\Headline $headline) {
		$this->headline = $headline;

		return $this;
	}

	/**
	 * Set in language.
	 * 
	 * @param Property\InLanguage $inLanguage
	 * @return CreativeWork
	 */
	public function setInLanguage(Property\InLanguage $inLanguage) {
		$this->inLanguage = $inLanguage;

		return $this;
	}

	/**
	 * Set interaction statistic.
	 * 
	 * @param Property\InteractionStatistic $interactionStatistic
	 * @return CreativeWork
	 */
	public function setInteractionStatistic(Property\InteractionStatistic $interactionStatistic) {
		$this->interactionStatistic = $interactionStatistic;

		return $this;
	}

	/**
	 * Set interactivity type.
	 * 
	 * @param Property\InteractivityType $interactivityType
	 * @return CreativeWork
	 */
	public function setInteractivityType(Property\InteractivityType $interactivityType) {
		$this->interactivityType = $interactivityType;

		return $this;
	}

	/**
	 * Set is accessible for free.
	 * 
	 * @param Property\IsAccessibleForFree $isAccessibleForFree
	 * @return CreativeWork
	 */
	public function setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree) {
		$this->isAccessibleForFree = $isAccessibleForFree;

		return $this;
	}

	/**
	 * Set is based on.
	 * 
	 * @param Property\IsBasedOn $isBasedOn
	 * @return CreativeWork
	 */
	public function setIsBasedOn(Property\IsBasedOn $isBasedOn) {
		$this->isBasedOn = $isBasedOn;

		return $this;
	}

	/**
	 * Set is family friendly.
	 * 
	 * @param Property\IsFamilyFriendly $isFamilyFriendly
	 * @return CreativeWork
	 */
	public function setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly) {
		$this->isFamilyFriendly = $isFamilyFriendly;

		return $this;
	}

	/**
	 * Set is part of.
	 * 
	 * @param Property\IsPartOf $isPartOf
	 * @return CreativeWork
	 */
	public function setIsPartOf(Property\IsPartOf $isPartOf) {
		$this->isPartOf = $isPartOf;

		return $this;
	}

	/**
	 * Set keywords.
	 * 
	 * @param Property\Keywords $keywords
	 * @return CreativeWork
	 */
	public function setKeywords(Property\Keywords $keywords) {
		$this->keywords = $keywords;

		return $this;
	}

	/**
	 * Set learning resource type.
	 * 
	 * @param Property\LearningResourceType $learningResourceType
	 * @return CreativeWork
	 */
	public function setLearningResourceType(Property\LearningResourceType $learningResourceType) {
		$this->learningResourceType = $learningResourceType;

		return $this;
	}

	/**
	 * Set license.
	 * 
	 * @param Property\License $license
	 * @return CreativeWork
	 */
	public function setLicense(Property\License $license) {
		$this->license = $license;

		return $this;
	}

	/**
	 * Set location created.
	 * 
	 * @param Property\LocationCreated $locationCreated
	 * @return CreativeWork
	 */
	public function setLocationCreated(Property\LocationCreated $locationCreated) {
		$this->locationCreated = $locationCreated;

		return $this;
	}

	/**
	 * Set main entity.
	 * 
	 * @param Property\MainEntity $mainEntity
	 * @return CreativeWork
	 */
	public function setMainEntity(Property\MainEntity $mainEntity) {
		$this->mainEntity = $mainEntity;

		return $this;
	}

	/**
	 * Set material.
	 * 
	 * @param Property\Material $material
	 * @return CreativeWork
	 */
	public function setMaterial(Property\Material $material) {
		$this->material = $material;

		return $this;
	}

	/**
	 * Set mentions.
	 * 
	 * @param Property\Mentions $mentions
	 * @return CreativeWork
	 */
	public function setMentions(Property\Mentions $mentions) {
		$this->mentions = $mentions;

		return $this;
	}

	/**
	 * Set offers.
	 * 
	 * @param Property\Offers $offers
	 * @return CreativeWork
	 */
	public function setOffers(Property\Offers $offers) {
		$this->offers = $offers;

		return $this;
	}

	/**
	 * Set position.
	 * 
	 * @param Property\Position $position
	 * @return CreativeWork
	 */
	public function setPosition(Property\Position $position) {
		$this->position = $position;

		return $this;
	}

	/**
	 * Set producer.
	 * 
	 * @param Property\Producer $producer
	 * @return CreativeWork
	 */
	public function setProducer(Property\Producer $producer) {
		$this->producer = $producer;

		return $this;
	}

	/**
	 * Set provider.
	 * 
	 * @param Property\Provider $provider
	 * @return CreativeWork
	 */
	public function setProvider(Property\Provider $provider) {
		$this->provider = $provider;

		return $this;
	}

	/**
	 * Set publication.
	 * 
	 * @param Property\Publication $publication
	 * @return CreativeWork
	 */
	public function setPublication(Property\Publication $publication) {
		$this->publication = $publication;

		return $this;
	}

	/**
	 * Set publisher.
	 * 
	 * @param Property\Publisher $publisher
	 * @return CreativeWork
	 */
	public function setPublisher(Property\Publisher $publisher) {
		$this->publisher = $publisher;

		return $this;
	}

	/**
	 * Set publishing principles.
	 * 
	 * @param Property\PublishingPrinciples $publishingPrinciples
	 * @return CreativeWork
	 */
	public function setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples) {
		$this->publishingPrinciples = $publishingPrinciples;

		return $this;
	}

	/**
	 * Set recorded at.
	 * 
	 * @param Property\RecordedAt $recordedAt
	 * @return CreativeWork
	 */
	public function setRecordedAt(Property\RecordedAt $recordedAt) {
		$this->recordedAt = $recordedAt;

		return $this;
	}

	/**
	 * Set released event.
	 * 
	 * @param Property\ReleasedEvent $releasedEvent
	 * @return CreativeWork
	 */
	public function setReleasedEvent(Property\ReleasedEvent $releasedEvent) {
		$this->releasedEvent = $releasedEvent;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\Review $review
	 * @return CreativeWork
	 */
	public function setReview(Property\Review $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set schema version.
	 * 
	 * @param Property\SchemaVersion $schemaVersion
	 * @return CreativeWork
	 */
	public function setSchemaVersion(Property\SchemaVersion $schemaVersion) {
		$this->schemaVersion = $schemaVersion;

		return $this;
	}

	/**
	 * Set source organization.
	 * 
	 * @param Property\SourceOrganization $sourceOrganization
	 * @return CreativeWork
	 */
	public function setSourceOrganization(Property\SourceOrganization $sourceOrganization) {
		$this->sourceOrganization = $sourceOrganization;

		return $this;
	}

	/**
	 * Set spatial coverage.
	 * 
	 * @param Property\SpatialCoverage $spatialCoverage
	 * @return CreativeWork
	 */
	public function setSpatialCoverage(Property\SpatialCoverage $spatialCoverage) {
		$this->spatialCoverage = $spatialCoverage;

		return $this;
	}

	/**
	 * Set sponsor.
	 * 
	 * @param Property\Sponsor $sponsor
	 * @return CreativeWork
	 */
	public function setSponsor(Property\Sponsor $sponsor) {
		$this->sponsor = $sponsor;

		return $this;
	}

	/**
	 * Set temporal coverage.
	 * 
	 * @param Property\TemporalCoverage $temporalCoverage
	 * @return CreativeWork
	 */
	public function setTemporalCoverage(Property\TemporalCoverage $temporalCoverage) {
		$this->temporalCoverage = $temporalCoverage;

		return $this;
	}

	/**
	 * Set text.
	 * 
	 * @param Property\Text $text
	 * @return CreativeWork
	 */
	public function setText(Property\Text $text) {
		$this->text = $text;

		return $this;
	}

	/**
	 * Set thumbnail url.
	 * 
	 * @param Property\ThumbnailUrl $thumbnailUrl
	 * @return CreativeWork
	 */
	public function setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl) {
		$this->thumbnailUrl = $thumbnailUrl;

		return $this;
	}

	/**
	 * Set time required.
	 * 
	 * @param Property\TimeRequired $timeRequired
	 * @return CreativeWork
	 */
	public function setTimeRequired(Property\TimeRequired $timeRequired) {
		$this->timeRequired = $timeRequired;

		return $this;
	}

	/**
	 * Set translator.
	 * 
	 * @param Property\Translator $translator
	 * @return CreativeWork
	 */
	public function setTranslator(Property\Translator $translator) {
		$this->translator = $translator;

		return $this;
	}

	/**
	 * Set typical age range.
	 * 
	 * @param Property\TypicalAgeRange $typicalAgeRange
	 * @return CreativeWork
	 */
	public function setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange) {
		$this->typicalAgeRange = $typicalAgeRange;

		return $this;
	}

	/**
	 * Set version.
	 * 
	 * @param Property\Version $version
	 * @return CreativeWork
	 */
	public function setVersion(Property\Version $version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Set video.
	 * 
	 * @param Property\Video $video
	 * @return CreativeWork
	 */
	public function setVideo(Property\Video $video) {
		$this->video = $video;

		return $this;
	}

	/**
	 * Set work example.
	 * 
	 * @param Property\WorkExample $workExample
	 * @return CreativeWork
	 */
	public function setWorkExample(Property\WorkExample $workExample) {
		$this->workExample = $workExample;

		return $this;
	}
}