<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A motorcycle dealer.
 * 
 * @method MotorcycleDealerType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MotorcycleDealerType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MotorcycleDealerType setAddress(Property\AddressProperty $address)
 * @method MotorcycleDealerType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MotorcycleDealerType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MotorcycleDealerType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MotorcycleDealerType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MotorcycleDealerType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MotorcycleDealerType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MotorcycleDealerType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MotorcycleDealerType setDescription(Property\DescriptionProperty $description)
 * @method MotorcycleDealerType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MotorcycleDealerType setEvent(Property\EventProperty $event)
 * @method MotorcycleDealerType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MotorcycleDealerType setGeo(Property\GeoProperty $geo)
 * @method MotorcycleDealerType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MotorcycleDealerType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MotorcycleDealerType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MotorcycleDealerType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MotorcycleDealerType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MotorcycleDealerType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MotorcycleDealerType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MotorcycleDealerType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MotorcycleDealerType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MotorcycleDealerType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MotorcycleDealerType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MotorcycleDealerType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MotorcycleDealerType setHasMap(Property\HasMapProperty $hasMap)
 * @method MotorcycleDealerType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MotorcycleDealerType setImage(Property\ImageProperty $image)
 * @method MotorcycleDealerType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MotorcycleDealerType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MotorcycleDealerType setKeywords(Property\KeywordsProperty $keywords)
 * @method MotorcycleDealerType setLatitude(Property\LatitudeProperty $latitude)
 * @method MotorcycleDealerType setLogo(Property\LogoProperty $logo)
 * @method MotorcycleDealerType setLongitude(Property\LongitudeProperty $longitude)
 * @method MotorcycleDealerType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MotorcycleDealerType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MotorcycleDealerType setName(Property\NameProperty $name)
 * @method MotorcycleDealerType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MotorcycleDealerType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MotorcycleDealerType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MotorcycleDealerType setPhoto(Property\PhotoProperty $photo)
 * @method MotorcycleDealerType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MotorcycleDealerType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MotorcycleDealerType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MotorcycleDealerType setReview(Property\ReviewProperty $review)
 * @method MotorcycleDealerType setSameAs(Property\SameAsProperty $sameAs)
 * @method MotorcycleDealerType setSlogan(Property\SloganProperty $slogan)
 * @method MotorcycleDealerType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MotorcycleDealerType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MotorcycleDealerType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MotorcycleDealerType setTelephone(Property\TelephoneProperty $telephone)
 * @method MotorcycleDealerType setUrl(Property\UrlProperty $url)
 */
class MotorcycleDealerType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MotorcycleDealer';
	}
}