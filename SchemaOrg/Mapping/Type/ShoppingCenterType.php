<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A shopping center or mall.
 * 
 * @method ShoppingCenterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ShoppingCenterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ShoppingCenterType setAddress(Property\AddressProperty $address)
 * @method ShoppingCenterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ShoppingCenterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ShoppingCenterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ShoppingCenterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ShoppingCenterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ShoppingCenterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ShoppingCenterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ShoppingCenterType setDescription(Property\DescriptionProperty $description)
 * @method ShoppingCenterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ShoppingCenterType setEvent(Property\EventProperty $event)
 * @method ShoppingCenterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ShoppingCenterType setGeo(Property\GeoProperty $geo)
 * @method ShoppingCenterType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ShoppingCenterType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ShoppingCenterType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ShoppingCenterType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ShoppingCenterType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ShoppingCenterType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ShoppingCenterType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ShoppingCenterType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ShoppingCenterType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ShoppingCenterType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ShoppingCenterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ShoppingCenterType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ShoppingCenterType setHasMap(Property\HasMapProperty $hasMap)
 * @method ShoppingCenterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ShoppingCenterType setImage(Property\ImageProperty $image)
 * @method ShoppingCenterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ShoppingCenterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ShoppingCenterType setKeywords(Property\KeywordsProperty $keywords)
 * @method ShoppingCenterType setLatitude(Property\LatitudeProperty $latitude)
 * @method ShoppingCenterType setLogo(Property\LogoProperty $logo)
 * @method ShoppingCenterType setLongitude(Property\LongitudeProperty $longitude)
 * @method ShoppingCenterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ShoppingCenterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ShoppingCenterType setName(Property\NameProperty $name)
 * @method ShoppingCenterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ShoppingCenterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ShoppingCenterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ShoppingCenterType setPhoto(Property\PhotoProperty $photo)
 * @method ShoppingCenterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ShoppingCenterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ShoppingCenterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ShoppingCenterType setReview(Property\ReviewProperty $review)
 * @method ShoppingCenterType setSameAs(Property\SameAsProperty $sameAs)
 * @method ShoppingCenterType setSlogan(Property\SloganProperty $slogan)
 * @method ShoppingCenterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ShoppingCenterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ShoppingCenterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ShoppingCenterType setTelephone(Property\TelephoneProperty $telephone)
 * @method ShoppingCenterType setUrl(Property\UrlProperty $url)
 */
class ShoppingCenterType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ShoppingCenter';
	}
}