<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ScreeningEvent.
 * 
 * @method ScreeningEvent setActor(Property\Actor $actor)
 * @method ScreeningEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method ScreeningEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ScreeningEvent setAlternateName(Property\AlternateName $alternateName)
 * @method ScreeningEvent setAttendee(Property\Attendee $attendee)
 * @method ScreeningEvent setAudience(Property\Audience $audience)
 * @method ScreeningEvent setComposer(Property\Composer $composer)
 * @method ScreeningEvent setContributor(Property\Contributor $contributor)
 * @method ScreeningEvent setDescription(Property\Description $description)
 * @method ScreeningEvent setDirector(Property\Director $director)
 * @method ScreeningEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ScreeningEvent setDoorTime(Property\DoorTime $doorTime)
 * @method ScreeningEvent setEndDate(Property\EndDate $endDate)
 * @method ScreeningEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method ScreeningEvent setFunder(Property\Funder $funder)
 * @method ScreeningEvent setIdentifier(Property\Identifier $identifier)
 * @method ScreeningEvent setImage(Property\Image $image)
 * @method ScreeningEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method ScreeningEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method ScreeningEvent setLocation(Property\Location $location)
 * @method ScreeningEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ScreeningEvent setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method ScreeningEvent setName(Property\Name $name)
 * @method ScreeningEvent setOffers(Property\Offers $offers)
 * @method ScreeningEvent setOrganizer(Property\Organizer $organizer)
 * @method ScreeningEvent setPerformer(Property\Performer $performer)
 * @method ScreeningEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ScreeningEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method ScreeningEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method ScreeningEvent setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacity $remainingAttendeeCapacity)
 * @method ScreeningEvent setReview(Property\Review $review)
 * @method ScreeningEvent setSameAs(Property\SameAs $sameAs)
 * @method ScreeningEvent setSponsor(Property\Sponsor $sponsor)
 * @method ScreeningEvent setStartDate(Property\StartDate $startDate)
 * @method ScreeningEvent setSubEvent(Property\SubEvent $subEvent)
 * @method ScreeningEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method ScreeningEvent setTranslator(Property\Translator $translator)
 * @method ScreeningEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method ScreeningEvent setUrl(Property\Url $url)
 * @method ScreeningEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method ScreeningEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class ScreeningEvent extends Event {

	/**
	 * @var Property\SubtitleLanguage
	 */
	private $subtitleLanguage;

	/**
	 * @var Property\VideoFormat
	 */
	private $videoFormat;

	/**
	 * @var Property\WorkPresented
	 */
	private $workPresented;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ScreeningEvent';
	}

	/**
	 * Get subtitle language.
	 * 
	 * @return Property\SubtitleLanguage
	 */
	public function getSubtitleLanguage() {
		return $this->subtitleLanguage;
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
	 * Get work presented.
	 * 
	 * @return Property\WorkPresented
	 */
	public function getWorkPresented() {
		return $this->workPresented;
	}

	/**
	 * Set subtitle language.
	 * 
	 * @param Property\SubtitleLanguage $subtitleLanguage
	 * @return ScreeningEvent
	 */
	public function setSubtitleLanguage(Property\SubtitleLanguage $subtitleLanguage) {
		$this->subtitleLanguage = $subtitleLanguage;

		return $this;
	}

	/**
	 * Set video format.
	 * 
	 * @param Property\VideoFormat $videoFormat
	 * @return ScreeningEvent
	 */
	public function setVideoFormat(Property\VideoFormat $videoFormat) {
		$this->videoFormat = $videoFormat;

		return $this;
	}

	/**
	 * Set work presented.
	 * 
	 * @param Property\WorkPresented $workPresented
	 * @return ScreeningEvent
	 */
	public function setWorkPresented(Property\WorkPresented $workPresented) {
		$this->workPresented = $workPresented;

		return $this;
	}
}