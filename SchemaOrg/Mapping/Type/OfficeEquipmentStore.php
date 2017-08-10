<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OfficeEquipmentStore.
 * 
 * @method OfficeEquipmentStore setAddress(Property\Address $address)
 * @method OfficeEquipmentStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method OfficeEquipmentStore setAlumni(Property\Alumni $alumni)
 * @method OfficeEquipmentStore setAreaServed(Property\AreaServed $areaServed)
 * @method OfficeEquipmentStore setAward(Property\Award $award)
 * @method OfficeEquipmentStore setBrand(Property\Brand $brand)
 * @method OfficeEquipmentStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method OfficeEquipmentStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method OfficeEquipmentStore setDepartment(Property\Department $department)
 * @method OfficeEquipmentStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method OfficeEquipmentStore setDuns(Property\Duns $duns)
 * @method OfficeEquipmentStore setEmail(Property\Email $email)
 * @method OfficeEquipmentStore setEmployee(Property\Employee $employee)
 * @method OfficeEquipmentStore setEvent(Property\Event $event)
 * @method OfficeEquipmentStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method OfficeEquipmentStore setFounder(Property\Founder $founder)
 * @method OfficeEquipmentStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method OfficeEquipmentStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method OfficeEquipmentStore setFunder(Property\Funder $funder)
 * @method OfficeEquipmentStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method OfficeEquipmentStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method OfficeEquipmentStore setHasPOS(Property\HasPOS $hasPOS)
 * @method OfficeEquipmentStore setIsicV4(Property\IsicV4 $isicV4)
 * @method OfficeEquipmentStore setLegalName(Property\LegalName $legalName)
 * @method OfficeEquipmentStore setLeiCode(Property\LeiCode $leiCode)
 * @method OfficeEquipmentStore setLocation(Property\Location $location)
 * @method OfficeEquipmentStore setLogo(Property\Logo $logo)
 * @method OfficeEquipmentStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method OfficeEquipmentStore setMember(Property\Member $member)
 * @method OfficeEquipmentStore setMemberOf(Property\MemberOf $memberOf)
 * @method OfficeEquipmentStore setNaics(Property\Naics $naics)
 * @method OfficeEquipmentStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method OfficeEquipmentStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method OfficeEquipmentStore setOwns(Property\Owns $owns)
 * @method OfficeEquipmentStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method OfficeEquipmentStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method OfficeEquipmentStore setPriceRange(Property\PriceRange $priceRange)
 * @method OfficeEquipmentStore setReview(Property\Review $review)
 * @method OfficeEquipmentStore setSeeks(Property\Seeks $seeks)
 * @method OfficeEquipmentStore setSponsor(Property\Sponsor $sponsor)
 * @method OfficeEquipmentStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method OfficeEquipmentStore setTaxID(Property\TaxID $taxID)
 * @method OfficeEquipmentStore setTelephone(Property\Telephone $telephone)
 * @method OfficeEquipmentStore setVatID(Property\VatID $vatID)
 */
class OfficeEquipmentStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfficeEquipmentStore';
	}
}