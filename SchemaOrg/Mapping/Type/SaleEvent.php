<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SaleEvent.
 * 
 * @method SaleEvent setActor(Property\Actor $actor)
 * @method SaleEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method SaleEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SaleEvent setAlternateName(Property\AlternateName $alternateName)
 * @method SaleEvent setAttendee(Property\Attendee $attendee)
 * @method SaleEvent setComposer(Property\Composer $composer)
 * @method SaleEvent setContributor(Property\Contributor $contributor)
 * @method SaleEvent setDescription(Property\Description $description)
 * @method SaleEvent setDirector(Property\Director $director)
 * @method SaleEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SaleEvent setDoorTime(Property\DoorTime $doorTime)
 * @method SaleEvent setDuration(Property\Duration $duration)
 * @method SaleEvent setEndDate(Property\EndDate $endDate)
 * @method SaleEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method SaleEvent setFunder(Property\Funder $funder)
 * @method SaleEvent setImage(Property\Image $image)
 * @method SaleEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method SaleEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method SaleEvent setLocation(Property\Location $location)
 * @method SaleEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SaleEvent setName(Property\Name $name)
 * @method SaleEvent setOffers(Property\Offers $offers)
 * @method SaleEvent setOrganizer(Property\Organizer $organizer)
 * @method SaleEvent setPerformer(Property\Performer $performer)
 * @method SaleEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SaleEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method SaleEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method SaleEvent setReview(Property\Review $review)
 * @method SaleEvent setSameAs(Property\SameAs $sameAs)
 * @method SaleEvent setSponsor(Property\Sponsor $sponsor)
 * @method SaleEvent setStartDate(Property\StartDate $startDate)
 * @method SaleEvent setSubEvent(Property\SubEvent $subEvent)
 * @method SaleEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method SaleEvent setTranslator(Property\Translator $translator)
 * @method SaleEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method SaleEvent setUrl(Property\Url $url)
 * @method SaleEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method SaleEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class SaleEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SaleEvent';
	}
}