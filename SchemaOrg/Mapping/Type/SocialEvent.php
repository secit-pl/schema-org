<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SocialEvent.
 * 
 * @method SocialEvent setActor(Property\Actor $actor)
 * @method SocialEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method SocialEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SocialEvent setAlternateName(Property\AlternateName $alternateName)
 * @method SocialEvent setAttendee(Property\Attendee $attendee)
 * @method SocialEvent setComposer(Property\Composer $composer)
 * @method SocialEvent setContributor(Property\Contributor $contributor)
 * @method SocialEvent setDescription(Property\Description $description)
 * @method SocialEvent setDirector(Property\Director $director)
 * @method SocialEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SocialEvent setDoorTime(Property\DoorTime $doorTime)
 * @method SocialEvent setDuration(Property\Duration $duration)
 * @method SocialEvent setEndDate(Property\EndDate $endDate)
 * @method SocialEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method SocialEvent setFunder(Property\Funder $funder)
 * @method SocialEvent setImage(Property\Image $image)
 * @method SocialEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method SocialEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method SocialEvent setLocation(Property\Location $location)
 * @method SocialEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SocialEvent setName(Property\Name $name)
 * @method SocialEvent setOffers(Property\Offers $offers)
 * @method SocialEvent setOrganizer(Property\Organizer $organizer)
 * @method SocialEvent setPerformer(Property\Performer $performer)
 * @method SocialEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SocialEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method SocialEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method SocialEvent setReview(Property\Review $review)
 * @method SocialEvent setSameAs(Property\SameAs $sameAs)
 * @method SocialEvent setSponsor(Property\Sponsor $sponsor)
 * @method SocialEvent setStartDate(Property\StartDate $startDate)
 * @method SocialEvent setSubEvent(Property\SubEvent $subEvent)
 * @method SocialEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method SocialEvent setTranslator(Property\Translator $translator)
 * @method SocialEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method SocialEvent setUrl(Property\Url $url)
 * @method SocialEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method SocialEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class SocialEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SocialEvent';
	}
}