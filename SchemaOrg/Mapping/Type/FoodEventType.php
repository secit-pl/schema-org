<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Event type: Food event.
 * 
 * @method FoodEventType setAbout(Property\AboutProperty $about)
 * @method FoodEventType setActor(Property\ActorProperty $actor)
 * @method FoodEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FoodEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FoodEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FoodEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method FoodEventType setAudience(Property\AudienceProperty $audience)
 * @method FoodEventType setComposer(Property\ComposerProperty $composer)
 * @method FoodEventType setContributor(Property\ContributorProperty $contributor)
 * @method FoodEventType setDescription(Property\DescriptionProperty $description)
 * @method FoodEventType setDirector(Property\DirectorProperty $director)
 * @method FoodEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FoodEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method FoodEventType setDuration(Property\DurationProperty $duration)
 * @method FoodEventType setEndDate(Property\EndDateProperty $endDate)
 * @method FoodEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method FoodEventType setFunder(Property\FunderProperty $funder)
 * @method FoodEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FoodEventType setImage(Property\ImageProperty $image)
 * @method FoodEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method FoodEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method FoodEventType setKeywords(Property\KeywordsProperty $keywords)
 * @method FoodEventType setLocation(Property\LocationProperty $location)
 * @method FoodEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FoodEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method FoodEventType setName(Property\NameProperty $name)
 * @method FoodEventType setOffers(Property\OffersProperty $offers)
 * @method FoodEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method FoodEventType setPerformer(Property\PerformerProperty $performer)
 * @method FoodEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FoodEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method FoodEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method FoodEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method FoodEventType setReview(Property\ReviewProperty $review)
 * @method FoodEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method FoodEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method FoodEventType setStartDate(Property\StartDateProperty $startDate)
 * @method FoodEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method FoodEventType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FoodEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method FoodEventType setTranslator(Property\TranslatorProperty $translator)
 * @method FoodEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method FoodEventType setUrl(Property\UrlProperty $url)
 * @method FoodEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method FoodEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class FoodEventType extends EventType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FoodEvent';
	}
}