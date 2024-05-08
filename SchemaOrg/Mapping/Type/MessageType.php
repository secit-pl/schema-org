<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A single message from a sender to one or more organizations or people.
 * 
 * @method MessageType setAbout(Property\AboutProperty $about)
 * @method MessageType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method MessageType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method MessageType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method MessageType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method MessageType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method MessageType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method MessageType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method MessageType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method MessageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MessageType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MessageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MessageType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method MessageType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method MessageType setAudience(Property\AudienceProperty $audience)
 * @method MessageType setAudio(Property\AudioProperty $audio)
 * @method MessageType setAuthor(Property\AuthorProperty $author)
 * @method MessageType setAward(Property\AwardProperty $award)
 * @method MessageType setCharacter(Property\CharacterProperty $character)
 * @method MessageType setCitation(Property\CitationProperty $citation)
 * @method MessageType setComment(Property\CommentProperty $comment)
 * @method MessageType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method MessageType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method MessageType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method MessageType setContributor(Property\ContributorProperty $contributor)
 * @method MessageType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method MessageType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method MessageType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method MessageType setCreator(Property\CreatorProperty $creator)
 * @method MessageType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method MessageType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method MessageType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method MessageType setDescription(Property\DescriptionProperty $description)
 * @method MessageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MessageType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method MessageType setEditor(Property\EditorProperty $editor)
 * @method MessageType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method MessageType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method MessageType setEncoding(Property\EncodingProperty $encoding)
 * @method MessageType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method MessageType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method MessageType setExpires(Property\ExpiresProperty $expires)
 * @method MessageType setFunder(Property\FunderProperty $funder)
 * @method MessageType setGenre(Property\GenreProperty $genre)
 * @method MessageType setHasPart(Property\HasPartProperty $hasPart)
 * @method MessageType setHeadline(Property\HeadlineProperty $headline)
 * @method MessageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MessageType setImage(Property\ImageProperty $image)
 * @method MessageType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method MessageType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method MessageType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method MessageType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MessageType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method MessageType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method MessageType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method MessageType setKeywords(Property\KeywordsProperty $keywords)
 * @method MessageType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method MessageType setLicense(Property\LicenseProperty $license)
 * @method MessageType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method MessageType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method MessageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MessageType setMaterial(Property\MaterialProperty $material)
 * @method MessageType setMentions(Property\MentionsProperty $mentions)
 * @method MessageType setName(Property\NameProperty $name)
 * @method MessageType setOffers(Property\OffersProperty $offers)
 * @method MessageType setPosition(Property\PositionProperty $position)
 * @method MessageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MessageType setProducer(Property\ProducerProperty $producer)
 * @method MessageType setPublication(Property\PublicationProperty $publication)
 * @method MessageType setPublisher(Property\PublisherProperty $publisher)
 * @method MessageType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method MessageType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MessageType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method MessageType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method MessageType setReview(Property\ReviewProperty $review)
 * @method MessageType setSameAs(Property\SameAsProperty $sameAs)
 * @method MessageType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method MessageType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method MessageType setSpatial(Property\SpatialProperty $spatial)
 * @method MessageType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method MessageType setSponsor(Property\SponsorProperty $sponsor)
 * @method MessageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MessageType setTemporal(Property\TemporalProperty $temporal)
 * @method MessageType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method MessageType setText(Property\TextProperty $text)
 * @method MessageType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method MessageType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method MessageType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method MessageType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method MessageType setTranslator(Property\TranslatorProperty $translator)
 * @method MessageType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method MessageType setUrl(Property\UrlProperty $url)
 * @method MessageType setVersion(Property\VersionProperty $version)
 * @method MessageType setVideo(Property\VideoProperty $video)
 * @method MessageType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method MessageType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class MessageType extends CreativeWorkType {

	/**
	 * @var Property\BccRecipientProperty
	 */
	private $bccRecipient;

	/**
	 * @var Property\CcRecipientProperty
	 */
	private $ccRecipient;

	/**
	 * @var Property\DateReadProperty
	 */
	private $dateRead;

	/**
	 * @var Property\DateReceivedProperty
	 */
	private $dateReceived;

	/**
	 * @var Property\DateSentProperty
	 */
	private $dateSent;

	/**
	 * @var Property\MessageAttachmentProperty
	 */
	private $messageAttachment;

	/**
	 * @var Property\RecipientProperty
	 */
	private $recipient;

	/**
	 * @var Property\SenderProperty
	 */
	private $sender;

	/**
	 * @var Property\ToRecipientProperty
	 */
	private $toRecipient;

	/**
	 * Get bcc recipient.
	 *
	 * @return Property\BccRecipientProperty
	 */
	public function getBccRecipient() {
		return $this->bccRecipient;
	}

	/**
	 * Get cc recipient.
	 *
	 * @return Property\CcRecipientProperty
	 */
	public function getCcRecipient() {
		return $this->ccRecipient;
	}

	/**
	 * Get date read.
	 *
	 * @return Property\DateReadProperty
	 */
	public function getDateRead() {
		return $this->dateRead;
	}

	/**
	 * Get date received.
	 *
	 * @return Property\DateReceivedProperty
	 */
	public function getDateReceived() {
		return $this->dateReceived;
	}

	/**
	 * Get date sent.
	 *
	 * @return Property\DateSentProperty
	 */
	public function getDateSent() {
		return $this->dateSent;
	}

	/**
	 * Get message attachment.
	 *
	 * @return Property\MessageAttachmentProperty
	 */
	public function getMessageAttachment() {
		return $this->messageAttachment;
	}

	/**
	 * Get recipient.
	 *
	 * @return Property\RecipientProperty
	 */
	public function getRecipient() {
		return $this->recipient;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Message';
	}

	/**
	 * Get sender.
	 *
	 * @return Property\SenderProperty
	 */
	public function getSender() {
		return $this->sender;
	}

	/**
	 * Get to recipient.
	 *
	 * @return Property\ToRecipientProperty
	 */
	public function getToRecipient() {
		return $this->toRecipient;
	}

	/**
	 * Set bcc recipient.
	 *
	 * @param Property\BccRecipientProperty $bccRecipient
	 * @return MessageType
	 */
	public function setBccRecipient(Property\BccRecipientProperty $bccRecipient) {
		$this->bccRecipient = $bccRecipient;

		return $this;
	}

	/**
	 * Set cc recipient.
	 *
	 * @param Property\CcRecipientProperty $ccRecipient
	 * @return MessageType
	 */
	public function setCcRecipient(Property\CcRecipientProperty $ccRecipient) {
		$this->ccRecipient = $ccRecipient;

		return $this;
	}

	/**
	 * Set date read.
	 *
	 * @param Property\DateReadProperty $dateRead
	 * @return MessageType
	 */
	public function setDateRead(Property\DateReadProperty $dateRead) {
		$this->dateRead = $dateRead;

		return $this;
	}

	/**
	 * Set date received.
	 *
	 * @param Property\DateReceivedProperty $dateReceived
	 * @return MessageType
	 */
	public function setDateReceived(Property\DateReceivedProperty $dateReceived) {
		$this->dateReceived = $dateReceived;

		return $this;
	}

	/**
	 * Set date sent.
	 *
	 * @param Property\DateSentProperty $dateSent
	 * @return MessageType
	 */
	public function setDateSent(Property\DateSentProperty $dateSent) {
		$this->dateSent = $dateSent;

		return $this;
	}

	/**
	 * Set message attachment.
	 *
	 * @param Property\MessageAttachmentProperty $messageAttachment
	 * @return MessageType
	 */
	public function setMessageAttachment(Property\MessageAttachmentProperty $messageAttachment) {
		$this->messageAttachment = $messageAttachment;

		return $this;
	}

	/**
	 * Set recipient.
	 *
	 * @param Property\RecipientProperty $recipient
	 * @return MessageType
	 */
	public function setRecipient(Property\RecipientProperty $recipient) {
		$this->recipient = $recipient;

		return $this;
	}

	/**
	 * Set sender.
	 *
	 * @param Property\SenderProperty $sender
	 * @return MessageType
	 */
	public function setSender(Property\SenderProperty $sender) {
		$this->sender = $sender;

		return $this;
	}

	/**
	 * Set to recipient.
	 *
	 * @param Property\ToRecipientProperty $toRecipient
	 * @return MessageType
	 */
	public function setToRecipient(Property\ToRecipientProperty $toRecipient) {
		$this->toRecipient = $toRecipient;

		return $this;
	}
}