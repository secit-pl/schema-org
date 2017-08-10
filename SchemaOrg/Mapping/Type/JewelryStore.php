<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class JewelryStore.
 * 
 * @method JewelryStore setAddress(Property\Address $address)
 * @method JewelryStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method JewelryStore setAlumni(Property\Alumni $alumni)
 * @method JewelryStore setAreaServed(Property\AreaServed $areaServed)
 * @method JewelryStore setAward(Property\Award $award)
 * @method JewelryStore setBrand(Property\Brand $brand)
 * @method JewelryStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method JewelryStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method JewelryStore setDepartment(Property\Department $department)
 * @method JewelryStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method JewelryStore setDuns(Property\Duns $duns)
 * @method JewelryStore setEmail(Property\Email $email)
 * @method JewelryStore setEmployee(Property\Employee $employee)
 * @method JewelryStore setEvent(Property\Event $event)
 * @method JewelryStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method JewelryStore setFounder(Property\Founder $founder)
 * @method JewelryStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method JewelryStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method JewelryStore setFunder(Property\Funder $funder)
 * @method JewelryStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method JewelryStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method JewelryStore setHasPOS(Property\HasPOS $hasPOS)
 * @method JewelryStore setIsicV4(Property\IsicV4 $isicV4)
 * @method JewelryStore setLegalName(Property\LegalName $legalName)
 * @method JewelryStore setLeiCode(Property\LeiCode $leiCode)
 * @method JewelryStore setLocation(Property\Location $location)
 * @method JewelryStore setLogo(Property\Logo $logo)
 * @method JewelryStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method JewelryStore setMember(Property\Member $member)
 * @method JewelryStore setMemberOf(Property\MemberOf $memberOf)
 * @method JewelryStore setNaics(Property\Naics $naics)
 * @method JewelryStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method JewelryStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method JewelryStore setOwns(Property\Owns $owns)
 * @method JewelryStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method JewelryStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method JewelryStore setPriceRange(Property\PriceRange $priceRange)
 * @method JewelryStore setReview(Property\Review $review)
 * @method JewelryStore setSeeks(Property\Seeks $seeks)
 * @method JewelryStore setSponsor(Property\Sponsor $sponsor)
 * @method JewelryStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method JewelryStore setTaxID(Property\TaxID $taxID)
 * @method JewelryStore setTelephone(Property\Telephone $telephone)
 * @method JewelryStore setVatID(Property\VatID $vatID)
 */
class JewelryStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/JewelryStore';
	}
}