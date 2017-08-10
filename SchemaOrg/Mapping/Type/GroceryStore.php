<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GroceryStore.
 * 
 * @method GroceryStore setAddress(Property\Address $address)
 * @method GroceryStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GroceryStore setAlumni(Property\Alumni $alumni)
 * @method GroceryStore setAreaServed(Property\AreaServed $areaServed)
 * @method GroceryStore setAward(Property\Award $award)
 * @method GroceryStore setBrand(Property\Brand $brand)
 * @method GroceryStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method GroceryStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method GroceryStore setDepartment(Property\Department $department)
 * @method GroceryStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method GroceryStore setDuns(Property\Duns $duns)
 * @method GroceryStore setEmail(Property\Email $email)
 * @method GroceryStore setEmployee(Property\Employee $employee)
 * @method GroceryStore setEvent(Property\Event $event)
 * @method GroceryStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method GroceryStore setFounder(Property\Founder $founder)
 * @method GroceryStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method GroceryStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method GroceryStore setFunder(Property\Funder $funder)
 * @method GroceryStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method GroceryStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method GroceryStore setHasPOS(Property\HasPOS $hasPOS)
 * @method GroceryStore setIsicV4(Property\IsicV4 $isicV4)
 * @method GroceryStore setLegalName(Property\LegalName $legalName)
 * @method GroceryStore setLeiCode(Property\LeiCode $leiCode)
 * @method GroceryStore setLocation(Property\Location $location)
 * @method GroceryStore setLogo(Property\Logo $logo)
 * @method GroceryStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method GroceryStore setMember(Property\Member $member)
 * @method GroceryStore setMemberOf(Property\MemberOf $memberOf)
 * @method GroceryStore setNaics(Property\Naics $naics)
 * @method GroceryStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method GroceryStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method GroceryStore setOwns(Property\Owns $owns)
 * @method GroceryStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method GroceryStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method GroceryStore setPriceRange(Property\PriceRange $priceRange)
 * @method GroceryStore setReview(Property\Review $review)
 * @method GroceryStore setSeeks(Property\Seeks $seeks)
 * @method GroceryStore setSponsor(Property\Sponsor $sponsor)
 * @method GroceryStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method GroceryStore setTaxID(Property\TaxID $taxID)
 * @method GroceryStore setTelephone(Property\Telephone $telephone)
 * @method GroceryStore setVatID(Property\VatID $vatID)
 */
class GroceryStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GroceryStore';
	}
}