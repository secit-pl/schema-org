<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PublicationEvent.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PublicationEventType instead.
 * 
 * @method PublicationEvent setActor(Property\Actor $actor)
 * @method PublicationEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method PublicationEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method PublicationEvent setAlternateName(Property\AlternateName $alternateName)
 * @method PublicationEvent setAttendee(Property\Attendee $attendee)
 * @method PublicationEvent setAudience(Property\Audience $audience)
 * @method PublicationEvent setComposer(Property\Composer $composer)
 * @method PublicationEvent setContributor(Property\Contributor $contributor)
 * @method PublicationEvent setDescription(Property\Description $description)
 * @method PublicationEvent setDirector(Property\Director $director)
 * @method PublicationEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PublicationEvent setDoorTime(Property\DoorTime $doorTime)
 * @method PublicationEvent setEndDate(Property\EndDate $endDate)
 * @method PublicationEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method PublicationEvent setFunder(Property\Funder $funder)
 * @method PublicationEvent setIdentifier(Property\Identifier $identifier)
 * @method PublicationEvent setImage(Property\Image $image)
 * @method PublicationEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method PublicationEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method PublicationEvent setLocation(Property\Location $location)
 * @method PublicationEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PublicationEvent setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method PublicationEvent setName(Property\Name $name)
 * @method PublicationEvent setOffers(Property\Offers $offers)
 * @method PublicationEvent setOrganizer(Property\Organizer $organizer)
 * @method PublicationEvent setPerformer(Property\Performer $performer)
 * @method PublicationEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PublicationEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method PublicationEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method PublicationEvent setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacity $remainingAttendeeCapacity)
 * @method PublicationEvent setReview(Property\Review $review)
 * @method PublicationEvent setSameAs(Property\SameAs $sameAs)
 * @method PublicationEvent setSponsor(Property\Sponsor $sponsor)
 * @method PublicationEvent setStartDate(Property\StartDate $startDate)
 * @method PublicationEvent setSubEvent(Property\SubEvent $subEvent)
 * @method PublicationEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method PublicationEvent setTranslator(Property\Translator $translator)
 * @method PublicationEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method PublicationEvent setUrl(Property\Url $url)
 * @method PublicationEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method PublicationEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class PublicationEvent extends Event {

	/**
	 * @var Property\IsAccessibleForFree
	 */
	private $isAccessibleForFree;

	/**
	 * @var Property\PublishedOn
	 */
	private $publishedOn;

	/**
	 * Get is accessible for free.
	 * 
	 * @return Property\IsAccessibleForFree
	 */
	public function getIsAccessibleForFree() {
		return $this->isAccessibleForFree;
	}

	/**
	 * Get published on.
	 * 
	 * @return Property\PublishedOn
	 */
	public function getPublishedOn() {
		return $this->publishedOn;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PublicationEvent';
	}

	/**
	 * Set is accessible for free.
	 * 
	 * @param Property\IsAccessibleForFree $isAccessibleForFree
	 * @return PublicationEvent
	 */
	public function setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree) {
		$this->isAccessibleForFree = $isAccessibleForFree;

		return $this;
	}

	/**
	 * Set published on.
	 * 
	 * @param Property\PublishedOn $publishedOn
	 * @return PublicationEvent
	 */
	public function setPublishedOn(Property\PublishedOn $publishedOn) {
		$this->publishedOn = $publishedOn;

		return $this;
	}
}