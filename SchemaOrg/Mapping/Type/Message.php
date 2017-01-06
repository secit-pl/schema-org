<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Message.
 * 
 * @method Message setAbout(Property\About $about)
 * @method Message setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Message setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Message setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Message setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Message setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Message setAdditionalType(Property\AdditionalType $additionalType)
 * @method Message setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Message setAlternateName(Property\AlternateName $alternateName)
 * @method Message setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Message setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Message setAudience(Property\Audience $audience)
 * @method Message setAudio(Property\Audio $audio)
 * @method Message setAuthor(Property\Author $author)
 * @method Message setAward(Property\Award $award)
 * @method Message setCharacter(Property\Character $character)
 * @method Message setCitation(Property\Citation $citation)
 * @method Message setComment(Property\Comment $comment)
 * @method Message setCommentCount(Property\CommentCount $commentCount)
 * @method Message setContentLocation(Property\ContentLocation $contentLocation)
 * @method Message setContentRating(Property\ContentRating $contentRating)
 * @method Message setContributor(Property\Contributor $contributor)
 * @method Message setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Message setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Message setCreator(Property\Creator $creator)
 * @method Message setDateCreated(Property\DateCreated $dateCreated)
 * @method Message setDateModified(Property\DateModified $dateModified)
 * @method Message setDatePublished(Property\DatePublished $datePublished)
 * @method Message setDescription(Property\Description $description)
 * @method Message setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Message setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Message setEditor(Property\Editor $editor)
 * @method Message setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Message setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Message setEncoding(Property\Encoding $encoding)
 * @method Message setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Message setFileFormat(Property\FileFormat $fileFormat)
 * @method Message setFunder(Property\Funder $funder)
 * @method Message setGenre(Property\Genre $genre)
 * @method Message setHasPart(Property\HasPart $hasPart)
 * @method Message setHeadline(Property\Headline $headline)
 * @method Message setImage(Property\Image $image)
 * @method Message setInLanguage(Property\InLanguage $inLanguage)
 * @method Message setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Message setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Message setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Message setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Message setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Message setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Message setKeywords(Property\Keywords $keywords)
 * @method Message setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Message setLicense(Property\License $license)
 * @method Message setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Message setMainEntity(Property\MainEntity $mainEntity)
 * @method Message setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Message setMentions(Property\Mentions $mentions)
 * @method Message setName(Property\Name $name)
 * @method Message setOffers(Property\Offers $offers)
 * @method Message setPosition(Property\Position $position)
 * @method Message setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Message setProducer(Property\Producer $producer)
 * @method Message setProvider(Property\Provider $provider)
 * @method Message setPublication(Property\Publication $publication)
 * @method Message setPublisher(Property\Publisher $publisher)
 * @method Message setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Message setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Message setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Message setReview(Property\Review $review)
 * @method Message setSameAs(Property\SameAs $sameAs)
 * @method Message setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Message setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Message setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Message setSponsor(Property\Sponsor $sponsor)
 * @method Message setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Message setText(Property\Text $text)
 * @method Message setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Message setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Message setTranslator(Property\Translator $translator)
 * @method Message setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Message setUrl(Property\Url $url)
 * @method Message setVersion(Property\Version $version)
 * @method Message setVideo(Property\Video $video)
 * @method Message setWorkExample(Property\WorkExample $workExample)
 */
class Message extends CreativeWork {

	/**
	 * @var Property\DateRead
	 */
	private $dateRead;

	/**
	 * @var Property\DateReceived
	 */
	private $dateReceived;

	/**
	 * @var Property\DateSent
	 */
	private $dateSent;

	/**
	 * @var Property\MessageAttachment
	 */
	private $messageAttachment;

	/**
	 * @var Property\Recipient
	 */
	private $recipient;

	/**
	 * @var Property\Sender
	 */
	private $sender;

	/**
	 * Get date read.
	 * 
	 * @return Property\DateRead
	 */
	public function getDateRead() {
		return $this->dateRead;
	}

	/**
	 * Get date received.
	 * 
	 * @return Property\DateReceived
	 */
	public function getDateReceived() {
		return $this->dateReceived;
	}

	/**
	 * Get date sent.
	 * 
	 * @return Property\DateSent
	 */
	public function getDateSent() {
		return $this->dateSent;
	}

	/**
	 * Get message attachment.
	 * 
	 * @return Property\MessageAttachment
	 */
	public function getMessageAttachment() {
		return $this->messageAttachment;
	}

	/**
	 * Get recipient.
	 * 
	 * @return Property\Recipient
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
	 * @return Property\Sender
	 */
	public function getSender() {
		return $this->sender;
	}

	/**
	 * Set date read.
	 * 
	 * @param Property\DateRead $dateRead
	 * @return Message
	 */
	public function setDateRead(Property\DateRead $dateRead) {
		$this->dateRead = $dateRead;

		return $this;
	}

	/**
	 * Set date received.
	 * 
	 * @param Property\DateReceived $dateReceived
	 * @return Message
	 */
	public function setDateReceived(Property\DateReceived $dateReceived) {
		$this->dateReceived = $dateReceived;

		return $this;
	}

	/**
	 * Set date sent.
	 * 
	 * @param Property\DateSent $dateSent
	 * @return Message
	 */
	public function setDateSent(Property\DateSent $dateSent) {
		$this->dateSent = $dateSent;

		return $this;
	}

	/**
	 * Set message attachment.
	 * 
	 * @param Property\MessageAttachment $messageAttachment
	 * @return Message
	 */
	public function setMessageAttachment(Property\MessageAttachment $messageAttachment) {
		$this->messageAttachment = $messageAttachment;

		return $this;
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return Message
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}

	/**
	 * Set sender.
	 * 
	 * @param Property\Sender $sender
	 * @return Message
	 */
	public function setSender(Property\Sender $sender) {
		$this->sender = $sender;

		return $this;
	}
}