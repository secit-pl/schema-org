<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MotorcycleDealer.
 * 
 * @method MotorcycleDealer setAdditionalType(Property\AdditionalType $additionalType)
 * @method MotorcycleDealer setAddress(Property\Address $address)
 * @method MotorcycleDealer setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MotorcycleDealer setAlternateName(Property\AlternateName $alternateName)
 * @method MotorcycleDealer setAlumni(Property\Alumni $alumni)
 * @method MotorcycleDealer setAreaServed(Property\AreaServed $areaServed)
 * @method MotorcycleDealer setAward(Property\Award $award)
 * @method MotorcycleDealer setBrand(Property\Brand $brand)
 * @method MotorcycleDealer setContactPoint(Property\ContactPoint $contactPoint)
 * @method MotorcycleDealer setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method MotorcycleDealer setDepartment(Property\Department $department)
 * @method MotorcycleDealer setDescription(Property\Description $description)
 * @method MotorcycleDealer setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MotorcycleDealer setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method MotorcycleDealer setDuns(Property\Duns $duns)
 * @method MotorcycleDealer setEmail(Property\Email $email)
 * @method MotorcycleDealer setEmployee(Property\Employee $employee)
 * @method MotorcycleDealer setEvent(Property\Event $event)
 * @method MotorcycleDealer setFaxNumber(Property\FaxNumber $faxNumber)
 * @method MotorcycleDealer setFounder(Property\Founder $founder)
 * @method MotorcycleDealer setFoundingDate(Property\FoundingDate $foundingDate)
 * @method MotorcycleDealer setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method MotorcycleDealer setFunder(Property\Funder $funder)
 * @method MotorcycleDealer setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method MotorcycleDealer setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method MotorcycleDealer setHasPOS(Property\HasPOS $hasPOS)
 * @method MotorcycleDealer setImage(Property\Image $image)
 * @method MotorcycleDealer setIsicV4(Property\IsicV4 $isicV4)
 * @method MotorcycleDealer setLegalName(Property\LegalName $legalName)
 * @method MotorcycleDealer setLeiCode(Property\LeiCode $leiCode)
 * @method MotorcycleDealer setLocation(Property\Location $location)
 * @method MotorcycleDealer setLogo(Property\Logo $logo)
 * @method MotorcycleDealer setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MotorcycleDealer setMakesOffer(Property\MakesOffer $makesOffer)
 * @method MotorcycleDealer setMember(Property\Member $member)
 * @method MotorcycleDealer setMemberOf(Property\MemberOf $memberOf)
 * @method MotorcycleDealer setNaics(Property\Naics $naics)
 * @method MotorcycleDealer setName(Property\Name $name)
 * @method MotorcycleDealer setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method MotorcycleDealer setOpeningHours(Property\OpeningHours $openingHours)
 * @method MotorcycleDealer setOwns(Property\Owns $owns)
 * @method MotorcycleDealer setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method MotorcycleDealer setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method MotorcycleDealer setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MotorcycleDealer setPriceRange(Property\PriceRange $priceRange)
 * @method MotorcycleDealer setReview(Property\Review $review)
 * @method MotorcycleDealer setSameAs(Property\SameAs $sameAs)
 * @method MotorcycleDealer setSeeks(Property\Seeks $seeks)
 * @method MotorcycleDealer setSponsor(Property\Sponsor $sponsor)
 * @method MotorcycleDealer setSubOrganization(Property\SubOrganization $subOrganization)
 * @method MotorcycleDealer setTaxID(Property\TaxID $taxID)
 * @method MotorcycleDealer setTelephone(Property\Telephone $telephone)
 * @method MotorcycleDealer setUrl(Property\Url $url)
 * @method MotorcycleDealer setVatID(Property\VatID $vatID)
 */
class MotorcycleDealer extends AutomotiveBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MotorcycleDealer';
	}
}