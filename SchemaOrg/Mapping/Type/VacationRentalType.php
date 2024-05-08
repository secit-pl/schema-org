<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A kind of lodging business that focuses on renting single properties for limited time.
 * 
 * @method VacationRentalType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method VacationRentalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VacationRentalType setAddress(Property\AddressProperty $address)
 * @method VacationRentalType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method VacationRentalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VacationRentalType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method VacationRentalType setAudience(Property\AudienceProperty $audience)
 * @method VacationRentalType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method VacationRentalType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method VacationRentalType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method VacationRentalType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method VacationRentalType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method VacationRentalType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method VacationRentalType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method VacationRentalType setDescription(Property\DescriptionProperty $description)
 * @method VacationRentalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VacationRentalType setEvent(Property\EventProperty $event)
 * @method VacationRentalType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method VacationRentalType setGeo(Property\GeoProperty $geo)
 * @method VacationRentalType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method VacationRentalType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method VacationRentalType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method VacationRentalType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method VacationRentalType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method VacationRentalType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method VacationRentalType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method VacationRentalType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method VacationRentalType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method VacationRentalType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method VacationRentalType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method VacationRentalType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method VacationRentalType setHasMap(Property\HasMapProperty $hasMap)
 * @method VacationRentalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VacationRentalType setImage(Property\ImageProperty $image)
 * @method VacationRentalType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method VacationRentalType setIsicV4(Property\IsicV4Property $isicV4)
 * @method VacationRentalType setKeywords(Property\KeywordsProperty $keywords)
 * @method VacationRentalType setLatitude(Property\LatitudeProperty $latitude)
 * @method VacationRentalType setLogo(Property\LogoProperty $logo)
 * @method VacationRentalType setLongitude(Property\LongitudeProperty $longitude)
 * @method VacationRentalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VacationRentalType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method VacationRentalType setName(Property\NameProperty $name)
 * @method VacationRentalType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method VacationRentalType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method VacationRentalType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method VacationRentalType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method VacationRentalType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method VacationRentalType setPhoto(Property\PhotoProperty $photo)
 * @method VacationRentalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VacationRentalType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method VacationRentalType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method VacationRentalType setReview(Property\ReviewProperty $review)
 * @method VacationRentalType setSameAs(Property\SameAsProperty $sameAs)
 * @method VacationRentalType setSlogan(Property\SloganProperty $slogan)
 * @method VacationRentalType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method VacationRentalType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method VacationRentalType setStarRating(Property\StarRatingProperty $starRating)
 * @method VacationRentalType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method VacationRentalType setTelephone(Property\TelephoneProperty $telephone)
 * @method VacationRentalType setUrl(Property\UrlProperty $url)
 */
class VacationRentalType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VacationRental';
	}
}