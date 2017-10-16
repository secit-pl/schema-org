<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Event.
 * 
 * @method Event setAdditionalType(Property\AdditionalType $additionalType)
 * @method Event setAlternateName(Property\AlternateName $alternateName)
 * @method Event setDescription(Property\Description $description)
 * @method Event setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Event setIdentifier(Property\Identifier $identifier)
 * @method Event setImage(Property\Image $image)
 * @method Event setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Event setName(Property\Name $name)
 * @method Event setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Event setSameAs(Property\SameAs $sameAs)
 * @method Event setUrl(Property\Url $url)
 */
class Event extends Thing {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\AggregateRating
	 */
	private $aggregateRating;

	/**
	 * @var Property\Attendee
	 */
	private $attendee;

	/**
	 * @var Property\Audience
	 */
	private $audience;

	/**
	 * @var Property\Composer
	 */
	private $composer;

	/**
	 * @var Property\Contributor
	 */
	private $contributor;

	/**
	 * @var Property\Director
	 */
	private $director;

	/**
	 * @var Property\DoorTime
	 */
	private $doorTime;

	/**
	 * @var Property\EndDate
	 */
	private $endDate;

	/**
	 * @var Property\EventStatus
	 */
	private $eventStatus;

	/**
	 * @var Property\Funder
	 */
	private $funder;

	/**
	 * @var Property\InLanguage
	 */
	private $inLanguage;

	/**
	 * @var Property\IsAccessibleForFree
	 */
	private $isAccessibleForFree;

	/**
	 * @var Property\Location
	 */
	private $location;

	/**
	 * @var Property\MaximumAttendeeCapacity
	 */
	private $maximumAttendeeCapacity;

	/**
	 * @var Property\Offers
	 */
	private $offers;

	/**
	 * @var Property\Organizer
	 */
	private $organizer;

	/**
	 * @var Property\Performer
	 */
	private $performer;

	/**
	 * @var Property\PreviousStartDate
	 */
	private $previousStartDate;

	/**
	 * @var Property\RecordedIn
	 */
	private $recordedIn;

	/**
	 * @var Property\RemainingAttendeeCapacity
	 */
	private $remainingAttendeeCapacity;

	/**
	 * @var Property\Review
	 */
	private $review;

	/**
	 * @var Property\Sponsor
	 */
	private $sponsor;

	/**
	 * @var Property\StartDate
	 */
	private $startDate;

	/**
	 * @var Property\SubEvent
	 */
	private $subEvent;

	/**
	 * @var Property\SuperEvent
	 */
	private $superEvent;

	/**
	 * @var Property\Translator
	 */
	private $translator;

	/**
	 * @var Property\TypicalAgeRange
	 */
	private $typicalAgeRange;

	/**
	 * @var Property\WorkFeatured
	 */
	private $workFeatured;

	/**
	 * @var Property\WorkPerformed
	 */
	private $workPerformed;

	/**
	 * Get actor.
	 * 
	 * @return Property\Actor
	 */
	public function getActor() {
		return $this->actor;
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
	 * Get attendee.
	 * 
	 * @return Property\Attendee
	 */
	public function getAttendee() {
		return $this->attendee;
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
	 * Get composer.
	 * 
	 * @return Property\Composer
	 */
	public function getComposer() {
		return $this->composer;
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
	 * Get director.
	 * 
	 * @return Property\Director
	 */
	public function getDirector() {
		return $this->director;
	}

	/**
	 * Get door time.
	 * 
	 * @return Property\DoorTime
	 */
	public function getDoorTime() {
		return $this->doorTime;
	}

	/**
	 * Get end date.
	 * 
	 * @return Property\EndDate
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Get event status.
	 * 
	 * @return Property\EventStatus
	 */
	public function getEventStatus() {
		return $this->eventStatus;
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
	 * Get in language.
	 * 
	 * @return Property\InLanguage
	 */
	public function getInLanguage() {
		return $this->inLanguage;
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
	 * Get location.
	 * 
	 * @return Property\Location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Get maximum attendee capacity.
	 * 
	 * @return Property\MaximumAttendeeCapacity
	 */
	public function getMaximumAttendeeCapacity() {
		return $this->maximumAttendeeCapacity;
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
	 * Get organizer.
	 * 
	 * @return Property\Organizer
	 */
	public function getOrganizer() {
		return $this->organizer;
	}

	/**
	 * Get performer.
	 * 
	 * @return Property\Performer
	 */
	public function getPerformer() {
		return $this->performer;
	}

	/**
	 * Get previous start date.
	 * 
	 * @return Property\PreviousStartDate
	 */
	public function getPreviousStartDate() {
		return $this->previousStartDate;
	}

	/**
	 * Get recorded in.
	 * 
	 * @return Property\RecordedIn
	 */
	public function getRecordedIn() {
		return $this->recordedIn;
	}

	/**
	 * Get remaining attendee capacity.
	 * 
	 * @return Property\RemainingAttendeeCapacity
	 */
	public function getRemainingAttendeeCapacity() {
		return $this->remainingAttendeeCapacity;
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
		return 'https://schema.org/Event';
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
	 * Get start date.
	 * 
	 * @return Property\StartDate
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Get sub event.
	 * 
	 * @return Property\SubEvent
	 */
	public function getSubEvent() {
		return $this->subEvent;
	}

	/**
	 * Get super event.
	 * 
	 * @return Property\SuperEvent
	 */
	public function getSuperEvent() {
		return $this->superEvent;
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
	 * Get work featured.
	 * 
	 * @return Property\WorkFeatured
	 */
	public function getWorkFeatured() {
		return $this->workFeatured;
	}

	/**
	 * Get work performed.
	 * 
	 * @return Property\WorkPerformed
	 */
	public function getWorkPerformed() {
		return $this->workPerformed;
	}

	/**
	 * Set actor.
	 * 
	 * @param Property\Actor $actor
	 * @return Event
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRating $aggregateRating
	 * @return Event
	 */
	public function setAggregateRating(Property\AggregateRating $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set attendee.
	 * 
	 * @param Property\Attendee $attendee
	 * @return Event
	 */
	public function setAttendee(Property\Attendee $attendee) {
		$this->attendee = $attendee;

		return $this;
	}

	/**
	 * Set audience.
	 * 
	 * @param Property\Audience $audience
	 * @return Event
	 */
	public function setAudience(Property\Audience $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set composer.
	 * 
	 * @param Property\Composer $composer
	 * @return Event
	 */
	public function setComposer(Property\Composer $composer) {
		$this->composer = $composer;

		return $this;
	}

	/**
	 * Set contributor.
	 * 
	 * @param Property\Contributor $contributor
	 * @return Event
	 */
	public function setContributor(Property\Contributor $contributor) {
		$this->contributor = $contributor;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return Event
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set door time.
	 * 
	 * @param Property\DoorTime $doorTime
	 * @return Event
	 */
	public function setDoorTime(Property\DoorTime $doorTime) {
		$this->doorTime = $doorTime;

		return $this;
	}

	/**
	 * Set end date.
	 * 
	 * @param Property\EndDate $endDate
	 * @return Event
	 */
	public function setEndDate(Property\EndDate $endDate) {
		$this->endDate = $endDate;

		return $this;
	}

	/**
	 * Set event status.
	 * 
	 * @param Property\EventStatus $eventStatus
	 * @return Event
	 */
	public function setEventStatus(Property\EventStatus $eventStatus) {
		$this->eventStatus = $eventStatus;

		return $this;
	}

	/**
	 * Set funder.
	 * 
	 * @param Property\Funder $funder
	 * @return Event
	 */
	public function setFunder(Property\Funder $funder) {
		$this->funder = $funder;

		return $this;
	}

	/**
	 * Set in language.
	 * 
	 * @param Property\InLanguage $inLanguage
	 * @return Event
	 */
	public function setInLanguage(Property\InLanguage $inLanguage) {
		$this->inLanguage = $inLanguage;

		return $this;
	}

	/**
	 * Set is accessible for free.
	 * 
	 * @param Property\IsAccessibleForFree $isAccessibleForFree
	 * @return Event
	 */
	public function setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree) {
		$this->isAccessibleForFree = $isAccessibleForFree;

		return $this;
	}

	/**
	 * Set location.
	 * 
	 * @param Property\Location $location
	 * @return Event
	 */
	public function setLocation(Property\Location $location) {
		$this->location = $location;

		return $this;
	}

	/**
	 * Set maximum attendee capacity.
	 * 
	 * @param Property\MaximumAttendeeCapacity $maximumAttendeeCapacity
	 * @return Event
	 */
	public function setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity) {
		$this->maximumAttendeeCapacity = $maximumAttendeeCapacity;

		return $this;
	}

	/**
	 * Set offers.
	 * 
	 * @param Property\Offers $offers
	 * @return Event
	 */
	public function setOffers(Property\Offers $offers) {
		$this->offers = $offers;

		return $this;
	}

	/**
	 * Set organizer.
	 * 
	 * @param Property\Organizer $organizer
	 * @return Event
	 */
	public function setOrganizer(Property\Organizer $organizer) {
		$this->organizer = $organizer;

		return $this;
	}

	/**
	 * Set performer.
	 * 
	 * @param Property\Performer $performer
	 * @return Event
	 */
	public function setPerformer(Property\Performer $performer) {
		$this->performer = $performer;

		return $this;
	}

	/**
	 * Set previous start date.
	 * 
	 * @param Property\PreviousStartDate $previousStartDate
	 * @return Event
	 */
	public function setPreviousStartDate(Property\PreviousStartDate $previousStartDate) {
		$this->previousStartDate = $previousStartDate;

		return $this;
	}

	/**
	 * Set recorded in.
	 * 
	 * @param Property\RecordedIn $recordedIn
	 * @return Event
	 */
	public function setRecordedIn(Property\RecordedIn $recordedIn) {
		$this->recordedIn = $recordedIn;

		return $this;
	}

	/**
	 * Set remaining attendee capacity.
	 * 
	 * @param Property\RemainingAttendeeCapacity $remainingAttendeeCapacity
	 * @return Event
	 */
	public function setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacity $remainingAttendeeCapacity) {
		$this->remainingAttendeeCapacity = $remainingAttendeeCapacity;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\Review $review
	 * @return Event
	 */
	public function setReview(Property\Review $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set sponsor.
	 * 
	 * @param Property\Sponsor $sponsor
	 * @return Event
	 */
	public function setSponsor(Property\Sponsor $sponsor) {
		$this->sponsor = $sponsor;

		return $this;
	}

	/**
	 * Set start date.
	 * 
	 * @param Property\StartDate $startDate
	 * @return Event
	 */
	public function setStartDate(Property\StartDate $startDate) {
		$this->startDate = $startDate;

		return $this;
	}

	/**
	 * Set sub event.
	 * 
	 * @param Property\SubEvent $subEvent
	 * @return Event
	 */
	public function setSubEvent(Property\SubEvent $subEvent) {
		$this->subEvent = $subEvent;

		return $this;
	}

	/**
	 * Set super event.
	 * 
	 * @param Property\SuperEvent $superEvent
	 * @return Event
	 */
	public function setSuperEvent(Property\SuperEvent $superEvent) {
		$this->superEvent = $superEvent;

		return $this;
	}

	/**
	 * Set translator.
	 * 
	 * @param Property\Translator $translator
	 * @return Event
	 */
	public function setTranslator(Property\Translator $translator) {
		$this->translator = $translator;

		return $this;
	}

	/**
	 * Set typical age range.
	 * 
	 * @param Property\TypicalAgeRange $typicalAgeRange
	 * @return Event
	 */
	public function setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange) {
		$this->typicalAgeRange = $typicalAgeRange;

		return $this;
	}

	/**
	 * Set work featured.
	 * 
	 * @param Property\WorkFeatured $workFeatured
	 * @return Event
	 */
	public function setWorkFeatured(Property\WorkFeatured $workFeatured) {
		$this->workFeatured = $workFeatured;

		return $this;
	}

	/**
	 * Set work performed.
	 * 
	 * @param Property\WorkPerformed $workPerformed
	 * @return Event
	 */
	public function setWorkPerformed(Property\WorkPerformed $workPerformed) {
		$this->workPerformed = $workPerformed;

		return $this;
	}
}