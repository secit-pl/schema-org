<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LiteraryEventType.
 * 
 * @method LiteraryEventType setActor(Property\ActorProperty $actor)
 * @method LiteraryEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LiteraryEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LiteraryEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LiteraryEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method LiteraryEventType setAudience(Property\AudienceProperty $audience)
 * @method LiteraryEventType setComposer(Property\ComposerProperty $composer)
 * @method LiteraryEventType setContributor(Property\ContributorProperty $contributor)
 * @method LiteraryEventType setDescription(Property\DescriptionProperty $description)
 * @method LiteraryEventType setDirector(Property\DirectorProperty $director)
 * @method LiteraryEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LiteraryEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method LiteraryEventType setEndDate(Property\EndDateProperty $endDate)
 * @method LiteraryEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method LiteraryEventType setFunder(Property\FunderProperty $funder)
 * @method LiteraryEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LiteraryEventType setImage(Property\ImageProperty $image)
 * @method LiteraryEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method LiteraryEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LiteraryEventType setLocation(Property\LocationProperty $location)
 * @method LiteraryEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LiteraryEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LiteraryEventType setName(Property\NameProperty $name)
 * @method LiteraryEventType setOffers(Property\OffersProperty $offers)
 * @method LiteraryEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method LiteraryEventType setPerformer(Property\PerformerProperty $performer)
 * @method LiteraryEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LiteraryEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method LiteraryEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method LiteraryEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method LiteraryEventType setReview(Property\ReviewProperty $review)
 * @method LiteraryEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method LiteraryEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method LiteraryEventType setStartDate(Property\StartDateProperty $startDate)
 * @method LiteraryEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method LiteraryEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method LiteraryEventType setTranslator(Property\TranslatorProperty $translator)
 * @method LiteraryEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method LiteraryEventType setUrl(Property\UrlProperty $url)
 * @method LiteraryEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method LiteraryEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class LiteraryEventType extends EventType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LiteraryEvent';
	}
}