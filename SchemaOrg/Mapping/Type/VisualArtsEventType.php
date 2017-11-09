<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VisualArtsEventType.
 * 
 * @method VisualArtsEventType setActor(Property\ActorProperty $actor)
 * @method VisualArtsEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VisualArtsEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method VisualArtsEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VisualArtsEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method VisualArtsEventType setAudience(Property\AudienceProperty $audience)
 * @method VisualArtsEventType setComposer(Property\ComposerProperty $composer)
 * @method VisualArtsEventType setContributor(Property\ContributorProperty $contributor)
 * @method VisualArtsEventType setDescription(Property\DescriptionProperty $description)
 * @method VisualArtsEventType setDirector(Property\DirectorProperty $director)
 * @method VisualArtsEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VisualArtsEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method VisualArtsEventType setEndDate(Property\EndDateProperty $endDate)
 * @method VisualArtsEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method VisualArtsEventType setFunder(Property\FunderProperty $funder)
 * @method VisualArtsEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VisualArtsEventType setImage(Property\ImageProperty $image)
 * @method VisualArtsEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method VisualArtsEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method VisualArtsEventType setLocation(Property\LocationProperty $location)
 * @method VisualArtsEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VisualArtsEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method VisualArtsEventType setName(Property\NameProperty $name)
 * @method VisualArtsEventType setOffers(Property\OffersProperty $offers)
 * @method VisualArtsEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method VisualArtsEventType setPerformer(Property\PerformerProperty $performer)
 * @method VisualArtsEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VisualArtsEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method VisualArtsEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method VisualArtsEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method VisualArtsEventType setReview(Property\ReviewProperty $review)
 * @method VisualArtsEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method VisualArtsEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method VisualArtsEventType setStartDate(Property\StartDateProperty $startDate)
 * @method VisualArtsEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method VisualArtsEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method VisualArtsEventType setTranslator(Property\TranslatorProperty $translator)
 * @method VisualArtsEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method VisualArtsEventType setUrl(Property\UrlProperty $url)
 * @method VisualArtsEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method VisualArtsEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class VisualArtsEventType extends EventType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VisualArtsEvent';
	}
}