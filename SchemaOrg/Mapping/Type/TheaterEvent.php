<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TheaterEvent.
 * 
 * @method TheaterEvent setActor(Property\Actor $actor)
 * @method TheaterEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method TheaterEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TheaterEvent setAlternateName(Property\AlternateName $alternateName)
 * @method TheaterEvent setAttendee(Property\Attendee $attendee)
 * @method TheaterEvent setComposer(Property\Composer $composer)
 * @method TheaterEvent setContributor(Property\Contributor $contributor)
 * @method TheaterEvent setDescription(Property\Description $description)
 * @method TheaterEvent setDirector(Property\Director $director)
 * @method TheaterEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TheaterEvent setDoorTime(Property\DoorTime $doorTime)
 * @method TheaterEvent setDuration(Property\Duration $duration)
 * @method TheaterEvent setEndDate(Property\EndDate $endDate)
 * @method TheaterEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method TheaterEvent setFunder(Property\Funder $funder)
 * @method TheaterEvent setImage(Property\Image $image)
 * @method TheaterEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method TheaterEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method TheaterEvent setLocation(Property\Location $location)
 * @method TheaterEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TheaterEvent setName(Property\Name $name)
 * @method TheaterEvent setOffers(Property\Offers $offers)
 * @method TheaterEvent setOrganizer(Property\Organizer $organizer)
 * @method TheaterEvent setPerformer(Property\Performer $performer)
 * @method TheaterEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TheaterEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method TheaterEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method TheaterEvent setReview(Property\Review $review)
 * @method TheaterEvent setSameAs(Property\SameAs $sameAs)
 * @method TheaterEvent setSponsor(Property\Sponsor $sponsor)
 * @method TheaterEvent setStartDate(Property\StartDate $startDate)
 * @method TheaterEvent setSubEvent(Property\SubEvent $subEvent)
 * @method TheaterEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method TheaterEvent setTranslator(Property\Translator $translator)
 * @method TheaterEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method TheaterEvent setUrl(Property\Url $url)
 * @method TheaterEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method TheaterEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class TheaterEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TheaterEvent';
	}
}