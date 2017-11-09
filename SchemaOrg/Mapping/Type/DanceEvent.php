<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DanceEvent.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DanceEventType instead.
 * 
 * @method DanceEvent setActor(Property\Actor $actor)
 * @method DanceEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method DanceEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method DanceEvent setAlternateName(Property\AlternateName $alternateName)
 * @method DanceEvent setAttendee(Property\Attendee $attendee)
 * @method DanceEvent setAudience(Property\Audience $audience)
 * @method DanceEvent setComposer(Property\Composer $composer)
 * @method DanceEvent setContributor(Property\Contributor $contributor)
 * @method DanceEvent setDescription(Property\Description $description)
 * @method DanceEvent setDirector(Property\Director $director)
 * @method DanceEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DanceEvent setDoorTime(Property\DoorTime $doorTime)
 * @method DanceEvent setEndDate(Property\EndDate $endDate)
 * @method DanceEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method DanceEvent setFunder(Property\Funder $funder)
 * @method DanceEvent setIdentifier(Property\Identifier $identifier)
 * @method DanceEvent setImage(Property\Image $image)
 * @method DanceEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method DanceEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method DanceEvent setLocation(Property\Location $location)
 * @method DanceEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DanceEvent setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method DanceEvent setName(Property\Name $name)
 * @method DanceEvent setOffers(Property\Offers $offers)
 * @method DanceEvent setOrganizer(Property\Organizer $organizer)
 * @method DanceEvent setPerformer(Property\Performer $performer)
 * @method DanceEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DanceEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method DanceEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method DanceEvent setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacity $remainingAttendeeCapacity)
 * @method DanceEvent setReview(Property\Review $review)
 * @method DanceEvent setSameAs(Property\SameAs $sameAs)
 * @method DanceEvent setSponsor(Property\Sponsor $sponsor)
 * @method DanceEvent setStartDate(Property\StartDate $startDate)
 * @method DanceEvent setSubEvent(Property\SubEvent $subEvent)
 * @method DanceEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method DanceEvent setTranslator(Property\Translator $translator)
 * @method DanceEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method DanceEvent setUrl(Property\Url $url)
 * @method DanceEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method DanceEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class DanceEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DanceEvent';
	}
}