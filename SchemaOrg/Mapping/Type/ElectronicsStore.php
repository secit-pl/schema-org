<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ElectronicsStore.
 * 
 * @method ElectronicsStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method ElectronicsStore setAddress(Property\Address $address)
 * @method ElectronicsStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ElectronicsStore setAlternateName(Property\AlternateName $alternateName)
 * @method ElectronicsStore setAlumni(Property\Alumni $alumni)
 * @method ElectronicsStore setAreaServed(Property\AreaServed $areaServed)
 * @method ElectronicsStore setAward(Property\Award $award)
 * @method ElectronicsStore setBrand(Property\Brand $brand)
 * @method ElectronicsStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method ElectronicsStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ElectronicsStore setDepartment(Property\Department $department)
 * @method ElectronicsStore setDescription(Property\Description $description)
 * @method ElectronicsStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ElectronicsStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ElectronicsStore setDuns(Property\Duns $duns)
 * @method ElectronicsStore setEmail(Property\Email $email)
 * @method ElectronicsStore setEmployee(Property\Employee $employee)
 * @method ElectronicsStore setEvent(Property\Event $event)
 * @method ElectronicsStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ElectronicsStore setFounder(Property\Founder $founder)
 * @method ElectronicsStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ElectronicsStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ElectronicsStore setFunder(Property\Funder $funder)
 * @method ElectronicsStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ElectronicsStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ElectronicsStore setHasPOS(Property\HasPOS $hasPOS)
 * @method ElectronicsStore setImage(Property\Image $image)
 * @method ElectronicsStore setIsicV4(Property\IsicV4 $isicV4)
 * @method ElectronicsStore setLegalName(Property\LegalName $legalName)
 * @method ElectronicsStore setLeiCode(Property\LeiCode $leiCode)
 * @method ElectronicsStore setLocation(Property\Location $location)
 * @method ElectronicsStore setLogo(Property\Logo $logo)
 * @method ElectronicsStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ElectronicsStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ElectronicsStore setMember(Property\Member $member)
 * @method ElectronicsStore setMemberOf(Property\MemberOf $memberOf)
 * @method ElectronicsStore setNaics(Property\Naics $naics)
 * @method ElectronicsStore setName(Property\Name $name)
 * @method ElectronicsStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ElectronicsStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method ElectronicsStore setOwns(Property\Owns $owns)
 * @method ElectronicsStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ElectronicsStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ElectronicsStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ElectronicsStore setPriceRange(Property\PriceRange $priceRange)
 * @method ElectronicsStore setReview(Property\Review $review)
 * @method ElectronicsStore setSameAs(Property\SameAs $sameAs)
 * @method ElectronicsStore setSeeks(Property\Seeks $seeks)
 * @method ElectronicsStore setSponsor(Property\Sponsor $sponsor)
 * @method ElectronicsStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ElectronicsStore setTaxID(Property\TaxID $taxID)
 * @method ElectronicsStore setTelephone(Property\Telephone $telephone)
 * @method ElectronicsStore setUrl(Property\Url $url)
 * @method ElectronicsStore setVatID(Property\VatID $vatID)
 */
class ElectronicsStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ElectronicsStore';
	}
}