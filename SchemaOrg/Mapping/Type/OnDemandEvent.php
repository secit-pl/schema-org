<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OnDemandEvent.
 * 
 * @method OnDemandEvent setActor(Property\Actor $actor)
 * @method OnDemandEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method OnDemandEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method OnDemandEvent setAlternateName(Property\AlternateName $alternateName)
 * @method OnDemandEvent setAttendee(Property\Attendee $attendee)
 * @method OnDemandEvent setAudience(Property\Audience $audience)
 * @method OnDemandEvent setComposer(Property\Composer $composer)
 * @method OnDemandEvent setContributor(Property\Contributor $contributor)
 * @method OnDemandEvent setDescription(Property\Description $description)
 * @method OnDemandEvent setDirector(Property\Director $director)
 * @method OnDemandEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OnDemandEvent setDoorTime(Property\DoorTime $doorTime)
 * @method OnDemandEvent setEndDate(Property\EndDate $endDate)
 * @method OnDemandEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method OnDemandEvent setFunder(Property\Funder $funder)
 * @method OnDemandEvent setIdentifier(Property\Identifier $identifier)
 * @method OnDemandEvent setImage(Property\Image $image)
 * @method OnDemandEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method OnDemandEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method OnDemandEvent setLocation(Property\Location $location)
 * @method OnDemandEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OnDemandEvent setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method OnDemandEvent setName(Property\Name $name)
 * @method OnDemandEvent setOffers(Property\Offers $offers)
 * @method OnDemandEvent setOrganizer(Property\Organizer $organizer)
 * @method OnDemandEvent setPerformer(Property\Performer $performer)
 * @method OnDemandEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OnDemandEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method OnDemandEvent setPublishedOn(Property\PublishedOn $publishedOn)
 * @method OnDemandEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method OnDemandEvent setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacity $remainingAttendeeCapacity)
 * @method OnDemandEvent setReview(Property\Review $review)
 * @method OnDemandEvent setSameAs(Property\SameAs $sameAs)
 * @method OnDemandEvent setSponsor(Property\Sponsor $sponsor)
 * @method OnDemandEvent setStartDate(Property\StartDate $startDate)
 * @method OnDemandEvent setSubEvent(Property\SubEvent $subEvent)
 * @method OnDemandEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method OnDemandEvent setTranslator(Property\Translator $translator)
 * @method OnDemandEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method OnDemandEvent setUrl(Property\Url $url)
 * @method OnDemandEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method OnDemandEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class OnDemandEvent extends PublicationEvent {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OnDemandEvent';
	}
}