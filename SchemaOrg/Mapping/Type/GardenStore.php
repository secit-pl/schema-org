<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GardenStore.
 * 
 * @method GardenStore setAddress(Property\Address $address)
 * @method GardenStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GardenStore setAlumni(Property\Alumni $alumni)
 * @method GardenStore setAreaServed(Property\AreaServed $areaServed)
 * @method GardenStore setAward(Property\Award $award)
 * @method GardenStore setBrand(Property\Brand $brand)
 * @method GardenStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method GardenStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method GardenStore setDepartment(Property\Department $department)
 * @method GardenStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method GardenStore setDuns(Property\Duns $duns)
 * @method GardenStore setEmail(Property\Email $email)
 * @method GardenStore setEmployee(Property\Employee $employee)
 * @method GardenStore setEvent(Property\Event $event)
 * @method GardenStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method GardenStore setFounder(Property\Founder $founder)
 * @method GardenStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method GardenStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method GardenStore setFunder(Property\Funder $funder)
 * @method GardenStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method GardenStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method GardenStore setHasPOS(Property\HasPOS $hasPOS)
 * @method GardenStore setIsicV4(Property\IsicV4 $isicV4)
 * @method GardenStore setLegalName(Property\LegalName $legalName)
 * @method GardenStore setLeiCode(Property\LeiCode $leiCode)
 * @method GardenStore setLocation(Property\Location $location)
 * @method GardenStore setLogo(Property\Logo $logo)
 * @method GardenStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method GardenStore setMember(Property\Member $member)
 * @method GardenStore setMemberOf(Property\MemberOf $memberOf)
 * @method GardenStore setNaics(Property\Naics $naics)
 * @method GardenStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method GardenStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method GardenStore setOwns(Property\Owns $owns)
 * @method GardenStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method GardenStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method GardenStore setPriceRange(Property\PriceRange $priceRange)
 * @method GardenStore setReview(Property\Review $review)
 * @method GardenStore setSeeks(Property\Seeks $seeks)
 * @method GardenStore setSponsor(Property\Sponsor $sponsor)
 * @method GardenStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method GardenStore setTaxID(Property\TaxID $taxID)
 * @method GardenStore setTelephone(Property\Telephone $telephone)
 * @method GardenStore setVatID(Property\VatID $vatID)
 */
class GardenStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GardenStore';
	}
}