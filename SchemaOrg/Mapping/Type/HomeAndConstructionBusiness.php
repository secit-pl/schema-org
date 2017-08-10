<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HomeAndConstructionBusiness.
 * 
 * @method HomeAndConstructionBusiness setAddress(Property\Address $address)
 * @method HomeAndConstructionBusiness setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HomeAndConstructionBusiness setAlumni(Property\Alumni $alumni)
 * @method HomeAndConstructionBusiness setAreaServed(Property\AreaServed $areaServed)
 * @method HomeAndConstructionBusiness setAward(Property\Award $award)
 * @method HomeAndConstructionBusiness setBrand(Property\Brand $brand)
 * @method HomeAndConstructionBusiness setContactPoint(Property\ContactPoint $contactPoint)
 * @method HomeAndConstructionBusiness setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method HomeAndConstructionBusiness setDepartment(Property\Department $department)
 * @method HomeAndConstructionBusiness setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method HomeAndConstructionBusiness setDuns(Property\Duns $duns)
 * @method HomeAndConstructionBusiness setEmail(Property\Email $email)
 * @method HomeAndConstructionBusiness setEmployee(Property\Employee $employee)
 * @method HomeAndConstructionBusiness setEvent(Property\Event $event)
 * @method HomeAndConstructionBusiness setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HomeAndConstructionBusiness setFounder(Property\Founder $founder)
 * @method HomeAndConstructionBusiness setFoundingDate(Property\FoundingDate $foundingDate)
 * @method HomeAndConstructionBusiness setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method HomeAndConstructionBusiness setFunder(Property\Funder $funder)
 * @method HomeAndConstructionBusiness setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HomeAndConstructionBusiness setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method HomeAndConstructionBusiness setHasPOS(Property\HasPOS $hasPOS)
 * @method HomeAndConstructionBusiness setIsicV4(Property\IsicV4 $isicV4)
 * @method HomeAndConstructionBusiness setLegalName(Property\LegalName $legalName)
 * @method HomeAndConstructionBusiness setLeiCode(Property\LeiCode $leiCode)
 * @method HomeAndConstructionBusiness setLocation(Property\Location $location)
 * @method HomeAndConstructionBusiness setLogo(Property\Logo $logo)
 * @method HomeAndConstructionBusiness setMakesOffer(Property\MakesOffer $makesOffer)
 * @method HomeAndConstructionBusiness setMember(Property\Member $member)
 * @method HomeAndConstructionBusiness setMemberOf(Property\MemberOf $memberOf)
 * @method HomeAndConstructionBusiness setNaics(Property\Naics $naics)
 * @method HomeAndConstructionBusiness setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method HomeAndConstructionBusiness setOpeningHours(Property\OpeningHours $openingHours)
 * @method HomeAndConstructionBusiness setOwns(Property\Owns $owns)
 * @method HomeAndConstructionBusiness setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method HomeAndConstructionBusiness setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method HomeAndConstructionBusiness setPriceRange(Property\PriceRange $priceRange)
 * @method HomeAndConstructionBusiness setReview(Property\Review $review)
 * @method HomeAndConstructionBusiness setSeeks(Property\Seeks $seeks)
 * @method HomeAndConstructionBusiness setSponsor(Property\Sponsor $sponsor)
 * @method HomeAndConstructionBusiness setSubOrganization(Property\SubOrganization $subOrganization)
 * @method HomeAndConstructionBusiness setTaxID(Property\TaxID $taxID)
 * @method HomeAndConstructionBusiness setTelephone(Property\Telephone $telephone)
 * @method HomeAndConstructionBusiness setVatID(Property\VatID $vatID)
 */
class HomeAndConstructionBusiness extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HomeAndConstructionBusiness';
	}
}