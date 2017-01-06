<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Car.
 * 
 * @method Car setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method Car setAdditionalType(Property\AdditionalType $additionalType)
 * @method Car setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Car setAlternateName(Property\AlternateName $alternateName)
 * @method Car setAudience(Property\Audience $audience)
 * @method Car setAward(Property\Award $award)
 * @method Car setBrand(Property\Brand $brand)
 * @method Car setCargoVolume(Property\CargoVolume $cargoVolume)
 * @method Car setCategory(Property\Category $category)
 * @method Car setColor(Property\Color $color)
 * @method Car setDateVehicleFirstRegistered(Property\DateVehicleFirstRegistered $dateVehicleFirstRegistered)
 * @method Car setDepth(Property\Depth $depth)
 * @method Car setDescription(Property\Description $description)
 * @method Car setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Car setDriveWheelConfiguration(Property\DriveWheelConfiguration $driveWheelConfiguration)
 * @method Car setFuelConsumption(Property\FuelConsumption $fuelConsumption)
 * @method Car setFuelEfficiency(Property\FuelEfficiency $fuelEfficiency)
 * @method Car setFuelType(Property\FuelType $fuelType)
 * @method Car setGtin12(Property\Gtin12 $gtin12)
 * @method Car setGtin13(Property\Gtin13 $gtin13)
 * @method Car setGtin14(Property\Gtin14 $gtin14)
 * @method Car setGtin8(Property\Gtin8 $gtin8)
 * @method Car setHeight(Property\Height $height)
 * @method Car setImage(Property\Image $image)
 * @method Car setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartFor $isAccessoryOrSparePartFor)
 * @method Car setIsConsumableFor(Property\IsConsumableFor $isConsumableFor)
 * @method Car setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method Car setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method Car setItemCondition(Property\ItemCondition $itemCondition)
 * @method Car setKnownVehicleDamages(Property\KnownVehicleDamages $knownVehicleDamages)
 * @method Car setLogo(Property\Logo $logo)
 * @method Car setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Car setManufacturer(Property\Manufacturer $manufacturer)
 * @method Car setMileageFromOdometer(Property\MileageFromOdometer $mileageFromOdometer)
 * @method Car setModel(Property\Model $model)
 * @method Car setMpn(Property\Mpn $mpn)
 * @method Car setName(Property\Name $name)
 * @method Car setNumberOfAirbags(Property\NumberOfAirbags $numberOfAirbags)
 * @method Car setNumberOfAxles(Property\NumberOfAxles $numberOfAxles)
 * @method Car setNumberOfDoors(Property\NumberOfDoors $numberOfDoors)
 * @method Car setNumberOfForwardGears(Property\NumberOfForwardGears $numberOfForwardGears)
 * @method Car setNumberOfPreviousOwners(Property\NumberOfPreviousOwners $numberOfPreviousOwners)
 * @method Car setOffers(Property\Offers $offers)
 * @method Car setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Car setProductID(Property\ProductID $productID)
 * @method Car setProductionDate(Property\ProductionDate $productionDate)
 * @method Car setPurchaseDate(Property\PurchaseDate $purchaseDate)
 * @method Car setReleaseDate(Property\ReleaseDate $releaseDate)
 * @method Car setReview(Property\Review $review)
 * @method Car setSameAs(Property\SameAs $sameAs)
 * @method Car setSku(Property\Sku $sku)
 * @method Car setSteeringPosition(Property\SteeringPosition $steeringPosition)
 * @method Car setUrl(Property\Url $url)
 * @method Car setVehicleConfiguration(Property\VehicleConfiguration $vehicleConfiguration)
 * @method Car setVehicleEngine(Property\VehicleEngine $vehicleEngine)
 * @method Car setVehicleIdentificationNumber(Property\VehicleIdentificationNumber $vehicleIdentificationNumber)
 * @method Car setVehicleInteriorColor(Property\VehicleInteriorColor $vehicleInteriorColor)
 * @method Car setVehicleInteriorType(Property\VehicleInteriorType $vehicleInteriorType)
 * @method Car setVehicleModelDate(Property\VehicleModelDate $vehicleModelDate)
 * @method Car setVehicleSeatingCapacity(Property\VehicleSeatingCapacity $vehicleSeatingCapacity)
 * @method Car setVehicleTransmission(Property\VehicleTransmission $vehicleTransmission)
 * @method Car setWeight(Property\Weight $weight)
 * @method Car setWidth(Property\Width $width)
 */
class Car extends Vehicle {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Car';
	}
}