<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Event type: Exhibition event, e.g. at a museum, library, archive, tradeshow, ...
 * 
 * @method ExhibitionEventType setAbout(Property\AboutProperty $about)
 * @method ExhibitionEventType setActor(Property\ActorProperty $actor)
 * @method ExhibitionEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ExhibitionEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ExhibitionEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ExhibitionEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method ExhibitionEventType setAudience(Property\AudienceProperty $audience)
 * @method ExhibitionEventType setComposer(Property\ComposerProperty $composer)
 * @method ExhibitionEventType setContributor(Property\ContributorProperty $contributor)
 * @method ExhibitionEventType setDescription(Property\DescriptionProperty $description)
 * @method ExhibitionEventType setDirector(Property\DirectorProperty $director)
 * @method ExhibitionEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ExhibitionEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method ExhibitionEventType setDuration(Property\DurationProperty $duration)
 * @method ExhibitionEventType setEndDate(Property\EndDateProperty $endDate)
 * @method ExhibitionEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method ExhibitionEventType setFunder(Property\FunderProperty $funder)
 * @method ExhibitionEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ExhibitionEventType setImage(Property\ImageProperty $image)
 * @method ExhibitionEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method ExhibitionEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ExhibitionEventType setKeywords(Property\KeywordsProperty $keywords)
 * @method ExhibitionEventType setLocation(Property\LocationProperty $location)
 * @method ExhibitionEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ExhibitionEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ExhibitionEventType setName(Property\NameProperty $name)
 * @method ExhibitionEventType setOffers(Property\OffersProperty $offers)
 * @method ExhibitionEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method ExhibitionEventType setPerformer(Property\PerformerProperty $performer)
 * @method ExhibitionEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ExhibitionEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method ExhibitionEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method ExhibitionEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method ExhibitionEventType setReview(Property\ReviewProperty $review)
 * @method ExhibitionEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method ExhibitionEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method ExhibitionEventType setStartDate(Property\StartDateProperty $startDate)
 * @method ExhibitionEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method ExhibitionEventType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ExhibitionEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method ExhibitionEventType setTranslator(Property\TranslatorProperty $translator)
 * @method ExhibitionEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method ExhibitionEventType setUrl(Property\UrlProperty $url)
 * @method ExhibitionEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method ExhibitionEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class ExhibitionEventType extends EventType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ExhibitionEvent';
	}
}