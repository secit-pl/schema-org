<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use Action-based vocabulary, alongside types such as Comment.
 * 
 * @method UserPlaysType setAbout(Property\AboutProperty $about)
 * @method UserPlaysType setActor(Property\ActorProperty $actor)
 * @method UserPlaysType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UserPlaysType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method UserPlaysType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UserPlaysType setAttendee(Property\AttendeeProperty $attendee)
 * @method UserPlaysType setAudience(Property\AudienceProperty $audience)
 * @method UserPlaysType setComposer(Property\ComposerProperty $composer)
 * @method UserPlaysType setContributor(Property\ContributorProperty $contributor)
 * @method UserPlaysType setDescription(Property\DescriptionProperty $description)
 * @method UserPlaysType setDirector(Property\DirectorProperty $director)
 * @method UserPlaysType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UserPlaysType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method UserPlaysType setDuration(Property\DurationProperty $duration)
 * @method UserPlaysType setEndDate(Property\EndDateProperty $endDate)
 * @method UserPlaysType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method UserPlaysType setFunder(Property\FunderProperty $funder)
 * @method UserPlaysType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UserPlaysType setImage(Property\ImageProperty $image)
 * @method UserPlaysType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method UserPlaysType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method UserPlaysType setKeywords(Property\KeywordsProperty $keywords)
 * @method UserPlaysType setLocation(Property\LocationProperty $location)
 * @method UserPlaysType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UserPlaysType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method UserPlaysType setName(Property\NameProperty $name)
 * @method UserPlaysType setOffers(Property\OffersProperty $offers)
 * @method UserPlaysType setOrganizer(Property\OrganizerProperty $organizer)
 * @method UserPlaysType setPerformer(Property\PerformerProperty $performer)
 * @method UserPlaysType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UserPlaysType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method UserPlaysType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method UserPlaysType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method UserPlaysType setReview(Property\ReviewProperty $review)
 * @method UserPlaysType setSameAs(Property\SameAsProperty $sameAs)
 * @method UserPlaysType setSponsor(Property\SponsorProperty $sponsor)
 * @method UserPlaysType setStartDate(Property\StartDateProperty $startDate)
 * @method UserPlaysType setSubEvent(Property\SubEventProperty $subEvent)
 * @method UserPlaysType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UserPlaysType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method UserPlaysType setTranslator(Property\TranslatorProperty $translator)
 * @method UserPlaysType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method UserPlaysType setUrl(Property\UrlProperty $url)
 * @method UserPlaysType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method UserPlaysType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class UserPlaysType extends UserInteractionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UserPlays';
	}
}