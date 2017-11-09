<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FestivalType.
 * 
 * @method FestivalType setActor(Property\ActorProperty $actor)
 * @method FestivalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FestivalType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FestivalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FestivalType setAttendee(Property\AttendeeProperty $attendee)
 * @method FestivalType setAudience(Property\AudienceProperty $audience)
 * @method FestivalType setComposer(Property\ComposerProperty $composer)
 * @method FestivalType setContributor(Property\ContributorProperty $contributor)
 * @method FestivalType setDescription(Property\DescriptionProperty $description)
 * @method FestivalType setDirector(Property\DirectorProperty $director)
 * @method FestivalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FestivalType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method FestivalType setEndDate(Property\EndDateProperty $endDate)
 * @method FestivalType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method FestivalType setFunder(Property\FunderProperty $funder)
 * @method FestivalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FestivalType setImage(Property\ImageProperty $image)
 * @method FestivalType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method FestivalType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method FestivalType setLocation(Property\LocationProperty $location)
 * @method FestivalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FestivalType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method FestivalType setName(Property\NameProperty $name)
 * @method FestivalType setOffers(Property\OffersProperty $offers)
 * @method FestivalType setOrganizer(Property\OrganizerProperty $organizer)
 * @method FestivalType setPerformer(Property\PerformerProperty $performer)
 * @method FestivalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FestivalType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method FestivalType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method FestivalType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method FestivalType setReview(Property\ReviewProperty $review)
 * @method FestivalType setSameAs(Property\SameAsProperty $sameAs)
 * @method FestivalType setSponsor(Property\SponsorProperty $sponsor)
 * @method FestivalType setStartDate(Property\StartDateProperty $startDate)
 * @method FestivalType setSubEvent(Property\SubEventProperty $subEvent)
 * @method FestivalType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method FestivalType setTranslator(Property\TranslatorProperty $translator)
 * @method FestivalType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method FestivalType setUrl(Property\UrlProperty $url)
 * @method FestivalType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method FestivalType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class FestivalType extends EventType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Festival';
	}
}