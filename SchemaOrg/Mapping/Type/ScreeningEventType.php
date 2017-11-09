<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ScreeningEventType.
 * 
 * @method ScreeningEventType setActor(Property\ActorProperty $actor)
 * @method ScreeningEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ScreeningEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ScreeningEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ScreeningEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method ScreeningEventType setAudience(Property\AudienceProperty $audience)
 * @method ScreeningEventType setComposer(Property\ComposerProperty $composer)
 * @method ScreeningEventType setContributor(Property\ContributorProperty $contributor)
 * @method ScreeningEventType setDescription(Property\DescriptionProperty $description)
 * @method ScreeningEventType setDirector(Property\DirectorProperty $director)
 * @method ScreeningEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ScreeningEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method ScreeningEventType setEndDate(Property\EndDateProperty $endDate)
 * @method ScreeningEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method ScreeningEventType setFunder(Property\FunderProperty $funder)
 * @method ScreeningEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ScreeningEventType setImage(Property\ImageProperty $image)
 * @method ScreeningEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method ScreeningEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ScreeningEventType setLocation(Property\LocationProperty $location)
 * @method ScreeningEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ScreeningEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ScreeningEventType setName(Property\NameProperty $name)
 * @method ScreeningEventType setOffers(Property\OffersProperty $offers)
 * @method ScreeningEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method ScreeningEventType setPerformer(Property\PerformerProperty $performer)
 * @method ScreeningEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ScreeningEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method ScreeningEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method ScreeningEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method ScreeningEventType setReview(Property\ReviewProperty $review)
 * @method ScreeningEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method ScreeningEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method ScreeningEventType setStartDate(Property\StartDateProperty $startDate)
 * @method ScreeningEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method ScreeningEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method ScreeningEventType setTranslator(Property\TranslatorProperty $translator)
 * @method ScreeningEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method ScreeningEventType setUrl(Property\UrlProperty $url)
 * @method ScreeningEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method ScreeningEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class ScreeningEventType extends EventType {

	/**
	 * @var Property\SubtitleLanguageProperty
	 */
	private $subtitleLanguage;

	/**
	 * @var Property\VideoFormatProperty
	 */
	private $videoFormat;

	/**
	 * @var Property\WorkPresentedProperty
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
	 * @return Property\SubtitleLanguageProperty
	 */
	public function getSubtitleLanguage() {
		return $this->subtitleLanguage;
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
	 * Get work presented.
	 * 
	 * @return Property\WorkPresentedProperty
	 */
	public function getWorkPresented() {
		return $this->workPresented;
	}

	/**
	 * Set subtitle language.
	 * 
	 * @param Property\SubtitleLanguageProperty $subtitleLanguage
	 * @return ScreeningEventType
	 */
	public function setSubtitleLanguage(Property\SubtitleLanguageProperty $subtitleLanguage) {
		$this->subtitleLanguage = $subtitleLanguage;

		return $this;
	}

	/**
	 * Set video format.
	 * 
	 * @param Property\VideoFormatProperty $videoFormat
	 * @return ScreeningEventType
	 */
	public function setVideoFormat(Property\VideoFormatProperty $videoFormat) {
		$this->videoFormat = $videoFormat;

		return $this;
	}

	/**
	 * Set work presented.
	 * 
	 * @param Property\WorkPresentedProperty $workPresented
	 * @return ScreeningEventType
	 */
	public function setWorkPresented(Property\WorkPresentedProperty $workPresented) {
		$this->workPresented = $workPresented;

		return $this;
	}
}