<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use Action-based vocabulary, alongside types such as Comment.
 * 
 * @method UserPageVisitsType setAbout(Property\AboutProperty $about)
 * @method UserPageVisitsType setActor(Property\ActorProperty $actor)
 * @method UserPageVisitsType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UserPageVisitsType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method UserPageVisitsType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UserPageVisitsType setAttendee(Property\AttendeeProperty $attendee)
 * @method UserPageVisitsType setAudience(Property\AudienceProperty $audience)
 * @method UserPageVisitsType setComposer(Property\ComposerProperty $composer)
 * @method UserPageVisitsType setContributor(Property\ContributorProperty $contributor)
 * @method UserPageVisitsType setDescription(Property\DescriptionProperty $description)
 * @method UserPageVisitsType setDirector(Property\DirectorProperty $director)
 * @method UserPageVisitsType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UserPageVisitsType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method UserPageVisitsType setDuration(Property\DurationProperty $duration)
 * @method UserPageVisitsType setEndDate(Property\EndDateProperty $endDate)
 * @method UserPageVisitsType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method UserPageVisitsType setFunder(Property\FunderProperty $funder)
 * @method UserPageVisitsType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UserPageVisitsType setImage(Property\ImageProperty $image)
 * @method UserPageVisitsType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method UserPageVisitsType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method UserPageVisitsType setKeywords(Property\KeywordsProperty $keywords)
 * @method UserPageVisitsType setLocation(Property\LocationProperty $location)
 * @method UserPageVisitsType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UserPageVisitsType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method UserPageVisitsType setName(Property\NameProperty $name)
 * @method UserPageVisitsType setOffers(Property\OffersProperty $offers)
 * @method UserPageVisitsType setOrganizer(Property\OrganizerProperty $organizer)
 * @method UserPageVisitsType setPerformer(Property\PerformerProperty $performer)
 * @method UserPageVisitsType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UserPageVisitsType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method UserPageVisitsType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method UserPageVisitsType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method UserPageVisitsType setReview(Property\ReviewProperty $review)
 * @method UserPageVisitsType setSameAs(Property\SameAsProperty $sameAs)
 * @method UserPageVisitsType setSponsor(Property\SponsorProperty $sponsor)
 * @method UserPageVisitsType setStartDate(Property\StartDateProperty $startDate)
 * @method UserPageVisitsType setSubEvent(Property\SubEventProperty $subEvent)
 * @method UserPageVisitsType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UserPageVisitsType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method UserPageVisitsType setTranslator(Property\TranslatorProperty $translator)
 * @method UserPageVisitsType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method UserPageVisitsType setUrl(Property\UrlProperty $url)
 * @method UserPageVisitsType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method UserPageVisitsType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class UserPageVisitsType extends UserInteractionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UserPageVisits';
	}
}