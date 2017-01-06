<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EducationEvent.
 * 
 * @method EducationEvent setActor(Property\Actor $actor)
 * @method EducationEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method EducationEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method EducationEvent setAlternateName(Property\AlternateName $alternateName)
 * @method EducationEvent setAttendee(Property\Attendee $attendee)
 * @method EducationEvent setComposer(Property\Composer $composer)
 * @method EducationEvent setContributor(Property\Contributor $contributor)
 * @method EducationEvent setDescription(Property\Description $description)
 * @method EducationEvent setDirector(Property\Director $director)
 * @method EducationEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EducationEvent setDoorTime(Property\DoorTime $doorTime)
 * @method EducationEvent setDuration(Property\Duration $duration)
 * @method EducationEvent setEndDate(Property\EndDate $endDate)
 * @method EducationEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method EducationEvent setFunder(Property\Funder $funder)
 * @method EducationEvent setImage(Property\Image $image)
 * @method EducationEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method EducationEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method EducationEvent setLocation(Property\Location $location)
 * @method EducationEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EducationEvent setName(Property\Name $name)
 * @method EducationEvent setOffers(Property\Offers $offers)
 * @method EducationEvent setOrganizer(Property\Organizer $organizer)
 * @method EducationEvent setPerformer(Property\Performer $performer)
 * @method EducationEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EducationEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method EducationEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method EducationEvent setReview(Property\Review $review)
 * @method EducationEvent setSameAs(Property\SameAs $sameAs)
 * @method EducationEvent setSponsor(Property\Sponsor $sponsor)
 * @method EducationEvent setStartDate(Property\StartDate $startDate)
 * @method EducationEvent setSubEvent(Property\SubEvent $subEvent)
 * @method EducationEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method EducationEvent setTranslator(Property\Translator $translator)
 * @method EducationEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method EducationEvent setUrl(Property\Url $url)
 * @method EducationEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method EducationEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class EducationEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EducationEvent';
	}
}