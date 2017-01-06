<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LiteraryEvent.
 * 
 * @method LiteraryEvent setActor(Property\Actor $actor)
 * @method LiteraryEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method LiteraryEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method LiteraryEvent setAlternateName(Property\AlternateName $alternateName)
 * @method LiteraryEvent setAttendee(Property\Attendee $attendee)
 * @method LiteraryEvent setComposer(Property\Composer $composer)
 * @method LiteraryEvent setContributor(Property\Contributor $contributor)
 * @method LiteraryEvent setDescription(Property\Description $description)
 * @method LiteraryEvent setDirector(Property\Director $director)
 * @method LiteraryEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LiteraryEvent setDoorTime(Property\DoorTime $doorTime)
 * @method LiteraryEvent setDuration(Property\Duration $duration)
 * @method LiteraryEvent setEndDate(Property\EndDate $endDate)
 * @method LiteraryEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method LiteraryEvent setFunder(Property\Funder $funder)
 * @method LiteraryEvent setImage(Property\Image $image)
 * @method LiteraryEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method LiteraryEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method LiteraryEvent setLocation(Property\Location $location)
 * @method LiteraryEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LiteraryEvent setName(Property\Name $name)
 * @method LiteraryEvent setOffers(Property\Offers $offers)
 * @method LiteraryEvent setOrganizer(Property\Organizer $organizer)
 * @method LiteraryEvent setPerformer(Property\Performer $performer)
 * @method LiteraryEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LiteraryEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method LiteraryEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method LiteraryEvent setReview(Property\Review $review)
 * @method LiteraryEvent setSameAs(Property\SameAs $sameAs)
 * @method LiteraryEvent setSponsor(Property\Sponsor $sponsor)
 * @method LiteraryEvent setStartDate(Property\StartDate $startDate)
 * @method LiteraryEvent setSubEvent(Property\SubEvent $subEvent)
 * @method LiteraryEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method LiteraryEvent setTranslator(Property\Translator $translator)
 * @method LiteraryEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method LiteraryEvent setUrl(Property\Url $url)
 * @method LiteraryEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method LiteraryEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class LiteraryEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LiteraryEvent';
	}
}