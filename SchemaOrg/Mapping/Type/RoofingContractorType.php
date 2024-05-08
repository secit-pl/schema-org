<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A roofing contractor.
 * 
 * @method RoofingContractorType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RoofingContractorType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RoofingContractorType setAddress(Property\AddressProperty $address)
 * @method RoofingContractorType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RoofingContractorType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RoofingContractorType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method RoofingContractorType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method RoofingContractorType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method RoofingContractorType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method RoofingContractorType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method RoofingContractorType setDescription(Property\DescriptionProperty $description)
 * @method RoofingContractorType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RoofingContractorType setEvent(Property\EventProperty $event)
 * @method RoofingContractorType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RoofingContractorType setGeo(Property\GeoProperty $geo)
 * @method RoofingContractorType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method RoofingContractorType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method RoofingContractorType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method RoofingContractorType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method RoofingContractorType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method RoofingContractorType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method RoofingContractorType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method RoofingContractorType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method RoofingContractorType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method RoofingContractorType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method RoofingContractorType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RoofingContractorType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method RoofingContractorType setHasMap(Property\HasMapProperty $hasMap)
 * @method RoofingContractorType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RoofingContractorType setImage(Property\ImageProperty $image)
 * @method RoofingContractorType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method RoofingContractorType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RoofingContractorType setKeywords(Property\KeywordsProperty $keywords)
 * @method RoofingContractorType setLatitude(Property\LatitudeProperty $latitude)
 * @method RoofingContractorType setLogo(Property\LogoProperty $logo)
 * @method RoofingContractorType setLongitude(Property\LongitudeProperty $longitude)
 * @method RoofingContractorType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RoofingContractorType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method RoofingContractorType setName(Property\NameProperty $name)
 * @method RoofingContractorType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RoofingContractorType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method RoofingContractorType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method RoofingContractorType setPhoto(Property\PhotoProperty $photo)
 * @method RoofingContractorType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RoofingContractorType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method RoofingContractorType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method RoofingContractorType setReview(Property\ReviewProperty $review)
 * @method RoofingContractorType setSameAs(Property\SameAsProperty $sameAs)
 * @method RoofingContractorType setSlogan(Property\SloganProperty $slogan)
 * @method RoofingContractorType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method RoofingContractorType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method RoofingContractorType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RoofingContractorType setTelephone(Property\TelephoneProperty $telephone)
 * @method RoofingContractorType setUrl(Property\UrlProperty $url)
 */
class RoofingContractorType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RoofingContractor';
	}
}