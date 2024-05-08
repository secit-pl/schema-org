<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use Action-based vocabulary, alongside types such as Comment.
 * 
 * @method UserPlusOnesType setAbout(Property\AboutProperty $about)
 * @method UserPlusOnesType setActor(Property\ActorProperty $actor)
 * @method UserPlusOnesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UserPlusOnesType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method UserPlusOnesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UserPlusOnesType setAttendee(Property\AttendeeProperty $attendee)
 * @method UserPlusOnesType setAudience(Property\AudienceProperty $audience)
 * @method UserPlusOnesType setComposer(Property\ComposerProperty $composer)
 * @method UserPlusOnesType setContributor(Property\ContributorProperty $contributor)
 * @method UserPlusOnesType setDescription(Property\DescriptionProperty $description)
 * @method UserPlusOnesType setDirector(Property\DirectorProperty $director)
 * @method UserPlusOnesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UserPlusOnesType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method UserPlusOnesType setDuration(Property\DurationProperty $duration)
 * @method UserPlusOnesType setEndDate(Property\EndDateProperty $endDate)
 * @method UserPlusOnesType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method UserPlusOnesType setFunder(Property\FunderProperty $funder)
 * @method UserPlusOnesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UserPlusOnesType setImage(Property\ImageProperty $image)
 * @method UserPlusOnesType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method UserPlusOnesType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method UserPlusOnesType setKeywords(Property\KeywordsProperty $keywords)
 * @method UserPlusOnesType setLocation(Property\LocationProperty $location)
 * @method UserPlusOnesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UserPlusOnesType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method UserPlusOnesType setName(Property\NameProperty $name)
 * @method UserPlusOnesType setOffers(Property\OffersProperty $offers)
 * @method UserPlusOnesType setOrganizer(Property\OrganizerProperty $organizer)
 * @method UserPlusOnesType setPerformer(Property\PerformerProperty $performer)
 * @method UserPlusOnesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UserPlusOnesType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method UserPlusOnesType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method UserPlusOnesType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method UserPlusOnesType setReview(Property\ReviewProperty $review)
 * @method UserPlusOnesType setSameAs(Property\SameAsProperty $sameAs)
 * @method UserPlusOnesType setSponsor(Property\SponsorProperty $sponsor)
 * @method UserPlusOnesType setStartDate(Property\StartDateProperty $startDate)
 * @method UserPlusOnesType setSubEvent(Property\SubEventProperty $subEvent)
 * @method UserPlusOnesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UserPlusOnesType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method UserPlusOnesType setTranslator(Property\TranslatorProperty $translator)
 * @method UserPlusOnesType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method UserPlusOnesType setUrl(Property\UrlProperty $url)
 * @method UserPlusOnesType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method UserPlusOnesType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class UserPlusOnesType extends UserInteractionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UserPlusOnes';
	}
}