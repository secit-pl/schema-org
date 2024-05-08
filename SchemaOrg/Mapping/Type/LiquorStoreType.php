<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A shop that sells alcoholic drinks such as wine, beer, whisky and other spirits.
 * 
 * @method LiquorStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LiquorStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LiquorStoreType setAddress(Property\AddressProperty $address)
 * @method LiquorStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LiquorStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LiquorStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LiquorStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LiquorStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LiquorStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LiquorStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method LiquorStoreType setDescription(Property\DescriptionProperty $description)
 * @method LiquorStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LiquorStoreType setEvent(Property\EventProperty $event)
 * @method LiquorStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LiquorStoreType setGeo(Property\GeoProperty $geo)
 * @method LiquorStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method LiquorStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method LiquorStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method LiquorStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method LiquorStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method LiquorStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method LiquorStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method LiquorStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method LiquorStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method LiquorStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method LiquorStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LiquorStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method LiquorStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method LiquorStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LiquorStoreType setImage(Property\ImageProperty $image)
 * @method LiquorStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LiquorStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LiquorStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method LiquorStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method LiquorStoreType setLogo(Property\LogoProperty $logo)
 * @method LiquorStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method LiquorStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LiquorStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LiquorStoreType setName(Property\NameProperty $name)
 * @method LiquorStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LiquorStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LiquorStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method LiquorStoreType setPhoto(Property\PhotoProperty $photo)
 * @method LiquorStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LiquorStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method LiquorStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LiquorStoreType setReview(Property\ReviewProperty $review)
 * @method LiquorStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method LiquorStoreType setSlogan(Property\SloganProperty $slogan)
 * @method LiquorStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LiquorStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LiquorStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LiquorStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method LiquorStoreType setUrl(Property\UrlProperty $url)
 */
class LiquorStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LiquorStore';
	}
}