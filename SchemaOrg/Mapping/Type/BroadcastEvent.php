<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BroadcastEvent.
 * 
 * @method BroadcastEvent setActor(Property\Actor $actor)
 * @method BroadcastEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method BroadcastEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BroadcastEvent setAlternateName(Property\AlternateName $alternateName)
 * @method BroadcastEvent setAttendee(Property\Attendee $attendee)
 * @method BroadcastEvent setComposer(Property\Composer $composer)
 * @method BroadcastEvent setContributor(Property\Contributor $contributor)
 * @method BroadcastEvent setDescription(Property\Description $description)
 * @method BroadcastEvent setDirector(Property\Director $director)
 * @method BroadcastEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BroadcastEvent setDoorTime(Property\DoorTime $doorTime)
 * @method BroadcastEvent setDuration(Property\Duration $duration)
 * @method BroadcastEvent setEndDate(Property\EndDate $endDate)
 * @method BroadcastEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method BroadcastEvent setFunder(Property\Funder $funder)
 * @method BroadcastEvent setImage(Property\Image $image)
 * @method BroadcastEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method BroadcastEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method BroadcastEvent setLocation(Property\Location $location)
 * @method BroadcastEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BroadcastEvent setName(Property\Name $name)
 * @method BroadcastEvent setOffers(Property\Offers $offers)
 * @method BroadcastEvent setOrganizer(Property\Organizer $organizer)
 * @method BroadcastEvent setPerformer(Property\Performer $performer)
 * @method BroadcastEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BroadcastEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method BroadcastEvent setPublishedOn(Property\PublishedOn $publishedOn)
 * @method BroadcastEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method BroadcastEvent setReview(Property\Review $review)
 * @method BroadcastEvent setSameAs(Property\SameAs $sameAs)
 * @method BroadcastEvent setSponsor(Property\Sponsor $sponsor)
 * @method BroadcastEvent setStartDate(Property\StartDate $startDate)
 * @method BroadcastEvent setSubEvent(Property\SubEvent $subEvent)
 * @method BroadcastEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method BroadcastEvent setTranslator(Property\Translator $translator)
 * @method BroadcastEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method BroadcastEvent setUrl(Property\Url $url)
 * @method BroadcastEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method BroadcastEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class BroadcastEvent extends PublicationEvent {

	/**
	 * @var Property\BroadcastOfEvent
	 */
	private $broadcastOfEvent;

	/**
	 * @var Property\IsLiveBroadcast
	 */
	private $isLiveBroadcast;

	/**
	 * @var Property\VideoFormat
	 */
	private $videoFormat;

	/**
	 * Get broadcast of event.
	 * 
	 * @return Property\BroadcastOfEvent
	 */
	public function getBroadcastOfEvent() {
		return $this->broadcastOfEvent;
	}

	/**
	 * Get is live broadcast.
	 * 
	 * @return Property\IsLiveBroadcast
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
	 * @return Property\VideoFormat
	 */
	public function getVideoFormat() {
		return $this->videoFormat;
	}

	/**
	 * Set broadcast of event.
	 * 
	 * @param Property\BroadcastOfEvent $broadcastOfEvent
	 * @return BroadcastEvent
	 */
	public function setBroadcastOfEvent(Property\BroadcastOfEvent $broadcastOfEvent) {
		$this->broadcastOfEvent = $broadcastOfEvent;

		return $this;
	}

	/**
	 * Set is live broadcast.
	 * 
	 * @param Property\IsLiveBroadcast $isLiveBroadcast
	 * @return BroadcastEvent
	 */
	public function setIsLiveBroadcast(Property\IsLiveBroadcast $isLiveBroadcast) {
		$this->isLiveBroadcast = $isLiveBroadcast;

		return $this;
	}

	/**
	 * Set video format.
	 * 
	 * @param Property\VideoFormat $videoFormat
	 * @return BroadcastEvent
	 */
	public function setVideoFormat(Property\VideoFormat $videoFormat) {
		$this->videoFormat = $videoFormat;

		return $this;
	}
}