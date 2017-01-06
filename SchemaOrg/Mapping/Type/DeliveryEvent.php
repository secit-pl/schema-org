<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DeliveryEvent.
 * 
 * @method DeliveryEvent setActor(Property\Actor $actor)
 * @method DeliveryEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method DeliveryEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method DeliveryEvent setAlternateName(Property\AlternateName $alternateName)
 * @method DeliveryEvent setAttendee(Property\Attendee $attendee)
 * @method DeliveryEvent setComposer(Property\Composer $composer)
 * @method DeliveryEvent setContributor(Property\Contributor $contributor)
 * @method DeliveryEvent setDescription(Property\Description $description)
 * @method DeliveryEvent setDirector(Property\Director $director)
 * @method DeliveryEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DeliveryEvent setDoorTime(Property\DoorTime $doorTime)
 * @method DeliveryEvent setDuration(Property\Duration $duration)
 * @method DeliveryEvent setEndDate(Property\EndDate $endDate)
 * @method DeliveryEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method DeliveryEvent setFunder(Property\Funder $funder)
 * @method DeliveryEvent setImage(Property\Image $image)
 * @method DeliveryEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method DeliveryEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method DeliveryEvent setLocation(Property\Location $location)
 * @method DeliveryEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DeliveryEvent setName(Property\Name $name)
 * @method DeliveryEvent setOffers(Property\Offers $offers)
 * @method DeliveryEvent setOrganizer(Property\Organizer $organizer)
 * @method DeliveryEvent setPerformer(Property\Performer $performer)
 * @method DeliveryEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DeliveryEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method DeliveryEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method DeliveryEvent setReview(Property\Review $review)
 * @method DeliveryEvent setSameAs(Property\SameAs $sameAs)
 * @method DeliveryEvent setSponsor(Property\Sponsor $sponsor)
 * @method DeliveryEvent setStartDate(Property\StartDate $startDate)
 * @method DeliveryEvent setSubEvent(Property\SubEvent $subEvent)
 * @method DeliveryEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method DeliveryEvent setTranslator(Property\Translator $translator)
 * @method DeliveryEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method DeliveryEvent setUrl(Property\Url $url)
 * @method DeliveryEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method DeliveryEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class DeliveryEvent extends Event {

	/**
	 * @var Property\AccessCode
	 */
	private $accessCode;

	/**
	 * @var Property\AvailableFrom
	 */
	private $availableFrom;

	/**
	 * @var Property\AvailableThrough
	 */
	private $availableThrough;

	/**
	 * @var Property\HasDeliveryMethod
	 */
	private $hasDeliveryMethod;

	/**
	 * Get access code.
	 * 
	 * @return Property\AccessCode
	 */
	public function getAccessCode() {
		return $this->accessCode;
	}

	/**
	 * Get available from.
	 * 
	 * @return Property\AvailableFrom
	 */
	public function getAvailableFrom() {
		return $this->availableFrom;
	}

	/**
	 * Get available through.
	 * 
	 * @return Property\AvailableThrough
	 */
	public function getAvailableThrough() {
		return $this->availableThrough;
	}

	/**
	 * Get has delivery method.
	 * 
	 * @return Property\HasDeliveryMethod
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
	 * @param Property\AccessCode $accessCode
	 * @return DeliveryEvent
	 */
	public function setAccessCode(Property\AccessCode $accessCode) {
		$this->accessCode = $accessCode;

		return $this;
	}

	/**
	 * Set available from.
	 * 
	 * @param Property\AvailableFrom $availableFrom
	 * @return DeliveryEvent
	 */
	public function setAvailableFrom(Property\AvailableFrom $availableFrom) {
		$this->availableFrom = $availableFrom;

		return $this;
	}

	/**
	 * Set available through.
	 * 
	 * @param Property\AvailableThrough $availableThrough
	 * @return DeliveryEvent
	 */
	public function setAvailableThrough(Property\AvailableThrough $availableThrough) {
		$this->availableThrough = $availableThrough;

		return $this;
	}

	/**
	 * Set has delivery method.
	 * 
	 * @param Property\HasDeliveryMethod $hasDeliveryMethod
	 * @return DeliveryEvent
	 */
	public function setHasDeliveryMethod(Property\HasDeliveryMethod $hasDeliveryMethod) {
		$this->hasDeliveryMethod = $hasDeliveryMethod;

		return $this;
	}
}