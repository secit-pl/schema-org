<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PublicSwimmingPool.
 * 
 * @method PublicSwimmingPool setAddress(Property\Address $address)
 * @method PublicSwimmingPool setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method PublicSwimmingPool setAlumni(Property\Alumni $alumni)
 * @method PublicSwimmingPool setAreaServed(Property\AreaServed $areaServed)
 * @method PublicSwimmingPool setAward(Property\Award $award)
 * @method PublicSwimmingPool setBrand(Property\Brand $brand)
 * @method PublicSwimmingPool setContactPoint(Property\ContactPoint $contactPoint)
 * @method PublicSwimmingPool setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method PublicSwimmingPool setDepartment(Property\Department $department)
 * @method PublicSwimmingPool setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method PublicSwimmingPool setDuns(Property\Duns $duns)
 * @method PublicSwimmingPool setEmail(Property\Email $email)
 * @method PublicSwimmingPool setEmployee(Property\Employee $employee)
 * @method PublicSwimmingPool setEvent(Property\Event $event)
 * @method PublicSwimmingPool setFaxNumber(Property\FaxNumber $faxNumber)
 * @method PublicSwimmingPool setFounder(Property\Founder $founder)
 * @method PublicSwimmingPool setFoundingDate(Property\FoundingDate $foundingDate)
 * @method PublicSwimmingPool setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method PublicSwimmingPool setFunder(Property\Funder $funder)
 * @method PublicSwimmingPool setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method PublicSwimmingPool setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method PublicSwimmingPool setHasPOS(Property\HasPOS $hasPOS)
 * @method PublicSwimmingPool setIsicV4(Property\IsicV4 $isicV4)
 * @method PublicSwimmingPool setLegalName(Property\LegalName $legalName)
 * @method PublicSwimmingPool setLeiCode(Property\LeiCode $leiCode)
 * @method PublicSwimmingPool setLocation(Property\Location $location)
 * @method PublicSwimmingPool setLogo(Property\Logo $logo)
 * @method PublicSwimmingPool setMakesOffer(Property\MakesOffer $makesOffer)
 * @method PublicSwimmingPool setMember(Property\Member $member)
 * @method PublicSwimmingPool setMemberOf(Property\MemberOf $memberOf)
 * @method PublicSwimmingPool setNaics(Property\Naics $naics)
 * @method PublicSwimmingPool setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method PublicSwimmingPool setOpeningHours(Property\OpeningHours $openingHours)
 * @method PublicSwimmingPool setOwns(Property\Owns $owns)
 * @method PublicSwimmingPool setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method PublicSwimmingPool setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method PublicSwimmingPool setPriceRange(Property\PriceRange $priceRange)
 * @method PublicSwimmingPool setReview(Property\Review $review)
 * @method PublicSwimmingPool setSeeks(Property\Seeks $seeks)
 * @method PublicSwimmingPool setSponsor(Property\Sponsor $sponsor)
 * @method PublicSwimmingPool setSubOrganization(Property\SubOrganization $subOrganization)
 * @method PublicSwimmingPool setTaxID(Property\TaxID $taxID)
 * @method PublicSwimmingPool setTelephone(Property\Telephone $telephone)
 * @method PublicSwimmingPool setVatID(Property\VatID $vatID)
 */
class PublicSwimmingPool extends SportsActivityLocation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PublicSwimmingPool';
	}
}