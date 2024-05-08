<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use Action-based vocabulary, alongside types such as Comment.
 * 
 * @method UserCheckinsType setAbout(Property\AboutProperty $about)
 * @method UserCheckinsType setActor(Property\ActorProperty $actor)
 * @method UserCheckinsType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UserCheckinsType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method UserCheckinsType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UserCheckinsType setAttendee(Property\AttendeeProperty $attendee)
 * @method UserCheckinsType setAudience(Property\AudienceProperty $audience)
 * @method UserCheckinsType setComposer(Property\ComposerProperty $composer)
 * @method UserCheckinsType setContributor(Property\ContributorProperty $contributor)
 * @method UserCheckinsType setDescription(Property\DescriptionProperty $description)
 * @method UserCheckinsType setDirector(Property\DirectorProperty $director)
 * @method UserCheckinsType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UserCheckinsType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method UserCheckinsType setDuration(Property\DurationProperty $duration)
 * @method UserCheckinsType setEndDate(Property\EndDateProperty $endDate)
 * @method UserCheckinsType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method UserCheckinsType setFunder(Property\FunderProperty $funder)
 * @method UserCheckinsType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UserCheckinsType setImage(Property\ImageProperty $image)
 * @method UserCheckinsType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method UserCheckinsType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method UserCheckinsType setKeywords(Property\KeywordsProperty $keywords)
 * @method UserCheckinsType setLocation(Property\LocationProperty $location)
 * @method UserCheckinsType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UserCheckinsType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method UserCheckinsType setName(Property\NameProperty $name)
 * @method UserCheckinsType setOffers(Property\OffersProperty $offers)
 * @method UserCheckinsType setOrganizer(Property\OrganizerProperty $organizer)
 * @method UserCheckinsType setPerformer(Property\PerformerProperty $performer)
 * @method UserCheckinsType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UserCheckinsType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method UserCheckinsType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method UserCheckinsType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method UserCheckinsType setReview(Property\ReviewProperty $review)
 * @method UserCheckinsType setSameAs(Property\SameAsProperty $sameAs)
 * @method UserCheckinsType setSponsor(Property\SponsorProperty $sponsor)
 * @method UserCheckinsType setStartDate(Property\StartDateProperty $startDate)
 * @method UserCheckinsType setSubEvent(Property\SubEventProperty $subEvent)
 * @method UserCheckinsType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UserCheckinsType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method UserCheckinsType setTranslator(Property\TranslatorProperty $translator)
 * @method UserCheckinsType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method UserCheckinsType setUrl(Property\UrlProperty $url)
 * @method UserCheckinsType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method UserCheckinsType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class UserCheckinsType extends UserInteractionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UserCheckins';
	}
}