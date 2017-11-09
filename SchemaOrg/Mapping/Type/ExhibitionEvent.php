<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ExhibitionEvent.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ExhibitionEventType instead.
 * 
 * @method ExhibitionEvent setActor(Property\Actor $actor)
 * @method ExhibitionEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method ExhibitionEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ExhibitionEvent setAlternateName(Property\AlternateName $alternateName)
 * @method ExhibitionEvent setAttendee(Property\Attendee $attendee)
 * @method ExhibitionEvent setAudience(Property\Audience $audience)
 * @method ExhibitionEvent setComposer(Property\Composer $composer)
 * @method ExhibitionEvent setContributor(Property\Contributor $contributor)
 * @method ExhibitionEvent setDescription(Property\Description $description)
 * @method ExhibitionEvent setDirector(Property\Director $director)
 * @method ExhibitionEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ExhibitionEvent setDoorTime(Property\DoorTime $doorTime)
 * @method ExhibitionEvent setEndDate(Property\EndDate $endDate)
 * @method ExhibitionEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method ExhibitionEvent setFunder(Property\Funder $funder)
 * @method ExhibitionEvent setIdentifier(Property\Identifier $identifier)
 * @method ExhibitionEvent setImage(Property\Image $image)
 * @method ExhibitionEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method ExhibitionEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method ExhibitionEvent setLocation(Property\Location $location)
 * @method ExhibitionEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ExhibitionEvent setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method ExhibitionEvent setName(Property\Name $name)
 * @method ExhibitionEvent setOffers(Property\Offers $offers)
 * @method ExhibitionEvent setOrganizer(Property\Organizer $organizer)
 * @method ExhibitionEvent setPerformer(Property\Performer $performer)
 * @method ExhibitionEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ExhibitionEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method ExhibitionEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method ExhibitionEvent setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacity $remainingAttendeeCapacity)
 * @method ExhibitionEvent setReview(Property\Review $review)
 * @method ExhibitionEvent setSameAs(Property\SameAs $sameAs)
 * @method ExhibitionEvent setSponsor(Property\Sponsor $sponsor)
 * @method ExhibitionEvent setStartDate(Property\StartDate $startDate)
 * @method ExhibitionEvent setSubEvent(Property\SubEvent $subEvent)
 * @method ExhibitionEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method ExhibitionEvent setTranslator(Property\Translator $translator)
 * @method ExhibitionEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method ExhibitionEvent setUrl(Property\Url $url)
 * @method ExhibitionEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method ExhibitionEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class ExhibitionEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ExhibitionEvent';
	}
}