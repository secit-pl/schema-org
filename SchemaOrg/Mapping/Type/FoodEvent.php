<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FoodEvent.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\FoodEventType instead.
 * 
 * @method FoodEvent setActor(Property\Actor $actor)
 * @method FoodEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method FoodEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method FoodEvent setAlternateName(Property\AlternateName $alternateName)
 * @method FoodEvent setAttendee(Property\Attendee $attendee)
 * @method FoodEvent setAudience(Property\Audience $audience)
 * @method FoodEvent setComposer(Property\Composer $composer)
 * @method FoodEvent setContributor(Property\Contributor $contributor)
 * @method FoodEvent setDescription(Property\Description $description)
 * @method FoodEvent setDirector(Property\Director $director)
 * @method FoodEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FoodEvent setDoorTime(Property\DoorTime $doorTime)
 * @method FoodEvent setEndDate(Property\EndDate $endDate)
 * @method FoodEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method FoodEvent setFunder(Property\Funder $funder)
 * @method FoodEvent setIdentifier(Property\Identifier $identifier)
 * @method FoodEvent setImage(Property\Image $image)
 * @method FoodEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method FoodEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method FoodEvent setLocation(Property\Location $location)
 * @method FoodEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FoodEvent setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method FoodEvent setName(Property\Name $name)
 * @method FoodEvent setOffers(Property\Offers $offers)
 * @method FoodEvent setOrganizer(Property\Organizer $organizer)
 * @method FoodEvent setPerformer(Property\Performer $performer)
 * @method FoodEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FoodEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method FoodEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method FoodEvent setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacity $remainingAttendeeCapacity)
 * @method FoodEvent setReview(Property\Review $review)
 * @method FoodEvent setSameAs(Property\SameAs $sameAs)
 * @method FoodEvent setSponsor(Property\Sponsor $sponsor)
 * @method FoodEvent setStartDate(Property\StartDate $startDate)
 * @method FoodEvent setSubEvent(Property\SubEvent $subEvent)
 * @method FoodEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method FoodEvent setTranslator(Property\Translator $translator)
 * @method FoodEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method FoodEvent setUrl(Property\Url $url)
 * @method FoodEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method FoodEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class FoodEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FoodEvent';
	}
}