<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DanceEventType.
 * 
 * @method DanceEventType setActor(Property\ActorProperty $actor)
 * @method DanceEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DanceEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DanceEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DanceEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method DanceEventType setAudience(Property\AudienceProperty $audience)
 * @method DanceEventType setComposer(Property\ComposerProperty $composer)
 * @method DanceEventType setContributor(Property\ContributorProperty $contributor)
 * @method DanceEventType setDescription(Property\DescriptionProperty $description)
 * @method DanceEventType setDirector(Property\DirectorProperty $director)
 * @method DanceEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DanceEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method DanceEventType setEndDate(Property\EndDateProperty $endDate)
 * @method DanceEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method DanceEventType setFunder(Property\FunderProperty $funder)
 * @method DanceEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DanceEventType setImage(Property\ImageProperty $image)
 * @method DanceEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method DanceEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method DanceEventType setLocation(Property\LocationProperty $location)
 * @method DanceEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DanceEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method DanceEventType setName(Property\NameProperty $name)
 * @method DanceEventType setOffers(Property\OffersProperty $offers)
 * @method DanceEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method DanceEventType setPerformer(Property\PerformerProperty $performer)
 * @method DanceEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DanceEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method DanceEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method DanceEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method DanceEventType setReview(Property\ReviewProperty $review)
 * @method DanceEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method DanceEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method DanceEventType setStartDate(Property\StartDateProperty $startDate)
 * @method DanceEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method DanceEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method DanceEventType setTranslator(Property\TranslatorProperty $translator)
 * @method DanceEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method DanceEventType setUrl(Property\UrlProperty $url)
 * @method DanceEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method DanceEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class DanceEventType extends EventType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DanceEvent';
	}
}