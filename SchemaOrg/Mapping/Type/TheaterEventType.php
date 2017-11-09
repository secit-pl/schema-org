<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TheaterEventType.
 * 
 * @method TheaterEventType setActor(Property\ActorProperty $actor)
 * @method TheaterEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TheaterEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TheaterEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TheaterEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method TheaterEventType setAudience(Property\AudienceProperty $audience)
 * @method TheaterEventType setComposer(Property\ComposerProperty $composer)
 * @method TheaterEventType setContributor(Property\ContributorProperty $contributor)
 * @method TheaterEventType setDescription(Property\DescriptionProperty $description)
 * @method TheaterEventType setDirector(Property\DirectorProperty $director)
 * @method TheaterEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TheaterEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method TheaterEventType setEndDate(Property\EndDateProperty $endDate)
 * @method TheaterEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method TheaterEventType setFunder(Property\FunderProperty $funder)
 * @method TheaterEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TheaterEventType setImage(Property\ImageProperty $image)
 * @method TheaterEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method TheaterEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method TheaterEventType setLocation(Property\LocationProperty $location)
 * @method TheaterEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TheaterEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method TheaterEventType setName(Property\NameProperty $name)
 * @method TheaterEventType setOffers(Property\OffersProperty $offers)
 * @method TheaterEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method TheaterEventType setPerformer(Property\PerformerProperty $performer)
 * @method TheaterEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TheaterEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method TheaterEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method TheaterEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method TheaterEventType setReview(Property\ReviewProperty $review)
 * @method TheaterEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method TheaterEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method TheaterEventType setStartDate(Property\StartDateProperty $startDate)
 * @method TheaterEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method TheaterEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method TheaterEventType setTranslator(Property\TranslatorProperty $translator)
 * @method TheaterEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method TheaterEventType setUrl(Property\UrlProperty $url)
 * @method TheaterEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method TheaterEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class TheaterEventType extends EventType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TheaterEvent';
	}
}