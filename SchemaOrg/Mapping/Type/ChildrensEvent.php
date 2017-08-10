<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ChildrensEvent.
 * 
 * @method ChildrensEvent setAbout(Property\About $about)
 * @method ChildrensEvent setActor(Property\Actor $actor)
 * @method ChildrensEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method ChildrensEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ChildrensEvent setAlternateName(Property\AlternateName $alternateName)
 * @method ChildrensEvent setAttendee(Property\Attendee $attendee)
 * @method ChildrensEvent setAudience(Property\Audience $audience)
 * @method ChildrensEvent setComposer(Property\Composer $composer)
 * @method ChildrensEvent setContributor(Property\Contributor $contributor)
 * @method ChildrensEvent setDescription(Property\Description $description)
 * @method ChildrensEvent setDirector(Property\Director $director)
 * @method ChildrensEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ChildrensEvent setDoorTime(Property\DoorTime $doorTime)
 * @method ChildrensEvent setDuration(Property\Duration $duration)
 * @method ChildrensEvent setEndDate(Property\EndDate $endDate)
 * @method ChildrensEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method ChildrensEvent setFunder(Property\Funder $funder)
 * @method ChildrensEvent setIdentifier(Property\Identifier $identifier)
 * @method ChildrensEvent setImage(Property\Image $image)
 * @method ChildrensEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method ChildrensEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method ChildrensEvent setLocation(Property\Location $location)
 * @method ChildrensEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ChildrensEvent setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method ChildrensEvent setName(Property\Name $name)
 * @method ChildrensEvent setOffers(Property\Offers $offers)
 * @method ChildrensEvent setOrganizer(Property\Organizer $organizer)
 * @method ChildrensEvent setPerformer(Property\Performer $performer)
 * @method ChildrensEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ChildrensEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method ChildrensEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method ChildrensEvent setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacity $remainingAttendeeCapacity)
 * @method ChildrensEvent setReview(Property\Review $review)
 * @method ChildrensEvent setSameAs(Property\SameAs $sameAs)
 * @method ChildrensEvent setSponsor(Property\Sponsor $sponsor)
 * @method ChildrensEvent setStartDate(Property\StartDate $startDate)
 * @method ChildrensEvent setSubEvent(Property\SubEvent $subEvent)
 * @method ChildrensEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method ChildrensEvent setTranslator(Property\Translator $translator)
 * @method ChildrensEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method ChildrensEvent setUrl(Property\Url $url)
 * @method ChildrensEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method ChildrensEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class ChildrensEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ChildrensEvent';
	}
}