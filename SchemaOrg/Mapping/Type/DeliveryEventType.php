<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An event involving the delivery of an item.
 * 
 * @method DeliveryEventType setAbout(Property\AboutProperty $about)
 * @method DeliveryEventType setActor(Property\ActorProperty $actor)
 * @method DeliveryEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DeliveryEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DeliveryEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DeliveryEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method DeliveryEventType setAudience(Property\AudienceProperty $audience)
 * @method DeliveryEventType setComposer(Property\ComposerProperty $composer)
 * @method DeliveryEventType setContributor(Property\ContributorProperty $contributor)
 * @method DeliveryEventType setDescription(Property\DescriptionProperty $description)
 * @method DeliveryEventType setDirector(Property\DirectorProperty $director)
 * @method DeliveryEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DeliveryEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method DeliveryEventType setDuration(Property\DurationProperty $duration)
 * @method DeliveryEventType setEndDate(Property\EndDateProperty $endDate)
 * @method DeliveryEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method DeliveryEventType setFunder(Property\FunderProperty $funder)
 * @method DeliveryEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DeliveryEventType setImage(Property\ImageProperty $image)
 * @method DeliveryEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method DeliveryEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method DeliveryEventType setKeywords(Property\KeywordsProperty $keywords)
 * @method DeliveryEventType setLocation(Property\LocationProperty $location)
 * @method DeliveryEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DeliveryEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method DeliveryEventType setName(Property\NameProperty $name)
 * @method DeliveryEventType setOffers(Property\OffersProperty $offers)
 * @method DeliveryEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method DeliveryEventType setPerformer(Property\PerformerProperty $performer)
 * @method DeliveryEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DeliveryEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method DeliveryEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method DeliveryEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method DeliveryEventType setReview(Property\ReviewProperty $review)
 * @method DeliveryEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method DeliveryEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method DeliveryEventType setStartDate(Property\StartDateProperty $startDate)
 * @method DeliveryEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method DeliveryEventType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DeliveryEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method DeliveryEventType setTranslator(Property\TranslatorProperty $translator)
 * @method DeliveryEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method DeliveryEventType setUrl(Property\UrlProperty $url)
 * @method DeliveryEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method DeliveryEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class DeliveryEventType extends EventType {

	/**
	 * @var Property\AccessCodeProperty
	 */
	private $accessCode;

	/**
	 * @var Property\AvailableFromProperty
	 */
	private $availableFrom;

	/**
	 * @var Property\AvailableThroughProperty
	 */
	private $availableThrough;

	/**
	 * @var Property\HasDeliveryMethodProperty
	 */
	private $hasDeliveryMethod;

	/**
	 * Get access code.
	 *
	 * @return Property\AccessCodeProperty
	 */
	public function getAccessCode() {
		return $this->accessCode;
	}

	/**
	 * Get available from.
	 *
	 * @return Property\AvailableFromProperty
	 */
	public function getAvailableFrom() {
		return $this->availableFrom;
	}

	/**
	 * Get available through.
	 *
	 * @return Property\AvailableThroughProperty
	 */
	public function getAvailableThrough() {
		return $this->availableThrough;
	}

	/**
	 * Get has delivery method.
	 *
	 * @return Property\HasDeliveryMethodProperty
	 */
	public function getHasDeliveryMethod() {
		return $this->hasDeliveryMethod;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DeliveryEvent';
	}

	/**
	 * Set access code.
	 *
	 * @param Property\AccessCodeProperty $accessCode
	 * @return DeliveryEventType
	 */
	public function setAccessCode(Property\AccessCodeProperty $accessCode) {
		$this->accessCode = $accessCode;

		return $this;
	}

	/**
	 * Set available from.
	 *
	 * @param Property\AvailableFromProperty $availableFrom
	 * @return DeliveryEventType
	 */
	public function setAvailableFrom(Property\AvailableFromProperty $availableFrom) {
		$this->availableFrom = $availableFrom;

		return $this;
	}

	/**
	 * Set available through.
	 *
	 * @param Property\AvailableThroughProperty $availableThrough
	 * @return DeliveryEventType
	 */
	public function setAvailableThrough(Property\AvailableThroughProperty $availableThrough) {
		$this->availableThrough = $availableThrough;

		return $this;
	}

	/**
	 * Set has delivery method.
	 *
	 * @param Property\HasDeliveryMethodProperty $hasDeliveryMethod
	 * @return DeliveryEventType
	 */
	public function setHasDeliveryMethod(Property\HasDeliveryMethodProperty $hasDeliveryMethod) {
		$this->hasDeliveryMethod = $hasDeliveryMethod;

		return $this;
	}
}