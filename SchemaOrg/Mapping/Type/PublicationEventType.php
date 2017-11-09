<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PublicationEventType.
 * 
 * @method PublicationEventType setActor(Property\ActorProperty $actor)
 * @method PublicationEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PublicationEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PublicationEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PublicationEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method PublicationEventType setAudience(Property\AudienceProperty $audience)
 * @method PublicationEventType setComposer(Property\ComposerProperty $composer)
 * @method PublicationEventType setContributor(Property\ContributorProperty $contributor)
 * @method PublicationEventType setDescription(Property\DescriptionProperty $description)
 * @method PublicationEventType setDirector(Property\DirectorProperty $director)
 * @method PublicationEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PublicationEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method PublicationEventType setEndDate(Property\EndDateProperty $endDate)
 * @method PublicationEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method PublicationEventType setFunder(Property\FunderProperty $funder)
 * @method PublicationEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PublicationEventType setImage(Property\ImageProperty $image)
 * @method PublicationEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method PublicationEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PublicationEventType setLocation(Property\LocationProperty $location)
 * @method PublicationEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PublicationEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PublicationEventType setName(Property\NameProperty $name)
 * @method PublicationEventType setOffers(Property\OffersProperty $offers)
 * @method PublicationEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method PublicationEventType setPerformer(Property\PerformerProperty $performer)
 * @method PublicationEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PublicationEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method PublicationEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method PublicationEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method PublicationEventType setReview(Property\ReviewProperty $review)
 * @method PublicationEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method PublicationEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method PublicationEventType setStartDate(Property\StartDateProperty $startDate)
 * @method PublicationEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method PublicationEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method PublicationEventType setTranslator(Property\TranslatorProperty $translator)
 * @method PublicationEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method PublicationEventType setUrl(Property\UrlProperty $url)
 * @method PublicationEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method PublicationEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class PublicationEventType extends EventType {

	/**
	 * @var Property\IsAccessibleForFreeProperty
	 */
	private $isAccessibleForFree;

	/**
	 * @var Property\PublishedOnProperty
	 */
	private $publishedOn;

	/**
	 * Get is accessible for free.
	 * 
	 * @return Property\IsAccessibleForFreeProperty
	 */
	public function getIsAccessibleForFree() {
		return $this->isAccessibleForFree;
	}

	/**
	 * Get published on.
	 * 
	 * @return Property\PublishedOnProperty
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
	 * @param Property\IsAccessibleForFreeProperty $isAccessibleForFree
	 * @return PublicationEventType
	 */
	public function setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree) {
		$this->isAccessibleForFree = $isAccessibleForFree;

		return $this;
	}

	/**
	 * Set published on.
	 * 
	 * @param Property\PublishedOnProperty $publishedOn
	 * @return PublicationEventType
	 */
	public function setPublishedOn(Property\PublishedOnProperty $publishedOn) {
		$this->publishedOn = $publishedOn;

		return $this;
	}
}