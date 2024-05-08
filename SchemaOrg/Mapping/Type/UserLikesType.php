<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use Action-based vocabulary, alongside types such as Comment.
 * 
 * @method UserLikesType setAbout(Property\AboutProperty $about)
 * @method UserLikesType setActor(Property\ActorProperty $actor)
 * @method UserLikesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UserLikesType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method UserLikesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UserLikesType setAttendee(Property\AttendeeProperty $attendee)
 * @method UserLikesType setAudience(Property\AudienceProperty $audience)
 * @method UserLikesType setComposer(Property\ComposerProperty $composer)
 * @method UserLikesType setContributor(Property\ContributorProperty $contributor)
 * @method UserLikesType setDescription(Property\DescriptionProperty $description)
 * @method UserLikesType setDirector(Property\DirectorProperty $director)
 * @method UserLikesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UserLikesType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method UserLikesType setDuration(Property\DurationProperty $duration)
 * @method UserLikesType setEndDate(Property\EndDateProperty $endDate)
 * @method UserLikesType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method UserLikesType setFunder(Property\FunderProperty $funder)
 * @method UserLikesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UserLikesType setImage(Property\ImageProperty $image)
 * @method UserLikesType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method UserLikesType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method UserLikesType setKeywords(Property\KeywordsProperty $keywords)
 * @method UserLikesType setLocation(Property\LocationProperty $location)
 * @method UserLikesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UserLikesType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method UserLikesType setName(Property\NameProperty $name)
 * @method UserLikesType setOffers(Property\OffersProperty $offers)
 * @method UserLikesType setOrganizer(Property\OrganizerProperty $organizer)
 * @method UserLikesType setPerformer(Property\PerformerProperty $performer)
 * @method UserLikesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UserLikesType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method UserLikesType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method UserLikesType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method UserLikesType setReview(Property\ReviewProperty $review)
 * @method UserLikesType setSameAs(Property\SameAsProperty $sameAs)
 * @method UserLikesType setSponsor(Property\SponsorProperty $sponsor)
 * @method UserLikesType setStartDate(Property\StartDateProperty $startDate)
 * @method UserLikesType setSubEvent(Property\SubEventProperty $subEvent)
 * @method UserLikesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UserLikesType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method UserLikesType setTranslator(Property\TranslatorProperty $translator)
 * @method UserLikesType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method UserLikesType setUrl(Property\UrlProperty $url)
 * @method UserLikesType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method UserLikesType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class UserLikesType extends UserInteractionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UserLikes';
	}
}