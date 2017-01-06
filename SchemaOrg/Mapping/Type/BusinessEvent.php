<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusinessEvent.
 * 
 * @method BusinessEvent setActor(Property\Actor $actor)
 * @method BusinessEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method BusinessEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BusinessEvent setAlternateName(Property\AlternateName $alternateName)
 * @method BusinessEvent setAttendee(Property\Attendee $attendee)
 * @method BusinessEvent setComposer(Property\Composer $composer)
 * @method BusinessEvent setContributor(Property\Contributor $contributor)
 * @method BusinessEvent setDescription(Property\Description $description)
 * @method BusinessEvent setDirector(Property\Director $director)
 * @method BusinessEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BusinessEvent setDoorTime(Property\DoorTime $doorTime)
 * @method BusinessEvent setDuration(Property\Duration $duration)
 * @method BusinessEvent setEndDate(Property\EndDate $endDate)
 * @method BusinessEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method BusinessEvent setFunder(Property\Funder $funder)
 * @method BusinessEvent setImage(Property\Image $image)
 * @method BusinessEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method BusinessEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method BusinessEvent setLocation(Property\Location $location)
 * @method BusinessEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BusinessEvent setName(Property\Name $name)
 * @method BusinessEvent setOffers(Property\Offers $offers)
 * @method BusinessEvent setOrganizer(Property\Organizer $organizer)
 * @method BusinessEvent setPerformer(Property\Performer $performer)
 * @method BusinessEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BusinessEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method BusinessEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method BusinessEvent setReview(Property\Review $review)
 * @method BusinessEvent setSameAs(Property\SameAs $sameAs)
 * @method BusinessEvent setSponsor(Property\Sponsor $sponsor)
 * @method BusinessEvent setStartDate(Property\StartDate $startDate)
 * @method BusinessEvent setSubEvent(Property\SubEvent $subEvent)
 * @method BusinessEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method BusinessEvent setTranslator(Property\Translator $translator)
 * @method BusinessEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method BusinessEvent setUrl(Property\Url $url)
 * @method BusinessEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method BusinessEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class BusinessEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusinessEvent';
	}
}