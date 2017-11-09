<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OnDemandEventType.
 * 
 * @method OnDemandEventType setActor(Property\ActorProperty $actor)
 * @method OnDemandEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OnDemandEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method OnDemandEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OnDemandEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method OnDemandEventType setAudience(Property\AudienceProperty $audience)
 * @method OnDemandEventType setComposer(Property\ComposerProperty $composer)
 * @method OnDemandEventType setContributor(Property\ContributorProperty $contributor)
 * @method OnDemandEventType setDescription(Property\DescriptionProperty $description)
 * @method OnDemandEventType setDirector(Property\DirectorProperty $director)
 * @method OnDemandEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OnDemandEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method OnDemandEventType setEndDate(Property\EndDateProperty $endDate)
 * @method OnDemandEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method OnDemandEventType setFunder(Property\FunderProperty $funder)
 * @method OnDemandEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OnDemandEventType setImage(Property\ImageProperty $image)
 * @method OnDemandEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method OnDemandEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method OnDemandEventType setLocation(Property\LocationProperty $location)
 * @method OnDemandEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OnDemandEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method OnDemandEventType setName(Property\NameProperty $name)
 * @method OnDemandEventType setOffers(Property\OffersProperty $offers)
 * @method OnDemandEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method OnDemandEventType setPerformer(Property\PerformerProperty $performer)
 * @method OnDemandEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OnDemandEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method OnDemandEventType setPublishedOn(Property\PublishedOnProperty $publishedOn)
 * @method OnDemandEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method OnDemandEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method OnDemandEventType setReview(Property\ReviewProperty $review)
 * @method OnDemandEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method OnDemandEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method OnDemandEventType setStartDate(Property\StartDateProperty $startDate)
 * @method OnDemandEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method OnDemandEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method OnDemandEventType setTranslator(Property\TranslatorProperty $translator)
 * @method OnDemandEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method OnDemandEventType setUrl(Property\UrlProperty $url)
 * @method OnDemandEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method OnDemandEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class OnDemandEventType extends PublicationEventType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OnDemandEvent';
	}
}