<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RealEstateAgent.
 * 
 * @method RealEstateAgent setAddress(Property\Address $address)
 * @method RealEstateAgent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method RealEstateAgent setAlumni(Property\Alumni $alumni)
 * @method RealEstateAgent setAreaServed(Property\AreaServed $areaServed)
 * @method RealEstateAgent setAward(Property\Award $award)
 * @method RealEstateAgent setBrand(Property\Brand $brand)
 * @method RealEstateAgent setContactPoint(Property\ContactPoint $contactPoint)
 * @method RealEstateAgent setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method RealEstateAgent setDepartment(Property\Department $department)
 * @method RealEstateAgent setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method RealEstateAgent setDuns(Property\Duns $duns)
 * @method RealEstateAgent setEmail(Property\Email $email)
 * @method RealEstateAgent setEmployee(Property\Employee $employee)
 * @method RealEstateAgent setEvent(Property\Event $event)
 * @method RealEstateAgent setFaxNumber(Property\FaxNumber $faxNumber)
 * @method RealEstateAgent setFounder(Property\Founder $founder)
 * @method RealEstateAgent setFoundingDate(Property\FoundingDate $foundingDate)
 * @method RealEstateAgent setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method RealEstateAgent setFunder(Property\Funder $funder)
 * @method RealEstateAgent setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method RealEstateAgent setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method RealEstateAgent setHasPOS(Property\HasPOS $hasPOS)
 * @method RealEstateAgent setIsicV4(Property\IsicV4 $isicV4)
 * @method RealEstateAgent setLegalName(Property\LegalName $legalName)
 * @method RealEstateAgent setLeiCode(Property\LeiCode $leiCode)
 * @method RealEstateAgent setLocation(Property\Location $location)
 * @method RealEstateAgent setLogo(Property\Logo $logo)
 * @method RealEstateAgent setMakesOffer(Property\MakesOffer $makesOffer)
 * @method RealEstateAgent setMember(Property\Member $member)
 * @method RealEstateAgent setMemberOf(Property\MemberOf $memberOf)
 * @method RealEstateAgent setNaics(Property\Naics $naics)
 * @method RealEstateAgent setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method RealEstateAgent setOpeningHours(Property\OpeningHours $openingHours)
 * @method RealEstateAgent setOwns(Property\Owns $owns)
 * @method RealEstateAgent setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method RealEstateAgent setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method RealEstateAgent setPriceRange(Property\PriceRange $priceRange)
 * @method RealEstateAgent setReview(Property\Review $review)
 * @method RealEstateAgent setSeeks(Property\Seeks $seeks)
 * @method RealEstateAgent setSponsor(Property\Sponsor $sponsor)
 * @method RealEstateAgent setSubOrganization(Property\SubOrganization $subOrganization)
 * @method RealEstateAgent setTaxID(Property\TaxID $taxID)
 * @method RealEstateAgent setTelephone(Property\Telephone $telephone)
 * @method RealEstateAgent setVatID(Property\VatID $vatID)
 */
class RealEstateAgent extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RealEstateAgent';
	}
}