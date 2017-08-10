<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ShoppingCenter.
 * 
 * @method ShoppingCenter setAddress(Property\Address $address)
 * @method ShoppingCenter setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ShoppingCenter setAlumni(Property\Alumni $alumni)
 * @method ShoppingCenter setAreaServed(Property\AreaServed $areaServed)
 * @method ShoppingCenter setAward(Property\Award $award)
 * @method ShoppingCenter setBrand(Property\Brand $brand)
 * @method ShoppingCenter setContactPoint(Property\ContactPoint $contactPoint)
 * @method ShoppingCenter setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ShoppingCenter setDepartment(Property\Department $department)
 * @method ShoppingCenter setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ShoppingCenter setDuns(Property\Duns $duns)
 * @method ShoppingCenter setEmail(Property\Email $email)
 * @method ShoppingCenter setEmployee(Property\Employee $employee)
 * @method ShoppingCenter setEvent(Property\Event $event)
 * @method ShoppingCenter setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ShoppingCenter setFounder(Property\Founder $founder)
 * @method ShoppingCenter setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ShoppingCenter setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ShoppingCenter setFunder(Property\Funder $funder)
 * @method ShoppingCenter setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ShoppingCenter setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ShoppingCenter setHasPOS(Property\HasPOS $hasPOS)
 * @method ShoppingCenter setIsicV4(Property\IsicV4 $isicV4)
 * @method ShoppingCenter setLegalName(Property\LegalName $legalName)
 * @method ShoppingCenter setLeiCode(Property\LeiCode $leiCode)
 * @method ShoppingCenter setLocation(Property\Location $location)
 * @method ShoppingCenter setLogo(Property\Logo $logo)
 * @method ShoppingCenter setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ShoppingCenter setMember(Property\Member $member)
 * @method ShoppingCenter setMemberOf(Property\MemberOf $memberOf)
 * @method ShoppingCenter setNaics(Property\Naics $naics)
 * @method ShoppingCenter setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ShoppingCenter setOpeningHours(Property\OpeningHours $openingHours)
 * @method ShoppingCenter setOwns(Property\Owns $owns)
 * @method ShoppingCenter setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ShoppingCenter setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ShoppingCenter setPriceRange(Property\PriceRange $priceRange)
 * @method ShoppingCenter setReview(Property\Review $review)
 * @method ShoppingCenter setSeeks(Property\Seeks $seeks)
 * @method ShoppingCenter setSponsor(Property\Sponsor $sponsor)
 * @method ShoppingCenter setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ShoppingCenter setTaxID(Property\TaxID $taxID)
 * @method ShoppingCenter setTelephone(Property\Telephone $telephone)
 * @method ShoppingCenter setVatID(Property\VatID $vatID)
 */
class ShoppingCenter extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ShoppingCenter';
	}
}