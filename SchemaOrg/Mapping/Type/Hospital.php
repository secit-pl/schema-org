<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Hospital.
 * 
 * @method Hospital setAdditionalType(Property\AdditionalType $additionalType)
 * @method Hospital setAddress(Property\Address $address)
 * @method Hospital setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Hospital setAlternateName(Property\AlternateName $alternateName)
 * @method Hospital setAlumni(Property\Alumni $alumni)
 * @method Hospital setAreaServed(Property\AreaServed $areaServed)
 * @method Hospital setAward(Property\Award $award)
 * @method Hospital setBrand(Property\Brand $brand)
 * @method Hospital setContactPoint(Property\ContactPoint $contactPoint)
 * @method Hospital setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Hospital setDepartment(Property\Department $department)
 * @method Hospital setDescription(Property\Description $description)
 * @method Hospital setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Hospital setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Hospital setDuns(Property\Duns $duns)
 * @method Hospital setEmail(Property\Email $email)
 * @method Hospital setEmployee(Property\Employee $employee)
 * @method Hospital setEvent(Property\Event $event)
 * @method Hospital setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Hospital setFounder(Property\Founder $founder)
 * @method Hospital setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Hospital setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Hospital setFunder(Property\Funder $funder)
 * @method Hospital setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Hospital setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Hospital setHasPOS(Property\HasPOS $hasPOS)
 * @method Hospital setImage(Property\Image $image)
 * @method Hospital setIsicV4(Property\IsicV4 $isicV4)
 * @method Hospital setLegalName(Property\LegalName $legalName)
 * @method Hospital setLeiCode(Property\LeiCode $leiCode)
 * @method Hospital setLocation(Property\Location $location)
 * @method Hospital setLogo(Property\Logo $logo)
 * @method Hospital setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Hospital setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Hospital setMember(Property\Member $member)
 * @method Hospital setMemberOf(Property\MemberOf $memberOf)
 * @method Hospital setNaics(Property\Naics $naics)
 * @method Hospital setName(Property\Name $name)
 * @method Hospital setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Hospital setOpeningHours(Property\OpeningHours $openingHours)
 * @method Hospital setOwns(Property\Owns $owns)
 * @method Hospital setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Hospital setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Hospital setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Hospital setPriceRange(Property\PriceRange $priceRange)
 * @method Hospital setReview(Property\Review $review)
 * @method Hospital setSameAs(Property\SameAs $sameAs)
 * @method Hospital setSeeks(Property\Seeks $seeks)
 * @method Hospital setSponsor(Property\Sponsor $sponsor)
 * @method Hospital setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Hospital setTaxID(Property\TaxID $taxID)
 * @method Hospital setTelephone(Property\Telephone $telephone)
 * @method Hospital setUrl(Property\Url $url)
 * @method Hospital setVatID(Property\VatID $vatID)
 */
class Hospital extends EmergencyService {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hospital';
	}
}