<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LakeBodyOfWater.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LakeBodyOfWaterType instead.
 * 
 * @method LakeBodyOfWater setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LakeBodyOfWater setAdditionalType(Property\AdditionalType $additionalType)
 * @method LakeBodyOfWater setAddress(Property\Address $address)
 * @method LakeBodyOfWater setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method LakeBodyOfWater setAlternateName(Property\AlternateName $alternateName)
 * @method LakeBodyOfWater setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method LakeBodyOfWater setBranchCode(Property\BranchCode $branchCode)
 * @method LakeBodyOfWater setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method LakeBodyOfWater setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method LakeBodyOfWater setDescription(Property\Description $description)
 * @method LakeBodyOfWater setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LakeBodyOfWater setEvent(Property\Event $event)
 * @method LakeBodyOfWater setFaxNumber(Property\FaxNumber $faxNumber)
 * @method LakeBodyOfWater setGeo(Property\Geo $geo)
 * @method LakeBodyOfWater setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method LakeBodyOfWater setHasMap(Property\HasMap $hasMap)
 * @method LakeBodyOfWater setIdentifier(Property\Identifier $identifier)
 * @method LakeBodyOfWater setImage(Property\Image $image)
 * @method LakeBodyOfWater setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method LakeBodyOfWater setIsicV4(Property\IsicV4 $isicV4)
 * @method LakeBodyOfWater setLogo(Property\Logo $logo)
 * @method LakeBodyOfWater setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LakeBodyOfWater setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method LakeBodyOfWater setName(Property\Name $name)
 * @method LakeBodyOfWater setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method LakeBodyOfWater setPhoto(Property\Photo $photo)
 * @method LakeBodyOfWater setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LakeBodyOfWater setPublicAccess(Property\PublicAccess $publicAccess)
 * @method LakeBodyOfWater setReview(Property\Review $review)
 * @method LakeBodyOfWater setSameAs(Property\SameAs $sameAs)
 * @method LakeBodyOfWater setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method LakeBodyOfWater setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method LakeBodyOfWater setTelephone(Property\Telephone $telephone)
 * @method LakeBodyOfWater setUrl(Property\Url $url)
 */
class LakeBodyOfWater extends BodyOfWater {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LakeBodyOfWater';
	}
}