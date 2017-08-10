<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Festival.
 * 
 * @method Festival setAbout(Property\About $about)
 * @method Festival setActor(Property\Actor $actor)
 * @method Festival setAdditionalType(Property\AdditionalType $additionalType)
 * @method Festival setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Festival setAlternateName(Property\AlternateName $alternateName)
 * @method Festival setAttendee(Property\Attendee $attendee)
 * @method Festival setAudience(Property\Audience $audience)
 * @method Festival setComposer(Property\Composer $composer)
 * @method Festival setContributor(Property\Contributor $contributor)
 * @method Festival setDescription(Property\Description $description)
 * @method Festival setDirector(Property\Director $director)
 * @method Festival setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Festival setDoorTime(Property\DoorTime $doorTime)
 * @method Festival setDuration(Property\Duration $duration)
 * @method Festival setEndDate(Property\EndDate $endDate)
 * @method Festival setEventStatus(Property\EventStatus $eventStatus)
 * @method Festival setFunder(Property\Funder $funder)
 * @method Festival setIdentifier(Property\Identifier $identifier)
 * @method Festival setImage(Property\Image $image)
 * @method Festival setInLanguage(Property\InLanguage $inLanguage)
 * @method Festival setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Festival setLocation(Property\Location $location)
 * @method Festival setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Festival setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method Festival setName(Property\Name $name)
 * @method Festival setOffers(Property\Offers $offers)
 * @method Festival setOrganizer(Property\Organizer $organizer)
 * @method Festival setPerformer(Property\Performer $performer)
 * @method Festival setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Festival setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method Festival setRecordedIn(Property\RecordedIn $recordedIn)
 * @method Festival setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacity $remainingAttendeeCapacity)
 * @method Festival setReview(Property\Review $review)
 * @method Festival setSameAs(Property\SameAs $sameAs)
 * @method Festival setSponsor(Property\Sponsor $sponsor)
 * @method Festival setStartDate(Property\StartDate $startDate)
 * @method Festival setSubEvent(Property\SubEvent $subEvent)
 * @method Festival setSuperEvent(Property\SuperEvent $superEvent)
 * @method Festival setTranslator(Property\Translator $translator)
 * @method Festival setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Festival setUrl(Property\Url $url)
 * @method Festival setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method Festival setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class Festival extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Festival';
	}
}