<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Animal shelter.
 * 
 * @method AnimalShelterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AnimalShelterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AnimalShelterType setAddress(Property\AddressProperty $address)
 * @method AnimalShelterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AnimalShelterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AnimalShelterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AnimalShelterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AnimalShelterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AnimalShelterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AnimalShelterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AnimalShelterType setDescription(Property\DescriptionProperty $description)
 * @method AnimalShelterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AnimalShelterType setEvent(Property\EventProperty $event)
 * @method AnimalShelterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AnimalShelterType setGeo(Property\GeoProperty $geo)
 * @method AnimalShelterType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AnimalShelterType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AnimalShelterType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AnimalShelterType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AnimalShelterType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AnimalShelterType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AnimalShelterType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AnimalShelterType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AnimalShelterType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AnimalShelterType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AnimalShelterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AnimalShelterType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AnimalShelterType setHasMap(Property\HasMapProperty $hasMap)
 * @method AnimalShelterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AnimalShelterType setImage(Property\ImageProperty $image)
 * @method AnimalShelterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AnimalShelterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AnimalShelterType setKeywords(Property\KeywordsProperty $keywords)
 * @method AnimalShelterType setLatitude(Property\LatitudeProperty $latitude)
 * @method AnimalShelterType setLogo(Property\LogoProperty $logo)
 * @method AnimalShelterType setLongitude(Property\LongitudeProperty $longitude)
 * @method AnimalShelterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AnimalShelterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AnimalShelterType setName(Property\NameProperty $name)
 * @method AnimalShelterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AnimalShelterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AnimalShelterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AnimalShelterType setPhoto(Property\PhotoProperty $photo)
 * @method AnimalShelterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AnimalShelterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AnimalShelterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AnimalShelterType setReview(Property\ReviewProperty $review)
 * @method AnimalShelterType setSameAs(Property\SameAsProperty $sameAs)
 * @method AnimalShelterType setSlogan(Property\SloganProperty $slogan)
 * @method AnimalShelterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AnimalShelterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AnimalShelterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AnimalShelterType setTelephone(Property\TelephoneProperty $telephone)
 * @method AnimalShelterType setUrl(Property\UrlProperty $url)
 */
class AnimalShelterType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AnimalShelter';
	}
}