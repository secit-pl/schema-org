<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use Action-based vocabulary, alongside types such as Comment.
 * 
 * @method UserCommentsType setAbout(Property\AboutProperty $about)
 * @method UserCommentsType setActor(Property\ActorProperty $actor)
 * @method UserCommentsType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UserCommentsType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method UserCommentsType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UserCommentsType setAttendee(Property\AttendeeProperty $attendee)
 * @method UserCommentsType setAudience(Property\AudienceProperty $audience)
 * @method UserCommentsType setComposer(Property\ComposerProperty $composer)
 * @method UserCommentsType setContributor(Property\ContributorProperty $contributor)
 * @method UserCommentsType setDescription(Property\DescriptionProperty $description)
 * @method UserCommentsType setDirector(Property\DirectorProperty $director)
 * @method UserCommentsType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UserCommentsType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method UserCommentsType setDuration(Property\DurationProperty $duration)
 * @method UserCommentsType setEndDate(Property\EndDateProperty $endDate)
 * @method UserCommentsType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method UserCommentsType setFunder(Property\FunderProperty $funder)
 * @method UserCommentsType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UserCommentsType setImage(Property\ImageProperty $image)
 * @method UserCommentsType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method UserCommentsType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method UserCommentsType setKeywords(Property\KeywordsProperty $keywords)
 * @method UserCommentsType setLocation(Property\LocationProperty $location)
 * @method UserCommentsType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UserCommentsType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method UserCommentsType setName(Property\NameProperty $name)
 * @method UserCommentsType setOffers(Property\OffersProperty $offers)
 * @method UserCommentsType setOrganizer(Property\OrganizerProperty $organizer)
 * @method UserCommentsType setPerformer(Property\PerformerProperty $performer)
 * @method UserCommentsType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UserCommentsType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method UserCommentsType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method UserCommentsType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method UserCommentsType setReview(Property\ReviewProperty $review)
 * @method UserCommentsType setSameAs(Property\SameAsProperty $sameAs)
 * @method UserCommentsType setSponsor(Property\SponsorProperty $sponsor)
 * @method UserCommentsType setStartDate(Property\StartDateProperty $startDate)
 * @method UserCommentsType setSubEvent(Property\SubEventProperty $subEvent)
 * @method UserCommentsType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UserCommentsType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method UserCommentsType setTranslator(Property\TranslatorProperty $translator)
 * @method UserCommentsType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method UserCommentsType setUrl(Property\UrlProperty $url)
 * @method UserCommentsType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method UserCommentsType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class UserCommentsType extends UserInteractionType {

	/**
	 * @var Property\CommentTextProperty
	 */
	private $commentText;

	/**
	 * @var Property\CommentTimeProperty
	 */
	private $commentTime;

	/**
	 * @var Property\CreatorProperty
	 */
	private $creator;

	/**
	 * @var Property\DiscussesProperty
	 */
	private $discusses;

	/**
	 * @var Property\ReplyToUrlProperty
	 */
	private $replyToUrl;

	/**
	 * Get comment text.
	 *
	 * @return Property\CommentTextProperty
	 */
	public function getCommentText() {
		return $this->commentText;
	}

	/**
	 * Get comment time.
	 *
	 * @return Property\CommentTimeProperty
	 */
	public function getCommentTime() {
		return $this->commentTime;
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
	 * Get discusses.
	 *
	 * @return Property\DiscussesProperty
	 */
	public function getDiscusses() {
		return $this->discusses;
	}

	/**
	 * Get reply to url.
	 *
	 * @return Property\ReplyToUrlProperty
	 */
	public function getReplyToUrl() {
		return $this->replyToUrl;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UserComments';
	}

	/**
	 * Set comment text.
	 *
	 * @param Property\CommentTextProperty $commentText
	 * @return UserCommentsType
	 */
	public function setCommentText(Property\CommentTextProperty $commentText) {
		$this->commentText = $commentText;

		return $this;
	}

	/**
	 * Set comment time.
	 *
	 * @param Property\CommentTimeProperty $commentTime
	 * @return UserCommentsType
	 */
	public function setCommentTime(Property\CommentTimeProperty $commentTime) {
		$this->commentTime = $commentTime;

		return $this;
	}

	/**
	 * Set creator.
	 *
	 * @param Property\CreatorProperty $creator
	 * @return UserCommentsType
	 */
	public function setCreator(Property\CreatorProperty $creator) {
		$this->creator = $creator;

		return $this;
	}

	/**
	 * Set discusses.
	 *
	 * @param Property\DiscussesProperty $discusses
	 * @return UserCommentsType
	 */
	public function setDiscusses(Property\DiscussesProperty $discusses) {
		$this->discusses = $discusses;

		return $this;
	}

	/**
	 * Set reply to url.
	 *
	 * @param Property\ReplyToUrlProperty $replyToUrl
	 * @return UserCommentsType
	 */
	public function setReplyToUrl(Property\ReplyToUrlProperty $replyToUrl) {
		$this->replyToUrl = $replyToUrl;

		return $this;
	}
}