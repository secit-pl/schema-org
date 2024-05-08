<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A plumbing service.
 * 
 * @method PlumberType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PlumberType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PlumberType setAddress(Property\AddressProperty $address)
 * @method PlumberType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PlumberType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PlumberType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PlumberType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PlumberType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PlumberType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PlumberType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PlumberType setDescription(Property\DescriptionProperty $description)
 * @method PlumberType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PlumberType setEvent(Property\EventProperty $event)
 * @method PlumberType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PlumberType setGeo(Property\GeoProperty $geo)
 * @method PlumberType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PlumberType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PlumberType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PlumberType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PlumberType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PlumberType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PlumberType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PlumberType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PlumberType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PlumberType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PlumberType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PlumberType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PlumberType setHasMap(Property\HasMapProperty $hasMap)
 * @method PlumberType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PlumberType setImage(Property\ImageProperty $image)
 * @method PlumberType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PlumberType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PlumberType setKeywords(Property\KeywordsProperty $keywords)
 * @method PlumberType setLatitude(Property\LatitudeProperty $latitude)
 * @method PlumberType setLogo(Property\LogoProperty $logo)
 * @method PlumberType setLongitude(Property\LongitudeProperty $longitude)
 * @method PlumberType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PlumberType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PlumberType setName(Property\NameProperty $name)
 * @method PlumberType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PlumberType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PlumberType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PlumberType setPhoto(Property\PhotoProperty $photo)
 * @method PlumberType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PlumberType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PlumberType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PlumberType setReview(Property\ReviewProperty $review)
 * @method PlumberType setSameAs(Property\SameAsProperty $sameAs)
 * @method PlumberType setSlogan(Property\SloganProperty $slogan)
 * @method PlumberType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PlumberType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PlumberType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PlumberType setTelephone(Property\TelephoneProperty $telephone)
 * @method PlumberType setUrl(Property\UrlProperty $url)
 */
class PlumberType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Plumber';
	}
}