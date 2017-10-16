<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CatholicChurch.
 * 
 * @method CatholicChurch setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CatholicChurch setAdditionalType(Property\AdditionalType $additionalType)
 * @method CatholicChurch setAddress(Property\Address $address)
 * @method CatholicChurch setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method CatholicChurch setAlternateName(Property\AlternateName $alternateName)
 * @method CatholicChurch setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method CatholicChurch setBranchCode(Property\BranchCode $branchCode)
 * @method CatholicChurch setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method CatholicChurch setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method CatholicChurch setDescription(Property\Description $description)
 * @method CatholicChurch setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CatholicChurch setEvent(Property\Event $event)
 * @method CatholicChurch setFaxNumber(Property\FaxNumber $faxNumber)
 * @method CatholicChurch setGeo(Property\Geo $geo)
 * @method CatholicChurch setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method CatholicChurch setHasMap(Property\HasMap $hasMap)
 * @method CatholicChurch setIdentifier(Property\Identifier $identifier)
 * @method CatholicChurch setImage(Property\Image $image)
 * @method CatholicChurch setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method CatholicChurch setIsicV4(Property\IsicV4 $isicV4)
 * @method CatholicChurch setLogo(Property\Logo $logo)
 * @method CatholicChurch setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CatholicChurch setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method CatholicChurch setName(Property\Name $name)
 * @method CatholicChurch setOpeningHours(Property\OpeningHours $openingHours)
 * @method CatholicChurch setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method CatholicChurch setPhoto(Property\Photo $photo)
 * @method CatholicChurch setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CatholicChurch setPublicAccess(Property\PublicAccess $publicAccess)
 * @method CatholicChurch setReview(Property\Review $review)
 * @method CatholicChurch setSameAs(Property\SameAs $sameAs)
 * @method CatholicChurch setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method CatholicChurch setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method CatholicChurch setTelephone(Property\Telephone $telephone)
 * @method CatholicChurch setUrl(Property\Url $url)
 */
class CatholicChurch extends PlaceOfWorship {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CatholicChurch';
	}
}