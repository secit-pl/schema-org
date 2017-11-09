<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GatedResidenceCommunity.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\GatedResidenceCommunityType instead.
 * 
 * @method GatedResidenceCommunity setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method GatedResidenceCommunity setAdditionalType(Property\AdditionalType $additionalType)
 * @method GatedResidenceCommunity setAddress(Property\Address $address)
 * @method GatedResidenceCommunity setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GatedResidenceCommunity setAlternateName(Property\AlternateName $alternateName)
 * @method GatedResidenceCommunity setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method GatedResidenceCommunity setBranchCode(Property\BranchCode $branchCode)
 * @method GatedResidenceCommunity setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method GatedResidenceCommunity setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method GatedResidenceCommunity setDescription(Property\Description $description)
 * @method GatedResidenceCommunity setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GatedResidenceCommunity setEvent(Property\Event $event)
 * @method GatedResidenceCommunity setFaxNumber(Property\FaxNumber $faxNumber)
 * @method GatedResidenceCommunity setGeo(Property\Geo $geo)
 * @method GatedResidenceCommunity setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method GatedResidenceCommunity setHasMap(Property\HasMap $hasMap)
 * @method GatedResidenceCommunity setIdentifier(Property\Identifier $identifier)
 * @method GatedResidenceCommunity setImage(Property\Image $image)
 * @method GatedResidenceCommunity setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method GatedResidenceCommunity setIsicV4(Property\IsicV4 $isicV4)
 * @method GatedResidenceCommunity setLogo(Property\Logo $logo)
 * @method GatedResidenceCommunity setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GatedResidenceCommunity setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method GatedResidenceCommunity setName(Property\Name $name)
 * @method GatedResidenceCommunity setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method GatedResidenceCommunity setPhoto(Property\Photo $photo)
 * @method GatedResidenceCommunity setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GatedResidenceCommunity setPublicAccess(Property\PublicAccess $publicAccess)
 * @method GatedResidenceCommunity setReview(Property\Review $review)
 * @method GatedResidenceCommunity setSameAs(Property\SameAs $sameAs)
 * @method GatedResidenceCommunity setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method GatedResidenceCommunity setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method GatedResidenceCommunity setTelephone(Property\Telephone $telephone)
 * @method GatedResidenceCommunity setUrl(Property\Url $url)
 */
class GatedResidenceCommunity extends Residence {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GatedResidenceCommunity';
	}
}