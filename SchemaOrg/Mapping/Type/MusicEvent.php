<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicEvent.
 * 
 * @method MusicEvent setActor(Property\Actor $actor)
 * @method MusicEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method MusicEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MusicEvent setAlternateName(Property\AlternateName $alternateName)
 * @method MusicEvent setAttendee(Property\Attendee $attendee)
 * @method MusicEvent setComposer(Property\Composer $composer)
 * @method MusicEvent setContributor(Property\Contributor $contributor)
 * @method MusicEvent setDescription(Property\Description $description)
 * @method MusicEvent setDirector(Property\Director $director)
 * @method MusicEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MusicEvent setDoorTime(Property\DoorTime $doorTime)
 * @method MusicEvent setDuration(Property\Duration $duration)
 * @method MusicEvent setEndDate(Property\EndDate $endDate)
 * @method MusicEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method MusicEvent setFunder(Property\Funder $funder)
 * @method MusicEvent setImage(Property\Image $image)
 * @method MusicEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method MusicEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method MusicEvent setLocation(Property\Location $location)
 * @method MusicEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MusicEvent setName(Property\Name $name)
 * @method MusicEvent setOffers(Property\Offers $offers)
 * @method MusicEvent setOrganizer(Property\Organizer $organizer)
 * @method MusicEvent setPerformer(Property\Performer $performer)
 * @method MusicEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MusicEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method MusicEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method MusicEvent setReview(Property\Review $review)
 * @method MusicEvent setSameAs(Property\SameAs $sameAs)
 * @method MusicEvent setSponsor(Property\Sponsor $sponsor)
 * @method MusicEvent setStartDate(Property\StartDate $startDate)
 * @method MusicEvent setSubEvent(Property\SubEvent $subEvent)
 * @method MusicEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method MusicEvent setTranslator(Property\Translator $translator)
 * @method MusicEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method MusicEvent setUrl(Property\Url $url)
 * @method MusicEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method MusicEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class MusicEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicEvent';
	}
}