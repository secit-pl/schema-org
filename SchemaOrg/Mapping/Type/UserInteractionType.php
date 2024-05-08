<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use Action-based vocabulary, alongside types such as Comment.
 * 
 * @method UserInteractionType setAbout(Property\AboutProperty $about)
 * @method UserInteractionType setActor(Property\ActorProperty $actor)
 * @method UserInteractionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UserInteractionType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method UserInteractionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UserInteractionType setAttendee(Property\AttendeeProperty $attendee)
 * @method UserInteractionType setAudience(Property\AudienceProperty $audience)
 * @method UserInteractionType setComposer(Property\ComposerProperty $composer)
 * @method UserInteractionType setContributor(Property\ContributorProperty $contributor)
 * @method UserInteractionType setDescription(Property\DescriptionProperty $description)
 * @method UserInteractionType setDirector(Property\DirectorProperty $director)
 * @method UserInteractionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UserInteractionType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method UserInteractionType setDuration(Property\DurationProperty $duration)
 * @method UserInteractionType setEndDate(Property\EndDateProperty $endDate)
 * @method UserInteractionType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method UserInteractionType setFunder(Property\FunderProperty $funder)
 * @method UserInteractionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UserInteractionType setImage(Property\ImageProperty $image)
 * @method UserInteractionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method UserInteractionType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method UserInteractionType setKeywords(Property\KeywordsProperty $keywords)
 * @method UserInteractionType setLocation(Property\LocationProperty $location)
 * @method UserInteractionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UserInteractionType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method UserInteractionType setName(Property\NameProperty $name)
 * @method UserInteractionType setOffers(Property\OffersProperty $offers)
 * @method UserInteractionType setOrganizer(Property\OrganizerProperty $organizer)
 * @method UserInteractionType setPerformer(Property\PerformerProperty $performer)
 * @method UserInteractionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UserInteractionType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method UserInteractionType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method UserInteractionType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method UserInteractionType setReview(Property\ReviewProperty $review)
 * @method UserInteractionType setSameAs(Property\SameAsProperty $sameAs)
 * @method UserInteractionType setSponsor(Property\SponsorProperty $sponsor)
 * @method UserInteractionType setStartDate(Property\StartDateProperty $startDate)
 * @method UserInteractionType setSubEvent(Property\SubEventProperty $subEvent)
 * @method UserInteractionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UserInteractionType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method UserInteractionType setTranslator(Property\TranslatorProperty $translator)
 * @method UserInteractionType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method UserInteractionType setUrl(Property\UrlProperty $url)
 * @method UserInteractionType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method UserInteractionType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class UserInteractionType extends EventType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UserInteraction';
	}
}