<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Event type: Business event.
 * 
 * @method BusinessEventType setAbout(Property\AboutProperty $about)
 * @method BusinessEventType setActor(Property\ActorProperty $actor)
 * @method BusinessEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BusinessEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BusinessEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BusinessEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method BusinessEventType setAudience(Property\AudienceProperty $audience)
 * @method BusinessEventType setComposer(Property\ComposerProperty $composer)
 * @method BusinessEventType setContributor(Property\ContributorProperty $contributor)
 * @method BusinessEventType setDescription(Property\DescriptionProperty $description)
 * @method BusinessEventType setDirector(Property\DirectorProperty $director)
 * @method BusinessEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BusinessEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method BusinessEventType setDuration(Property\DurationProperty $duration)
 * @method BusinessEventType setEndDate(Property\EndDateProperty $endDate)
 * @method BusinessEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method BusinessEventType setFunder(Property\FunderProperty $funder)
 * @method BusinessEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BusinessEventType setImage(Property\ImageProperty $image)
 * @method BusinessEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method BusinessEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BusinessEventType setKeywords(Property\KeywordsProperty $keywords)
 * @method BusinessEventType setLocation(Property\LocationProperty $location)
 * @method BusinessEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BusinessEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BusinessEventType setName(Property\NameProperty $name)
 * @method BusinessEventType setOffers(Property\OffersProperty $offers)
 * @method BusinessEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method BusinessEventType setPerformer(Property\PerformerProperty $performer)
 * @method BusinessEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BusinessEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method BusinessEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method BusinessEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method BusinessEventType setReview(Property\ReviewProperty $review)
 * @method BusinessEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method BusinessEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method BusinessEventType setStartDate(Property\StartDateProperty $startDate)
 * @method BusinessEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method BusinessEventType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BusinessEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method BusinessEventType setTranslator(Property\TranslatorProperty $translator)
 * @method BusinessEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method BusinessEventType setUrl(Property\UrlProperty $url)
 * @method BusinessEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method BusinessEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class BusinessEventType extends EventType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusinessEvent';
	}
}