<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GovernmentOffice.
 * 
 * @method GovernmentOffice setAddress(Property\Address $address)
 * @method GovernmentOffice setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GovernmentOffice setAlumni(Property\Alumni $alumni)
 * @method GovernmentOffice setAreaServed(Property\AreaServed $areaServed)
 * @method GovernmentOffice setAward(Property\Award $award)
 * @method GovernmentOffice setBrand(Property\Brand $brand)
 * @method GovernmentOffice setContactPoint(Property\ContactPoint $contactPoint)
 * @method GovernmentOffice setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method GovernmentOffice setDepartment(Property\Department $department)
 * @method GovernmentOffice setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method GovernmentOffice setDuns(Property\Duns $duns)
 * @method GovernmentOffice setEmail(Property\Email $email)
 * @method GovernmentOffice setEmployee(Property\Employee $employee)
 * @method GovernmentOffice setEvent(Property\Event $event)
 * @method GovernmentOffice setFaxNumber(Property\FaxNumber $faxNumber)
 * @method GovernmentOffice setFounder(Property\Founder $founder)
 * @method GovernmentOffice setFoundingDate(Property\FoundingDate $foundingDate)
 * @method GovernmentOffice setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method GovernmentOffice setFunder(Property\Funder $funder)
 * @method GovernmentOffice setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method GovernmentOffice setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method GovernmentOffice setHasPOS(Property\HasPOS $hasPOS)
 * @method GovernmentOffice setIsicV4(Property\IsicV4 $isicV4)
 * @method GovernmentOffice setLegalName(Property\LegalName $legalName)
 * @method GovernmentOffice setLeiCode(Property\LeiCode $leiCode)
 * @method GovernmentOffice setLocation(Property\Location $location)
 * @method GovernmentOffice setLogo(Property\Logo $logo)
 * @method GovernmentOffice setMakesOffer(Property\MakesOffer $makesOffer)
 * @method GovernmentOffice setMember(Property\Member $member)
 * @method GovernmentOffice setMemberOf(Property\MemberOf $memberOf)
 * @method GovernmentOffice setNaics(Property\Naics $naics)
 * @method GovernmentOffice setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method GovernmentOffice setOpeningHours(Property\OpeningHours $openingHours)
 * @method GovernmentOffice setOwns(Property\Owns $owns)
 * @method GovernmentOffice setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method GovernmentOffice setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method GovernmentOffice setPriceRange(Property\PriceRange $priceRange)
 * @method GovernmentOffice setReview(Property\Review $review)
 * @method GovernmentOffice setSeeks(Property\Seeks $seeks)
 * @method GovernmentOffice setSponsor(Property\Sponsor $sponsor)
 * @method GovernmentOffice setSubOrganization(Property\SubOrganization $subOrganization)
 * @method GovernmentOffice setTaxID(Property\TaxID $taxID)
 * @method GovernmentOffice setTelephone(Property\Telephone $telephone)
 * @method GovernmentOffice setVatID(Property\VatID $vatID)
 */
class GovernmentOffice extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GovernmentOffice';
	}
}