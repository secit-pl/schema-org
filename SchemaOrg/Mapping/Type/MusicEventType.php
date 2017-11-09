<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicEventType.
 * 
 * @method MusicEventType setActor(Property\ActorProperty $actor)
 * @method MusicEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MusicEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MusicEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MusicEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method MusicEventType setAudience(Property\AudienceProperty $audience)
 * @method MusicEventType setComposer(Property\ComposerProperty $composer)
 * @method MusicEventType setContributor(Property\ContributorProperty $contributor)
 * @method MusicEventType setDescription(Property\DescriptionProperty $description)
 * @method MusicEventType setDirector(Property\DirectorProperty $director)
 * @method MusicEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MusicEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method MusicEventType setEndDate(Property\EndDateProperty $endDate)
 * @method MusicEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method MusicEventType setFunder(Property\FunderProperty $funder)
 * @method MusicEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MusicEventType setImage(Property\ImageProperty $image)
 * @method MusicEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method MusicEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MusicEventType setLocation(Property\LocationProperty $location)
 * @method MusicEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MusicEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MusicEventType setName(Property\NameProperty $name)
 * @method MusicEventType setOffers(Property\OffersProperty $offers)
 * @method MusicEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method MusicEventType setPerformer(Property\PerformerProperty $performer)
 * @method MusicEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MusicEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method MusicEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method MusicEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method MusicEventType setReview(Property\ReviewProperty $review)
 * @method MusicEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method MusicEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method MusicEventType setStartDate(Property\StartDateProperty $startDate)
 * @method MusicEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method MusicEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method MusicEventType setTranslator(Property\TranslatorProperty $translator)
 * @method MusicEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method MusicEventType setUrl(Property\UrlProperty $url)
 * @method MusicEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method MusicEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class MusicEventType extends EventType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicEvent';
	}
}