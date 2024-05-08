<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use Action-based vocabulary, alongside types such as Comment.
 * 
 * @method UserBlocksType setAbout(Property\AboutProperty $about)
 * @method UserBlocksType setActor(Property\ActorProperty $actor)
 * @method UserBlocksType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UserBlocksType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method UserBlocksType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UserBlocksType setAttendee(Property\AttendeeProperty $attendee)
 * @method UserBlocksType setAudience(Property\AudienceProperty $audience)
 * @method UserBlocksType setComposer(Property\ComposerProperty $composer)
 * @method UserBlocksType setContributor(Property\ContributorProperty $contributor)
 * @method UserBlocksType setDescription(Property\DescriptionProperty $description)
 * @method UserBlocksType setDirector(Property\DirectorProperty $director)
 * @method UserBlocksType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UserBlocksType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method UserBlocksType setDuration(Property\DurationProperty $duration)
 * @method UserBlocksType setEndDate(Property\EndDateProperty $endDate)
 * @method UserBlocksType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method UserBlocksType setFunder(Property\FunderProperty $funder)
 * @method UserBlocksType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UserBlocksType setImage(Property\ImageProperty $image)
 * @method UserBlocksType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method UserBlocksType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method UserBlocksType setKeywords(Property\KeywordsProperty $keywords)
 * @method UserBlocksType setLocation(Property\LocationProperty $location)
 * @method UserBlocksType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UserBlocksType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method UserBlocksType setName(Property\NameProperty $name)
 * @method UserBlocksType setOffers(Property\OffersProperty $offers)
 * @method UserBlocksType setOrganizer(Property\OrganizerProperty $organizer)
 * @method UserBlocksType setPerformer(Property\PerformerProperty $performer)
 * @method UserBlocksType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UserBlocksType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method UserBlocksType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method UserBlocksType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method UserBlocksType setReview(Property\ReviewProperty $review)
 * @method UserBlocksType setSameAs(Property\SameAsProperty $sameAs)
 * @method UserBlocksType setSponsor(Property\SponsorProperty $sponsor)
 * @method UserBlocksType setStartDate(Property\StartDateProperty $startDate)
 * @method UserBlocksType setSubEvent(Property\SubEventProperty $subEvent)
 * @method UserBlocksType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UserBlocksType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method UserBlocksType setTranslator(Property\TranslatorProperty $translator)
 * @method UserBlocksType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method UserBlocksType setUrl(Property\UrlProperty $url)
 * @method UserBlocksType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method UserBlocksType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class UserBlocksType extends UserInteractionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UserBlocks';
	}
}