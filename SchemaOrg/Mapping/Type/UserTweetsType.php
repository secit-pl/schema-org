<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use Action-based vocabulary, alongside types such as Comment.
 * 
 * @method UserTweetsType setAbout(Property\AboutProperty $about)
 * @method UserTweetsType setActor(Property\ActorProperty $actor)
 * @method UserTweetsType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UserTweetsType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method UserTweetsType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UserTweetsType setAttendee(Property\AttendeeProperty $attendee)
 * @method UserTweetsType setAudience(Property\AudienceProperty $audience)
 * @method UserTweetsType setComposer(Property\ComposerProperty $composer)
 * @method UserTweetsType setContributor(Property\ContributorProperty $contributor)
 * @method UserTweetsType setDescription(Property\DescriptionProperty $description)
 * @method UserTweetsType setDirector(Property\DirectorProperty $director)
 * @method UserTweetsType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UserTweetsType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method UserTweetsType setDuration(Property\DurationProperty $duration)
 * @method UserTweetsType setEndDate(Property\EndDateProperty $endDate)
 * @method UserTweetsType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method UserTweetsType setFunder(Property\FunderProperty $funder)
 * @method UserTweetsType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UserTweetsType setImage(Property\ImageProperty $image)
 * @method UserTweetsType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method UserTweetsType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method UserTweetsType setKeywords(Property\KeywordsProperty $keywords)
 * @method UserTweetsType setLocation(Property\LocationProperty $location)
 * @method UserTweetsType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UserTweetsType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method UserTweetsType setName(Property\NameProperty $name)
 * @method UserTweetsType setOffers(Property\OffersProperty $offers)
 * @method UserTweetsType setOrganizer(Property\OrganizerProperty $organizer)
 * @method UserTweetsType setPerformer(Property\PerformerProperty $performer)
 * @method UserTweetsType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UserTweetsType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method UserTweetsType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method UserTweetsType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method UserTweetsType setReview(Property\ReviewProperty $review)
 * @method UserTweetsType setSameAs(Property\SameAsProperty $sameAs)
 * @method UserTweetsType setSponsor(Property\SponsorProperty $sponsor)
 * @method UserTweetsType setStartDate(Property\StartDateProperty $startDate)
 * @method UserTweetsType setSubEvent(Property\SubEventProperty $subEvent)
 * @method UserTweetsType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UserTweetsType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method UserTweetsType setTranslator(Property\TranslatorProperty $translator)
 * @method UserTweetsType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method UserTweetsType setUrl(Property\UrlProperty $url)
 * @method UserTweetsType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method UserTweetsType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class UserTweetsType extends UserInteractionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UserTweets';
	}
}