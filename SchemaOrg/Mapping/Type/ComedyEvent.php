<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ComedyEvent.
 * 
 * @method ComedyEvent setActor(Property\Actor $actor)
 * @method ComedyEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method ComedyEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ComedyEvent setAlternateName(Property\AlternateName $alternateName)
 * @method ComedyEvent setAttendee(Property\Attendee $attendee)
 * @method ComedyEvent setComposer(Property\Composer $composer)
 * @method ComedyEvent setContributor(Property\Contributor $contributor)
 * @method ComedyEvent setDescription(Property\Description $description)
 * @method ComedyEvent setDirector(Property\Director $director)
 * @method ComedyEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ComedyEvent setDoorTime(Property\DoorTime $doorTime)
 * @method ComedyEvent setDuration(Property\Duration $duration)
 * @method ComedyEvent setEndDate(Property\EndDate $endDate)
 * @method ComedyEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method ComedyEvent setFunder(Property\Funder $funder)
 * @method ComedyEvent setImage(Property\Image $image)
 * @method ComedyEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method ComedyEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method ComedyEvent setLocation(Property\Location $location)
 * @method ComedyEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ComedyEvent setName(Property\Name $name)
 * @method ComedyEvent setOffers(Property\Offers $offers)
 * @method ComedyEvent setOrganizer(Property\Organizer $organizer)
 * @method ComedyEvent setPerformer(Property\Performer $performer)
 * @method ComedyEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ComedyEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method ComedyEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method ComedyEvent setReview(Property\Review $review)
 * @method ComedyEvent setSameAs(Property\SameAs $sameAs)
 * @method ComedyEvent setSponsor(Property\Sponsor $sponsor)
 * @method ComedyEvent setStartDate(Property\StartDate $startDate)
 * @method ComedyEvent setSubEvent(Property\SubEvent $subEvent)
 * @method ComedyEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method ComedyEvent setTranslator(Property\Translator $translator)
 * @method ComedyEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method ComedyEvent setUrl(Property\Url $url)
 * @method ComedyEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method ComedyEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class ComedyEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComedyEvent';
	}
}