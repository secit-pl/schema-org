<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Event type: Social event.
 * 
 * @method SocialEventType setAbout(Property\AboutProperty $about)
 * @method SocialEventType setActor(Property\ActorProperty $actor)
 * @method SocialEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SocialEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SocialEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SocialEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method SocialEventType setAudience(Property\AudienceProperty $audience)
 * @method SocialEventType setComposer(Property\ComposerProperty $composer)
 * @method SocialEventType setContributor(Property\ContributorProperty $contributor)
 * @method SocialEventType setDescription(Property\DescriptionProperty $description)
 * @method SocialEventType setDirector(Property\DirectorProperty $director)
 * @method SocialEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SocialEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method SocialEventType setDuration(Property\DurationProperty $duration)
 * @method SocialEventType setEndDate(Property\EndDateProperty $endDate)
 * @method SocialEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method SocialEventType setFunder(Property\FunderProperty $funder)
 * @method SocialEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SocialEventType setImage(Property\ImageProperty $image)
 * @method SocialEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method SocialEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SocialEventType setKeywords(Property\KeywordsProperty $keywords)
 * @method SocialEventType setLocation(Property\LocationProperty $location)
 * @method SocialEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SocialEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SocialEventType setName(Property\NameProperty $name)
 * @method SocialEventType setOffers(Property\OffersProperty $offers)
 * @method SocialEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method SocialEventType setPerformer(Property\PerformerProperty $performer)
 * @method SocialEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SocialEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method SocialEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method SocialEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method SocialEventType setReview(Property\ReviewProperty $review)
 * @method SocialEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method SocialEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method SocialEventType setStartDate(Property\StartDateProperty $startDate)
 * @method SocialEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method SocialEventType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SocialEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method SocialEventType setTranslator(Property\TranslatorProperty $translator)
 * @method SocialEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method SocialEventType setUrl(Property\UrlProperty $url)
 * @method SocialEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method SocialEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class SocialEventType extends EventType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SocialEvent';
	}
}