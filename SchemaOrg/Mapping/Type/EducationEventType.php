<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Event type: Education event.
 * 
 * @method EducationEventType setAbout(Property\AboutProperty $about)
 * @method EducationEventType setActor(Property\ActorProperty $actor)
 * @method EducationEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EducationEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method EducationEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EducationEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method EducationEventType setAudience(Property\AudienceProperty $audience)
 * @method EducationEventType setComposer(Property\ComposerProperty $composer)
 * @method EducationEventType setContributor(Property\ContributorProperty $contributor)
 * @method EducationEventType setDescription(Property\DescriptionProperty $description)
 * @method EducationEventType setDirector(Property\DirectorProperty $director)
 * @method EducationEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EducationEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method EducationEventType setDuration(Property\DurationProperty $duration)
 * @method EducationEventType setEndDate(Property\EndDateProperty $endDate)
 * @method EducationEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method EducationEventType setFunder(Property\FunderProperty $funder)
 * @method EducationEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EducationEventType setImage(Property\ImageProperty $image)
 * @method EducationEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method EducationEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method EducationEventType setKeywords(Property\KeywordsProperty $keywords)
 * @method EducationEventType setLocation(Property\LocationProperty $location)
 * @method EducationEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EducationEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method EducationEventType setName(Property\NameProperty $name)
 * @method EducationEventType setOffers(Property\OffersProperty $offers)
 * @method EducationEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method EducationEventType setPerformer(Property\PerformerProperty $performer)
 * @method EducationEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EducationEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method EducationEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method EducationEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method EducationEventType setReview(Property\ReviewProperty $review)
 * @method EducationEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method EducationEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method EducationEventType setStartDate(Property\StartDateProperty $startDate)
 * @method EducationEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method EducationEventType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EducationEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method EducationEventType setTranslator(Property\TranslatorProperty $translator)
 * @method EducationEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method EducationEventType setUrl(Property\UrlProperty $url)
 * @method EducationEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method EducationEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class EducationEventType extends EventType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EducationEvent';
	}
}