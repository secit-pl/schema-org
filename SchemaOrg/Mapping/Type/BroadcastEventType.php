<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BroadcastEventType.
 * 
 * @method BroadcastEventType setActor(Property\ActorProperty $actor)
 * @method BroadcastEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BroadcastEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BroadcastEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BroadcastEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method BroadcastEventType setAudience(Property\AudienceProperty $audience)
 * @method BroadcastEventType setComposer(Property\ComposerProperty $composer)
 * @method BroadcastEventType setContributor(Property\ContributorProperty $contributor)
 * @method BroadcastEventType setDescription(Property\DescriptionProperty $description)
 * @method BroadcastEventType setDirector(Property\DirectorProperty $director)
 * @method BroadcastEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BroadcastEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method BroadcastEventType setEndDate(Property\EndDateProperty $endDate)
 * @method BroadcastEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method BroadcastEventType setFunder(Property\FunderProperty $funder)
 * @method BroadcastEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BroadcastEventType setImage(Property\ImageProperty $image)
 * @method BroadcastEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method BroadcastEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BroadcastEventType setLocation(Property\LocationProperty $location)
 * @method BroadcastEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BroadcastEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BroadcastEventType setName(Property\NameProperty $name)
 * @method BroadcastEventType setOffers(Property\OffersProperty $offers)
 * @method BroadcastEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method BroadcastEventType setPerformer(Property\PerformerProperty $performer)
 * @method BroadcastEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BroadcastEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method BroadcastEventType setPublishedOn(Property\PublishedOnProperty $publishedOn)
 * @method BroadcastEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method BroadcastEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method BroadcastEventType setReview(Property\ReviewProperty $review)
 * @method BroadcastEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method BroadcastEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method BroadcastEventType setStartDate(Property\StartDateProperty $startDate)
 * @method BroadcastEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method BroadcastEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method BroadcastEventType setTranslator(Property\TranslatorProperty $translator)
 * @method BroadcastEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method BroadcastEventType setUrl(Property\UrlProperty $url)
 * @method BroadcastEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method BroadcastEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class BroadcastEventType extends PublicationEventType {

	/**
	 * @var Property\BroadcastOfEventProperty
	 */
	private $broadcastOfEvent;

	/**
	 * @var Property\IsLiveBroadcastProperty
	 */
	private $isLiveBroadcast;

	/**
	 * @var Property\VideoFormatProperty
	 */
	private $videoFormat;

	/**
	 * Get broadcast of event.
	 * 
	 * @return Property\BroadcastOfEventProperty
	 */
	public function getBroadcastOfEvent() {
		return $this->broadcastOfEvent;
	}

	/**
	 * Get is live broadcast.
	 * 
	 * @return Property\IsLiveBroadcastProperty
	 */
	public function getIsLiveBroadcast() {
		return $this->isLiveBroadcast;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BroadcastEvent';
	}

	/**
	 * Get video format.
	 * 
	 * @return Property\VideoFormatProperty
	 */
	public function getVideoFormat() {
		return $this->videoFormat;
	}

	/**
	 * Set broadcast of event.
	 * 
	 * @param Property\BroadcastOfEventProperty $broadcastOfEvent
	 * @return BroadcastEventType
	 */
	public function setBroadcastOfEvent(Property\BroadcastOfEventProperty $broadcastOfEvent) {
		$this->broadcastOfEvent = $broadcastOfEvent;

		return $this;
	}

	/**
	 * Set is live broadcast.
	 * 
	 * @param Property\IsLiveBroadcastProperty $isLiveBroadcast
	 * @return BroadcastEventType
	 */
	public function setIsLiveBroadcast(Property\IsLiveBroadcastProperty $isLiveBroadcast) {
		$this->isLiveBroadcast = $isLiveBroadcast;

		return $this;
	}

	/**
	 * Set video format.
	 * 
	 * @param Property\VideoFormatProperty $videoFormat
	 * @return BroadcastEventType
	 */
	public function setVideoFormat(Property\VideoFormatProperty $videoFormat) {
		$this->videoFormat = $videoFormat;

		return $this;
	}
}