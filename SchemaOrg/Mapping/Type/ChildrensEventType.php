<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ChildrensEventType.
 * 
 * @method ChildrensEventType setActor(Property\ActorProperty $actor)
 * @method ChildrensEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ChildrensEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ChildrensEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ChildrensEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method ChildrensEventType setAudience(Property\AudienceProperty $audience)
 * @method ChildrensEventType setComposer(Property\ComposerProperty $composer)
 * @method ChildrensEventType setContributor(Property\ContributorProperty $contributor)
 * @method ChildrensEventType setDescription(Property\DescriptionProperty $description)
 * @method ChildrensEventType setDirector(Property\DirectorProperty $director)
 * @method ChildrensEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ChildrensEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method ChildrensEventType setEndDate(Property\EndDateProperty $endDate)
 * @method ChildrensEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method ChildrensEventType setFunder(Property\FunderProperty $funder)
 * @method ChildrensEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ChildrensEventType setImage(Property\ImageProperty $image)
 * @method ChildrensEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method ChildrensEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ChildrensEventType setLocation(Property\LocationProperty $location)
 * @method ChildrensEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ChildrensEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ChildrensEventType setName(Property\NameProperty $name)
 * @method ChildrensEventType setOffers(Property\OffersProperty $offers)
 * @method ChildrensEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method ChildrensEventType setPerformer(Property\PerformerProperty $performer)
 * @method ChildrensEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ChildrensEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method ChildrensEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method ChildrensEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method ChildrensEventType setReview(Property\ReviewProperty $review)
 * @method ChildrensEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method ChildrensEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method ChildrensEventType setStartDate(Property\StartDateProperty $startDate)
 * @method ChildrensEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method ChildrensEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method ChildrensEventType setTranslator(Property\TranslatorProperty $translator)
 * @method ChildrensEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method ChildrensEventType setUrl(Property\UrlProperty $url)
 * @method ChildrensEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method ChildrensEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class ChildrensEventType extends EventType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ChildrensEvent';
	}
}