<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An amusement park.
 * 
 * @method AmusementParkType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AmusementParkType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AmusementParkType setAddress(Property\AddressProperty $address)
 * @method AmusementParkType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AmusementParkType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AmusementParkType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AmusementParkType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AmusementParkType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AmusementParkType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AmusementParkType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AmusementParkType setDescription(Property\DescriptionProperty $description)
 * @method AmusementParkType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AmusementParkType setEvent(Property\EventProperty $event)
 * @method AmusementParkType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AmusementParkType setGeo(Property\GeoProperty $geo)
 * @method AmusementParkType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AmusementParkType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AmusementParkType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AmusementParkType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AmusementParkType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AmusementParkType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AmusementParkType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AmusementParkType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AmusementParkType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AmusementParkType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AmusementParkType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AmusementParkType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AmusementParkType setHasMap(Property\HasMapProperty $hasMap)
 * @method AmusementParkType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AmusementParkType setImage(Property\ImageProperty $image)
 * @method AmusementParkType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AmusementParkType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AmusementParkType setKeywords(Property\KeywordsProperty $keywords)
 * @method AmusementParkType setLatitude(Property\LatitudeProperty $latitude)
 * @method AmusementParkType setLogo(Property\LogoProperty $logo)
 * @method AmusementParkType setLongitude(Property\LongitudeProperty $longitude)
 * @method AmusementParkType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AmusementParkType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AmusementParkType setName(Property\NameProperty $name)
 * @method AmusementParkType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AmusementParkType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AmusementParkType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AmusementParkType setPhoto(Property\PhotoProperty $photo)
 * @method AmusementParkType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AmusementParkType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AmusementParkType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AmusementParkType setReview(Property\ReviewProperty $review)
 * @method AmusementParkType setSameAs(Property\SameAsProperty $sameAs)
 * @method AmusementParkType setSlogan(Property\SloganProperty $slogan)
 * @method AmusementParkType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AmusementParkType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AmusementParkType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AmusementParkType setTelephone(Property\TelephoneProperty $telephone)
 * @method AmusementParkType setUrl(Property\UrlProperty $url)
 */
class AmusementParkType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AmusementPark';
	}
}