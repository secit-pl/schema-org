<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A doctor's office or clinic.
 * 
 * @method PhysiciansOfficeType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PhysiciansOfficeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PhysiciansOfficeType setAddress(Property\AddressProperty $address)
 * @method PhysiciansOfficeType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PhysiciansOfficeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PhysiciansOfficeType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PhysiciansOfficeType setAvailableService(Property\AvailableServiceProperty $availableService)
 * @method PhysiciansOfficeType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PhysiciansOfficeType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PhysiciansOfficeType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PhysiciansOfficeType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PhysiciansOfficeType setDescription(Property\DescriptionProperty $description)
 * @method PhysiciansOfficeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PhysiciansOfficeType setEvent(Property\EventProperty $event)
 * @method PhysiciansOfficeType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PhysiciansOfficeType setGeo(Property\GeoProperty $geo)
 * @method PhysiciansOfficeType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PhysiciansOfficeType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PhysiciansOfficeType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PhysiciansOfficeType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PhysiciansOfficeType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PhysiciansOfficeType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PhysiciansOfficeType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PhysiciansOfficeType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PhysiciansOfficeType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PhysiciansOfficeType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PhysiciansOfficeType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PhysiciansOfficeType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PhysiciansOfficeType setHasMap(Property\HasMapProperty $hasMap)
 * @method PhysiciansOfficeType setHospitalAffiliation(Property\HospitalAffiliationProperty $hospitalAffiliation)
 * @method PhysiciansOfficeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PhysiciansOfficeType setImage(Property\ImageProperty $image)
 * @method PhysiciansOfficeType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PhysiciansOfficeType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PhysiciansOfficeType setKeywords(Property\KeywordsProperty $keywords)
 * @method PhysiciansOfficeType setLatitude(Property\LatitudeProperty $latitude)
 * @method PhysiciansOfficeType setLogo(Property\LogoProperty $logo)
 * @method PhysiciansOfficeType setLongitude(Property\LongitudeProperty $longitude)
 * @method PhysiciansOfficeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PhysiciansOfficeType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PhysiciansOfficeType setMedicalSpecialty(Property\MedicalSpecialtyProperty $medicalSpecialty)
 * @method PhysiciansOfficeType setName(Property\NameProperty $name)
 * @method PhysiciansOfficeType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PhysiciansOfficeType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PhysiciansOfficeType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PhysiciansOfficeType setPhoto(Property\PhotoProperty $photo)
 * @method PhysiciansOfficeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PhysiciansOfficeType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PhysiciansOfficeType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PhysiciansOfficeType setReview(Property\ReviewProperty $review)
 * @method PhysiciansOfficeType setSameAs(Property\SameAsProperty $sameAs)
 * @method PhysiciansOfficeType setSlogan(Property\SloganProperty $slogan)
 * @method PhysiciansOfficeType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PhysiciansOfficeType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PhysiciansOfficeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PhysiciansOfficeType setTelephone(Property\TelephoneProperty $telephone)
 * @method PhysiciansOfficeType setUrl(Property\UrlProperty $url)
 */
class PhysiciansOfficeType extends PhysicianType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PhysiciansOffice';
	}
}