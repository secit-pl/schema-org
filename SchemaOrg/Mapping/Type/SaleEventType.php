<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SaleEventType.
 * 
 * @method SaleEventType setActor(Property\ActorProperty $actor)
 * @method SaleEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SaleEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SaleEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SaleEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method SaleEventType setAudience(Property\AudienceProperty $audience)
 * @method SaleEventType setComposer(Property\ComposerProperty $composer)
 * @method SaleEventType setContributor(Property\ContributorProperty $contributor)
 * @method SaleEventType setDescription(Property\DescriptionProperty $description)
 * @method SaleEventType setDirector(Property\DirectorProperty $director)
 * @method SaleEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SaleEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method SaleEventType setEndDate(Property\EndDateProperty $endDate)
 * @method SaleEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method SaleEventType setFunder(Property\FunderProperty $funder)
 * @method SaleEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SaleEventType setImage(Property\ImageProperty $image)
 * @method SaleEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method SaleEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SaleEventType setLocation(Property\LocationProperty $location)
 * @method SaleEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SaleEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SaleEventType setName(Property\NameProperty $name)
 * @method SaleEventType setOffers(Property\OffersProperty $offers)
 * @method SaleEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method SaleEventType setPerformer(Property\PerformerProperty $performer)
 * @method SaleEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SaleEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method SaleEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method SaleEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method SaleEventType setReview(Property\ReviewProperty $review)
 * @method SaleEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method SaleEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method SaleEventType setStartDate(Property\StartDateProperty $startDate)
 * @method SaleEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method SaleEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method SaleEventType setTranslator(Property\TranslatorProperty $translator)
 * @method SaleEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method SaleEventType setUrl(Property\UrlProperty $url)
 * @method SaleEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method SaleEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class SaleEventType extends EventType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SaleEvent';
	}
}