<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NailSalon.
 * 
 * @method NailSalon setAdditionalType(Property\AdditionalType $additionalType)
 * @method NailSalon setAddress(Property\Address $address)
 * @method NailSalon setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method NailSalon setAlternateName(Property\AlternateName $alternateName)
 * @method NailSalon setAlumni(Property\Alumni $alumni)
 * @method NailSalon setAreaServed(Property\AreaServed $areaServed)
 * @method NailSalon setAward(Property\Award $award)
 * @method NailSalon setBrand(Property\Brand $brand)
 * @method NailSalon setContactPoint(Property\ContactPoint $contactPoint)
 * @method NailSalon setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method NailSalon setDepartment(Property\Department $department)
 * @method NailSalon setDescription(Property\Description $description)
 * @method NailSalon setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method NailSalon setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method NailSalon setDuns(Property\Duns $duns)
 * @method NailSalon setEmail(Property\Email $email)
 * @method NailSalon setEmployee(Property\Employee $employee)
 * @method NailSalon setEvent(Property\Event $event)
 * @method NailSalon setFaxNumber(Property\FaxNumber $faxNumber)
 * @method NailSalon setFounder(Property\Founder $founder)
 * @method NailSalon setFoundingDate(Property\FoundingDate $foundingDate)
 * @method NailSalon setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method NailSalon setFunder(Property\Funder $funder)
 * @method NailSalon setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method NailSalon setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method NailSalon setHasPOS(Property\HasPOS $hasPOS)
 * @method NailSalon setImage(Property\Image $image)
 * @method NailSalon setIsicV4(Property\IsicV4 $isicV4)
 * @method NailSalon setLegalName(Property\LegalName $legalName)
 * @method NailSalon setLeiCode(Property\LeiCode $leiCode)
 * @method NailSalon setLocation(Property\Location $location)
 * @method NailSalon setLogo(Property\Logo $logo)
 * @method NailSalon setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method NailSalon setMakesOffer(Property\MakesOffer $makesOffer)
 * @method NailSalon setMember(Property\Member $member)
 * @method NailSalon setMemberOf(Property\MemberOf $memberOf)
 * @method NailSalon setNaics(Property\Naics $naics)
 * @method NailSalon setName(Property\Name $name)
 * @method NailSalon setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method NailSalon setOpeningHours(Property\OpeningHours $openingHours)
 * @method NailSalon setOwns(Property\Owns $owns)
 * @method NailSalon setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method NailSalon setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method NailSalon setPotentialAction(Property\PotentialAction $potentialAction)
 * @method NailSalon setPriceRange(Property\PriceRange $priceRange)
 * @method NailSalon setReview(Property\Review $review)
 * @method NailSalon setSameAs(Property\SameAs $sameAs)
 * @method NailSalon setSeeks(Property\Seeks $seeks)
 * @method NailSalon setSponsor(Property\Sponsor $sponsor)
 * @method NailSalon setSubOrganization(Property\SubOrganization $subOrganization)
 * @method NailSalon setTaxID(Property\TaxID $taxID)
 * @method NailSalon setTelephone(Property\Telephone $telephone)
 * @method NailSalon setUrl(Property\Url $url)
 * @method NailSalon setVatID(Property\VatID $vatID)
 */
class NailSalon extends HealthAndBeautyBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NailSalon';
	}
}