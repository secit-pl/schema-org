<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use Action-based vocabulary, alongside types such as Comment.
 * 
 * @method UserDownloadsType setAbout(Property\AboutProperty $about)
 * @method UserDownloadsType setActor(Property\ActorProperty $actor)
 * @method UserDownloadsType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UserDownloadsType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method UserDownloadsType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UserDownloadsType setAttendee(Property\AttendeeProperty $attendee)
 * @method UserDownloadsType setAudience(Property\AudienceProperty $audience)
 * @method UserDownloadsType setComposer(Property\ComposerProperty $composer)
 * @method UserDownloadsType setContributor(Property\ContributorProperty $contributor)
 * @method UserDownloadsType setDescription(Property\DescriptionProperty $description)
 * @method UserDownloadsType setDirector(Property\DirectorProperty $director)
 * @method UserDownloadsType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UserDownloadsType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method UserDownloadsType setDuration(Property\DurationProperty $duration)
 * @method UserDownloadsType setEndDate(Property\EndDateProperty $endDate)
 * @method UserDownloadsType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method UserDownloadsType setFunder(Property\FunderProperty $funder)
 * @method UserDownloadsType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UserDownloadsType setImage(Property\ImageProperty $image)
 * @method UserDownloadsType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method UserDownloadsType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method UserDownloadsType setKeywords(Property\KeywordsProperty $keywords)
 * @method UserDownloadsType setLocation(Property\LocationProperty $location)
 * @method UserDownloadsType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UserDownloadsType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method UserDownloadsType setName(Property\NameProperty $name)
 * @method UserDownloadsType setOffers(Property\OffersProperty $offers)
 * @method UserDownloadsType setOrganizer(Property\OrganizerProperty $organizer)
 * @method UserDownloadsType setPerformer(Property\PerformerProperty $performer)
 * @method UserDownloadsType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UserDownloadsType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method UserDownloadsType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method UserDownloadsType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method UserDownloadsType setReview(Property\ReviewProperty $review)
 * @method UserDownloadsType setSameAs(Property\SameAsProperty $sameAs)
 * @method UserDownloadsType setSponsor(Property\SponsorProperty $sponsor)
 * @method UserDownloadsType setStartDate(Property\StartDateProperty $startDate)
 * @method UserDownloadsType setSubEvent(Property\SubEventProperty $subEvent)
 * @method UserDownloadsType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UserDownloadsType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method UserDownloadsType setTranslator(Property\TranslatorProperty $translator)
 * @method UserDownloadsType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method UserDownloadsType setUrl(Property\UrlProperty $url)
 * @method UserDownloadsType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method UserDownloadsType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class UserDownloadsType extends UserInteractionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UserDownloads';
	}
}