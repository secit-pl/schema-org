<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EventType.
 * 
 * @method EventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EventType setDescription(Property\DescriptionProperty $description)
 * @method EventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EventType setImage(Property\ImageProperty $image)
 * @method EventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EventType setName(Property\NameProperty $name)
 * @method EventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EventType setSameAs(Property\SameAsProperty $sameAs)
 * @method EventType setUrl(Property\UrlProperty $url)
 */
class EventType extends ThingType {

	/**
	 * @var Property\ActorProperty
	 */
	private $actor;

	/**
	 * @var Property\AggregateRatingProperty
	 */
	private $aggregateRating;

	/**
	 * @var Property\AttendeeProperty
	 */
	private $attendee;

	/**
	 * @var Property\AudienceProperty
	 */
	private $audience;

	/**
	 * @var Property\ComposerProperty
	 */
	private $composer;

	/**
	 * @var Property\ContributorProperty
	 */
	private $contributor;

	/**
	 * @var Property\DirectorProperty
	 */
	private $director;

	/**
	 * @var Property\DoorTimeProperty
	 */
	private $doorTime;

	/**
	 * @var Property\EndDateProperty
	 */
	private $endDate;

	/**
	 * @var Property\EventStatusProperty
	 */
	private $eventStatus;

	/**
	 * @var Property\FunderProperty
	 */
	private $funder;

	/**
	 * @var Property\InLanguageProperty
	 */
	private $inLanguage;

	/**
	 * @var Property\IsAccessibleForFreeProperty
	 */
	private $isAccessibleForFree;

	/**
	 * @var Property\LocationProperty
	 */
	private $location;

	/**
	 * @var Property\MaximumAttendeeCapacityProperty
	 */
	private $maximumAttendeeCapacity;

	/**
	 * @var Property\OffersProperty
	 */
	private $offers;

	/**
	 * @var Property\OrganizerProperty
	 */
	private $organizer;

	/**
	 * @var Property\PerformerProperty
	 */
	private $performer;

	/**
	 * @var Property\PreviousStartDateProperty
	 */
	private $previousStartDate;

	/**
	 * @var Property\RecordedInProperty
	 */
	private $recordedIn;

	/**
	 * @var Property\RemainingAttendeeCapacityProperty
	 */
	private $remainingAttendeeCapacity;

	/**
	 * @var Property\ReviewProperty
	 */
	private $review;

	/**
	 * @var Property\SponsorProperty
	 */
	private $sponsor;

	/**
	 * @var Property\StartDateProperty
	 */
	private $startDate;

	/**
	 * @var Property\SubEventProperty
	 */
	private $subEvent;

	/**
	 * @var Property\SuperEventProperty
	 */
	private $superEvent;

	/**
	 * @var Property\TranslatorProperty
	 */
	private $translator;

	/**
	 * @var Property\TypicalAgeRangeProperty
	 */
	private $typicalAgeRange;

	/**
	 * @var Property\WorkFeaturedProperty
	 */
	private $workFeatured;

	/**
	 * @var Property\WorkPerformedProperty
	 */
	private $workPerformed;

	/**
	 * Get actor.
	 * 
	 * @return Property\ActorProperty
	 */
	public function getActor() {
		return $this->actor;
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
	 * Get attendee.
	 * 
	 * @return Property\AttendeeProperty
	 */
	public function getAttendee() {
		return $this->attendee;
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
	 * Get composer.
	 * 
	 * @return Property\ComposerProperty
	 */
	public function getComposer() {
		return $this->composer;
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
	 * Get director.
	 * 
	 * @return Property\DirectorProperty
	 */
	public function getDirector() {
		return $this->director;
	}

	/**
	 * Get door time.
	 * 
	 * @return Property\DoorTimeProperty
	 */
	public function getDoorTime() {
		return $this->doorTime;
	}

	/**
	 * Get end date.
	 * 
	 * @return Property\EndDateProperty
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Get event status.
	 * 
	 * @return Property\EventStatusProperty
	 */
	public function getEventStatus() {
		return $this->eventStatus;
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
	 * Get in language.
	 * 
	 * @return Property\InLanguageProperty
	 */
	public function getInLanguage() {
		return $this->inLanguage;
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
	 * Get location.
	 * 
	 * @return Property\LocationProperty
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Get maximum attendee capacity.
	 * 
	 * @return Property\MaximumAttendeeCapacityProperty
	 */
	public function getMaximumAttendeeCapacity() {
		return $this->maximumAttendeeCapacity;
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
	 * Get organizer.
	 * 
	 * @return Property\OrganizerProperty
	 */
	public function getOrganizer() {
		return $this->organizer;
	}

	/**
	 * Get performer.
	 * 
	 * @return Property\PerformerProperty
	 */
	public function getPerformer() {
		return $this->performer;
	}

	/**
	 * Get previous start date.
	 * 
	 * @return Property\PreviousStartDateProperty
	 */
	public function getPreviousStartDate() {
		return $this->previousStartDate;
	}

	/**
	 * Get recorded in.
	 * 
	 * @return Property\RecordedInProperty
	 */
	public function getRecordedIn() {
		return $this->recordedIn;
	}

	/**
	 * Get remaining attendee capacity.
	 * 
	 * @return Property\RemainingAttendeeCapacityProperty
	 */
	public function getRemainingAttendeeCapacity() {
		return $this->remainingAttendeeCapacity;
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
		return 'https://schema.org/Event';
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
	 * Get start date.
	 * 
	 * @return Property\StartDateProperty
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Get sub event.
	 * 
	 * @return Property\SubEventProperty
	 */
	public function getSubEvent() {
		return $this->subEvent;
	}

	/**
	 * Get super event.
	 * 
	 * @return Property\SuperEventProperty
	 */
	public function getSuperEvent() {
		return $this->superEvent;
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
	 * Get work featured.
	 * 
	 * @return Property\WorkFeaturedProperty
	 */
	public function getWorkFeatured() {
		return $this->workFeatured;
	}

	/**
	 * Get work performed.
	 * 
	 * @return Property\WorkPerformedProperty
	 */
	public function getWorkPerformed() {
		return $this->workPerformed;
	}

	/**
	 * Set actor.
	 * 
	 * @param Property\ActorProperty $actor
	 * @return EventType
	 */
	public function setActor(Property\ActorProperty $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRatingProperty $aggregateRating
	 * @return EventType
	 */
	public function setAggregateRating(Property\AggregateRatingProperty $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set attendee.
	 * 
	 * @param Property\AttendeeProperty $attendee
	 * @return EventType
	 */
	public function setAttendee(Property\AttendeeProperty $attendee) {
		$this->attendee = $attendee;

		return $this;
	}

	/**
	 * Set audience.
	 * 
	 * @param Property\AudienceProperty $audience
	 * @return EventType
	 */
	public function setAudience(Property\AudienceProperty $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set composer.
	 * 
	 * @param Property\ComposerProperty $composer
	 * @return EventType
	 */
	public function setComposer(Property\ComposerProperty $composer) {
		$this->composer = $composer;

		return $this;
	}

	/**
	 * Set contributor.
	 * 
	 * @param Property\ContributorProperty $contributor
	 * @return EventType
	 */
	public function setContributor(Property\ContributorProperty $contributor) {
		$this->contributor = $contributor;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\DirectorProperty $director
	 * @return EventType
	 */
	public function setDirector(Property\DirectorProperty $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set door time.
	 * 
	 * @param Property\DoorTimeProperty $doorTime
	 * @return EventType
	 */
	public function setDoorTime(Property\DoorTimeProperty $doorTime) {
		$this->doorTime = $doorTime;

		return $this;
	}

	/**
	 * Set end date.
	 * 
	 * @param Property\EndDateProperty $endDate
	 * @return EventType
	 */
	public function setEndDate(Property\EndDateProperty $endDate) {
		$this->endDate = $endDate;

		return $this;
	}

	/**
	 * Set event status.
	 * 
	 * @param Property\EventStatusProperty $eventStatus
	 * @return EventType
	 */
	public function setEventStatus(Property\EventStatusProperty $eventStatus) {
		$this->eventStatus = $eventStatus;

		return $this;
	}

	/**
	 * Set funder.
	 * 
	 * @param Property\FunderProperty $funder
	 * @return EventType
	 */
	public function setFunder(Property\FunderProperty $funder) {
		$this->funder = $funder;

		return $this;
	}

	/**
	 * Set in language.
	 * 
	 * @param Property\InLanguageProperty $inLanguage
	 * @return EventType
	 */
	public function setInLanguage(Property\InLanguageProperty $inLanguage) {
		$this->inLanguage = $inLanguage;

		return $this;
	}

	/**
	 * Set is accessible for free.
	 * 
	 * @param Property\IsAccessibleForFreeProperty $isAccessibleForFree
	 * @return EventType
	 */
	public function setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree) {
		$this->isAccessibleForFree = $isAccessibleForFree;

		return $this;
	}

	/**
	 * Set location.
	 * 
	 * @param Property\LocationProperty $location
	 * @return EventType
	 */
	public function setLocation(Property\LocationProperty $location) {
		$this->location = $location;

		return $this;
	}

	/**
	 * Set maximum attendee capacity.
	 * 
	 * @param Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity
	 * @return EventType
	 */
	public function setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity) {
		$this->maximumAttendeeCapacity = $maximumAttendeeCapacity;

		return $this;
	}

	/**
	 * Set offers.
	 * 
	 * @param Property\OffersProperty $offers
	 * @return EventType
	 */
	public function setOffers(Property\OffersProperty $offers) {
		$this->offers = $offers;

		return $this;
	}

	/**
	 * Set organizer.
	 * 
	 * @param Property\OrganizerProperty $organizer
	 * @return EventType
	 */
	public function setOrganizer(Property\OrganizerProperty $organizer) {
		$this->organizer = $organizer;

		return $this;
	}

	/**
	 * Set performer.
	 * 
	 * @param Property\PerformerProperty $performer
	 * @return EventType
	 */
	public function setPerformer(Property\PerformerProperty $performer) {
		$this->performer = $performer;

		return $this;
	}

	/**
	 * Set previous start date.
	 * 
	 * @param Property\PreviousStartDateProperty $previousStartDate
	 * @return EventType
	 */
	public function setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate) {
		$this->previousStartDate = $previousStartDate;

		return $this;
	}

	/**
	 * Set recorded in.
	 * 
	 * @param Property\RecordedInProperty $recordedIn
	 * @return EventType
	 */
	public function setRecordedIn(Property\RecordedInProperty $recordedIn) {
		$this->recordedIn = $recordedIn;

		return $this;
	}

	/**
	 * Set remaining attendee capacity.
	 * 
	 * @param Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity
	 * @return EventType
	 */
	public function setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity) {
		$this->remainingAttendeeCapacity = $remainingAttendeeCapacity;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\ReviewProperty $review
	 * @return EventType
	 */
	public function setReview(Property\ReviewProperty $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set sponsor.
	 * 
	 * @param Property\SponsorProperty $sponsor
	 * @return EventType
	 */
	public function setSponsor(Property\SponsorProperty $sponsor) {
		$this->sponsor = $sponsor;

		return $this;
	}

	/**
	 * Set start date.
	 * 
	 * @param Property\StartDateProperty $startDate
	 * @return EventType
	 */
	public function setStartDate(Property\StartDateProperty $startDate) {
		$this->startDate = $startDate;

		return $this;
	}

	/**
	 * Set sub event.
	 * 
	 * @param Property\SubEventProperty $subEvent
	 * @return EventType
	 */
	public function setSubEvent(Property\SubEventProperty $subEvent) {
		$this->subEvent = $subEvent;

		return $this;
	}

	/**
	 * Set super event.
	 * 
	 * @param Property\SuperEventProperty $superEvent
	 * @return EventType
	 */
	public function setSuperEvent(Property\SuperEventProperty $superEvent) {
		$this->superEvent = $superEvent;

		return $this;
	}

	/**
	 * Set translator.
	 * 
	 * @param Property\TranslatorProperty $translator
	 * @return EventType
	 */
	public function setTranslator(Property\TranslatorProperty $translator) {
		$this->translator = $translator;

		return $this;
	}

	/**
	 * Set typical age range.
	 * 
	 * @param Property\TypicalAgeRangeProperty $typicalAgeRange
	 * @return EventType
	 */
	public function setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange) {
		$this->typicalAgeRange = $typicalAgeRange;

		return $this;
	}

	/**
	 * Set work featured.
	 * 
	 * @param Property\WorkFeaturedProperty $workFeatured
	 * @return EventType
	 */
	public function setWorkFeatured(Property\WorkFeaturedProperty $workFeatured) {
		$this->workFeatured = $workFeatured;

		return $this;
	}

	/**
	 * Set work performed.
	 * 
	 * @param Property\WorkPerformedProperty $workPerformed
	 * @return EventType
	 */
	public function setWorkPerformed(Property\WorkPerformedProperty $workPerformed) {
		$this->workPerformed = $workPerformed;

		return $this;
	}
}