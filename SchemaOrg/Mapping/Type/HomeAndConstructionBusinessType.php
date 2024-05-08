<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A construction business. A HomeAndConstructionBusiness is a LocalBusiness that provides services around homes and buildings. As a LocalBusiness it can be described as a provider of one or more Service(s).
 * 
 * @method HomeAndConstructionBusinessType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HomeAndConstructionBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HomeAndConstructionBusinessType setAddress(Property\AddressProperty $address)
 * @method HomeAndConstructionBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HomeAndConstructionBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HomeAndConstructionBusinessType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HomeAndConstructionBusinessType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HomeAndConstructionBusinessType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HomeAndConstructionBusinessType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HomeAndConstructionBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HomeAndConstructionBusinessType setDescription(Property\DescriptionProperty $description)
 * @method HomeAndConstructionBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HomeAndConstructionBusinessType setEvent(Property\EventProperty $event)
 * @method HomeAndConstructionBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HomeAndConstructionBusinessType setGeo(Property\GeoProperty $geo)
 * @method HomeAndConstructionBusinessType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HomeAndConstructionBusinessType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HomeAndConstructionBusinessType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HomeAndConstructionBusinessType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HomeAndConstructionBusinessType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HomeAndConstructionBusinessType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HomeAndConstructionBusinessType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HomeAndConstructionBusinessType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HomeAndConstructionBusinessType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HomeAndConstructionBusinessType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HomeAndConstructionBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HomeAndConstructionBusinessType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HomeAndConstructionBusinessType setHasMap(Property\HasMapProperty $hasMap)
 * @method HomeAndConstructionBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HomeAndConstructionBusinessType setImage(Property\ImageProperty $image)
 * @method HomeAndConstructionBusinessType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HomeAndConstructionBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HomeAndConstructionBusinessType setKeywords(Property\KeywordsProperty $keywords)
 * @method HomeAndConstructionBusinessType setLatitude(Property\LatitudeProperty $latitude)
 * @method HomeAndConstructionBusinessType setLogo(Property\LogoProperty $logo)
 * @method HomeAndConstructionBusinessType setLongitude(Property\LongitudeProperty $longitude)
 * @method HomeAndConstructionBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HomeAndConstructionBusinessType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HomeAndConstructionBusinessType setName(Property\NameProperty $name)
 * @method HomeAndConstructionBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HomeAndConstructionBusinessType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HomeAndConstructionBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HomeAndConstructionBusinessType setPhoto(Property\PhotoProperty $photo)
 * @method HomeAndConstructionBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HomeAndConstructionBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HomeAndConstructionBusinessType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HomeAndConstructionBusinessType setReview(Property\ReviewProperty $review)
 * @method HomeAndConstructionBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method HomeAndConstructionBusinessType setSlogan(Property\SloganProperty $slogan)
 * @method HomeAndConstructionBusinessType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HomeAndConstructionBusinessType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HomeAndConstructionBusinessType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HomeAndConstructionBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method HomeAndConstructionBusinessType setUrl(Property\UrlProperty $url)
 */
class HomeAndConstructionBusinessType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HomeAndConstructionBusiness';
	}
}