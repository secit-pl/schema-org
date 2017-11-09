<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ComedyEventType.
 * 
 * @method ComedyEventType setActor(Property\ActorProperty $actor)
 * @method ComedyEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ComedyEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ComedyEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ComedyEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method ComedyEventType setAudience(Property\AudienceProperty $audience)
 * @method ComedyEventType setComposer(Property\ComposerProperty $composer)
 * @method ComedyEventType setContributor(Property\ContributorProperty $contributor)
 * @method ComedyEventType setDescription(Property\DescriptionProperty $description)
 * @method ComedyEventType setDirector(Property\DirectorProperty $director)
 * @method ComedyEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ComedyEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method ComedyEventType setEndDate(Property\EndDateProperty $endDate)
 * @method ComedyEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method ComedyEventType setFunder(Property\FunderProperty $funder)
 * @method ComedyEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ComedyEventType setImage(Property\ImageProperty $image)
 * @method ComedyEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method ComedyEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ComedyEventType setLocation(Property\LocationProperty $location)
 * @method ComedyEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ComedyEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ComedyEventType setName(Property\NameProperty $name)
 * @method ComedyEventType setOffers(Property\OffersProperty $offers)
 * @method ComedyEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method ComedyEventType setPerformer(Property\PerformerProperty $performer)
 * @method ComedyEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ComedyEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method ComedyEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method ComedyEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method ComedyEventType setReview(Property\ReviewProperty $review)
 * @method ComedyEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method ComedyEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method ComedyEventType setStartDate(Property\StartDateProperty $startDate)
 * @method ComedyEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method ComedyEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method ComedyEventType setTranslator(Property\TranslatorProperty $translator)
 * @method ComedyEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method ComedyEventType setUrl(Property\UrlProperty $url)
 * @method ComedyEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method ComedyEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class ComedyEventType extends EventType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComedyEvent';
	}
}