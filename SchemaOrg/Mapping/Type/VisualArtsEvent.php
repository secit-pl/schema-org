<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VisualArtsEvent.
 * 
 * @method VisualArtsEvent setActor(Property\Actor $actor)
 * @method VisualArtsEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method VisualArtsEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method VisualArtsEvent setAlternateName(Property\AlternateName $alternateName)
 * @method VisualArtsEvent setAttendee(Property\Attendee $attendee)
 * @method VisualArtsEvent setComposer(Property\Composer $composer)
 * @method VisualArtsEvent setContributor(Property\Contributor $contributor)
 * @method VisualArtsEvent setDescription(Property\Description $description)
 * @method VisualArtsEvent setDirector(Property\Director $director)
 * @method VisualArtsEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method VisualArtsEvent setDoorTime(Property\DoorTime $doorTime)
 * @method VisualArtsEvent setDuration(Property\Duration $duration)
 * @method VisualArtsEvent setEndDate(Property\EndDate $endDate)
 * @method VisualArtsEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method VisualArtsEvent setFunder(Property\Funder $funder)
 * @method VisualArtsEvent setImage(Property\Image $image)
 * @method VisualArtsEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method VisualArtsEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method VisualArtsEvent setLocation(Property\Location $location)
 * @method VisualArtsEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method VisualArtsEvent setName(Property\Name $name)
 * @method VisualArtsEvent setOffers(Property\Offers $offers)
 * @method VisualArtsEvent setOrganizer(Property\Organizer $organizer)
 * @method VisualArtsEvent setPerformer(Property\Performer $performer)
 * @method VisualArtsEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method VisualArtsEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method VisualArtsEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method VisualArtsEvent setReview(Property\Review $review)
 * @method VisualArtsEvent setSameAs(Property\SameAs $sameAs)
 * @method VisualArtsEvent setSponsor(Property\Sponsor $sponsor)
 * @method VisualArtsEvent setStartDate(Property\StartDate $startDate)
 * @method VisualArtsEvent setSubEvent(Property\SubEvent $subEvent)
 * @method VisualArtsEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method VisualArtsEvent setTranslator(Property\Translator $translator)
 * @method VisualArtsEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method VisualArtsEvent setUrl(Property\Url $url)
 * @method VisualArtsEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method VisualArtsEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class VisualArtsEvent extends Event {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VisualArtsEvent';
	}
}