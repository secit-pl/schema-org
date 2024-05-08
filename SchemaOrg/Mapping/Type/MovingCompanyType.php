<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A moving company.
 * 
 * @method MovingCompanyType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MovingCompanyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MovingCompanyType setAddress(Property\AddressProperty $address)
 * @method MovingCompanyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MovingCompanyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MovingCompanyType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MovingCompanyType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MovingCompanyType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MovingCompanyType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MovingCompanyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MovingCompanyType setDescription(Property\DescriptionProperty $description)
 * @method MovingCompanyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MovingCompanyType setEvent(Property\EventProperty $event)
 * @method MovingCompanyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MovingCompanyType setGeo(Property\GeoProperty $geo)
 * @method MovingCompanyType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MovingCompanyType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MovingCompanyType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MovingCompanyType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MovingCompanyType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MovingCompanyType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MovingCompanyType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MovingCompanyType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MovingCompanyType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MovingCompanyType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MovingCompanyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MovingCompanyType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MovingCompanyType setHasMap(Property\HasMapProperty $hasMap)
 * @method MovingCompanyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MovingCompanyType setImage(Property\ImageProperty $image)
 * @method MovingCompanyType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MovingCompanyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MovingCompanyType setKeywords(Property\KeywordsProperty $keywords)
 * @method MovingCompanyType setLatitude(Property\LatitudeProperty $latitude)
 * @method MovingCompanyType setLogo(Property\LogoProperty $logo)
 * @method MovingCompanyType setLongitude(Property\LongitudeProperty $longitude)
 * @method MovingCompanyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MovingCompanyType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MovingCompanyType setName(Property\NameProperty $name)
 * @method MovingCompanyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MovingCompanyType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MovingCompanyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MovingCompanyType setPhoto(Property\PhotoProperty $photo)
 * @method MovingCompanyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MovingCompanyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MovingCompanyType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MovingCompanyType setReview(Property\ReviewProperty $review)
 * @method MovingCompanyType setSameAs(Property\SameAsProperty $sameAs)
 * @method MovingCompanyType setSlogan(Property\SloganProperty $slogan)
 * @method MovingCompanyType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MovingCompanyType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MovingCompanyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MovingCompanyType setTelephone(Property\TelephoneProperty $telephone)
 * @method MovingCompanyType setUrl(Property\UrlProperty $url)
 */
class MovingCompanyType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MovingCompany';
	}
}