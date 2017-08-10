<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HomeGoodsStore.
 * 
 * @method HomeGoodsStore setAddress(Property\Address $address)
 * @method HomeGoodsStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HomeGoodsStore setAlumni(Property\Alumni $alumni)
 * @method HomeGoodsStore setAreaServed(Property\AreaServed $areaServed)
 * @method HomeGoodsStore setAward(Property\Award $award)
 * @method HomeGoodsStore setBrand(Property\Brand $brand)
 * @method HomeGoodsStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method HomeGoodsStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method HomeGoodsStore setDepartment(Property\Department $department)
 * @method HomeGoodsStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method HomeGoodsStore setDuns(Property\Duns $duns)
 * @method HomeGoodsStore setEmail(Property\Email $email)
 * @method HomeGoodsStore setEmployee(Property\Employee $employee)
 * @method HomeGoodsStore setEvent(Property\Event $event)
 * @method HomeGoodsStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HomeGoodsStore setFounder(Property\Founder $founder)
 * @method HomeGoodsStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method HomeGoodsStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method HomeGoodsStore setFunder(Property\Funder $funder)
 * @method HomeGoodsStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HomeGoodsStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method HomeGoodsStore setHasPOS(Property\HasPOS $hasPOS)
 * @method HomeGoodsStore setIsicV4(Property\IsicV4 $isicV4)
 * @method HomeGoodsStore setLegalName(Property\LegalName $legalName)
 * @method HomeGoodsStore setLeiCode(Property\LeiCode $leiCode)
 * @method HomeGoodsStore setLocation(Property\Location $location)
 * @method HomeGoodsStore setLogo(Property\Logo $logo)
 * @method HomeGoodsStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method HomeGoodsStore setMember(Property\Member $member)
 * @method HomeGoodsStore setMemberOf(Property\MemberOf $memberOf)
 * @method HomeGoodsStore setNaics(Property\Naics $naics)
 * @method HomeGoodsStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method HomeGoodsStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method HomeGoodsStore setOwns(Property\Owns $owns)
 * @method HomeGoodsStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method HomeGoodsStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method HomeGoodsStore setPriceRange(Property\PriceRange $priceRange)
 * @method HomeGoodsStore setReview(Property\Review $review)
 * @method HomeGoodsStore setSeeks(Property\Seeks $seeks)
 * @method HomeGoodsStore setSponsor(Property\Sponsor $sponsor)
 * @method HomeGoodsStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method HomeGoodsStore setTaxID(Property\TaxID $taxID)
 * @method HomeGoodsStore setTelephone(Property\Telephone $telephone)
 * @method HomeGoodsStore setVatID(Property\VatID $vatID)
 */
class HomeGoodsStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HomeGoodsStore';
	}
}