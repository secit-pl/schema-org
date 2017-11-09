<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SingleFamilyResidence.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\SingleFamilyResidenceType instead.
 * 
 * @method SingleFamilyResidence setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SingleFamilyResidence setAdditionalType(Property\AdditionalType $additionalType)
 * @method SingleFamilyResidence setAddress(Property\Address $address)
 * @method SingleFamilyResidence setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SingleFamilyResidence setAlternateName(Property\AlternateName $alternateName)
 * @method SingleFamilyResidence setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method SingleFamilyResidence setBranchCode(Property\BranchCode $branchCode)
 * @method SingleFamilyResidence setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method SingleFamilyResidence setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method SingleFamilyResidence setDescription(Property\Description $description)
 * @method SingleFamilyResidence setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SingleFamilyResidence setEvent(Property\Event $event)
 * @method SingleFamilyResidence setFaxNumber(Property\FaxNumber $faxNumber)
 * @method SingleFamilyResidence setFloorSize(Property\FloorSize $floorSize)
 * @method SingleFamilyResidence setGeo(Property\Geo $geo)
 * @method SingleFamilyResidence setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method SingleFamilyResidence setHasMap(Property\HasMap $hasMap)
 * @method SingleFamilyResidence setIdentifier(Property\Identifier $identifier)
 * @method SingleFamilyResidence setImage(Property\Image $image)
 * @method SingleFamilyResidence setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method SingleFamilyResidence setIsicV4(Property\IsicV4 $isicV4)
 * @method SingleFamilyResidence setLogo(Property\Logo $logo)
 * @method SingleFamilyResidence setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SingleFamilyResidence setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method SingleFamilyResidence setName(Property\Name $name)
 * @method SingleFamilyResidence setNumberOfRooms(Property\NumberOfRooms $numberOfRooms)
 * @method SingleFamilyResidence setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method SingleFamilyResidence setPermittedUsage(Property\PermittedUsage $permittedUsage)
 * @method SingleFamilyResidence setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method SingleFamilyResidence setPhoto(Property\Photo $photo)
 * @method SingleFamilyResidence setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SingleFamilyResidence setPublicAccess(Property\PublicAccess $publicAccess)
 * @method SingleFamilyResidence setReview(Property\Review $review)
 * @method SingleFamilyResidence setSameAs(Property\SameAs $sameAs)
 * @method SingleFamilyResidence setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method SingleFamilyResidence setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method SingleFamilyResidence setTelephone(Property\Telephone $telephone)
 * @method SingleFamilyResidence setUrl(Property\Url $url)
 */
class SingleFamilyResidence extends House {

	/**
	 * @var Property\NumberOfRooms
	 */
	private $numberOfRooms;

	/**
	 * @var Property\Occupancy
	 */
	private $occupancy;

	/**
	 * Get number of rooms.
	 * 
	 * @return Property\NumberOfRooms
	 */
	public function getNumberOfRooms() {
		return $this->numberOfRooms;
	}

	/**
	 * Get occupancy.
	 * 
	 * @return Property\Occupancy
	 */
	public function getOccupancy() {
		return $this->occupancy;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SingleFamilyResidence';
	}

	/**
	 * Set number of rooms.
	 * 
	 * @param Property\NumberOfRooms $numberOfRooms
	 * @return SingleFamilyResidence
	 */
	public function setNumberOfRooms(Property\NumberOfRooms $numberOfRooms) {
		$this->numberOfRooms = $numberOfRooms;

		return $this;
	}

	/**
	 * Set occupancy.
	 * 
	 * @param Property\Occupancy $occupancy
	 * @return SingleFamilyResidence
	 */
	public function setOccupancy(Property\Occupancy $occupancy) {
		$this->occupancy = $occupancy;

		return $this;
	}
}