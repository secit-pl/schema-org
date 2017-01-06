<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AnimalShelter.
 * 
 * @method AnimalShelter setAdditionalType(Property\AdditionalType $additionalType)
 * @method AnimalShelter setAddress(Property\Address $address)
 * @method AnimalShelter setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AnimalShelter setAlternateName(Property\AlternateName $alternateName)
 * @method AnimalShelter setAlumni(Property\Alumni $alumni)
 * @method AnimalShelter setAreaServed(Property\AreaServed $areaServed)
 * @method AnimalShelter setAward(Property\Award $award)
 * @method AnimalShelter setBrand(Property\Brand $brand)
 * @method AnimalShelter setContactPoint(Property\ContactPoint $contactPoint)
 * @method AnimalShelter setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AnimalShelter setDepartment(Property\Department $department)
 * @method AnimalShelter setDescription(Property\Description $description)
 * @method AnimalShelter setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AnimalShelter setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AnimalShelter setDuns(Property\Duns $duns)
 * @method AnimalShelter setEmail(Property\Email $email)
 * @method AnimalShelter setEmployee(Property\Employee $employee)
 * @method AnimalShelter setEvent(Property\Event $event)
 * @method AnimalShelter setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AnimalShelter setFounder(Property\Founder $founder)
 * @method AnimalShelter setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AnimalShelter setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AnimalShelter setFunder(Property\Funder $funder)
 * @method AnimalShelter setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AnimalShelter setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AnimalShelter setHasPOS(Property\HasPOS $hasPOS)
 * @method AnimalShelter setImage(Property\Image $image)
 * @method AnimalShelter setIsicV4(Property\IsicV4 $isicV4)
 * @method AnimalShelter setLegalName(Property\LegalName $legalName)
 * @method AnimalShelter setLeiCode(Property\LeiCode $leiCode)
 * @method AnimalShelter setLocation(Property\Location $location)
 * @method AnimalShelter setLogo(Property\Logo $logo)
 * @method AnimalShelter setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AnimalShelter setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AnimalShelter setMember(Property\Member $member)
 * @method AnimalShelter setMemberOf(Property\MemberOf $memberOf)
 * @method AnimalShelter setNaics(Property\Naics $naics)
 * @method AnimalShelter setName(Property\Name $name)
 * @method AnimalShelter setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AnimalShelter setOpeningHours(Property\OpeningHours $openingHours)
 * @method AnimalShelter setOwns(Property\Owns $owns)
 * @method AnimalShelter setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AnimalShelter setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AnimalShelter setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AnimalShelter setPriceRange(Property\PriceRange $priceRange)
 * @method AnimalShelter setReview(Property\Review $review)
 * @method AnimalShelter setSameAs(Property\SameAs $sameAs)
 * @method AnimalShelter setSeeks(Property\Seeks $seeks)
 * @method AnimalShelter setSponsor(Property\Sponsor $sponsor)
 * @method AnimalShelter setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AnimalShelter setTaxID(Property\TaxID $taxID)
 * @method AnimalShelter setTelephone(Property\Telephone $telephone)
 * @method AnimalShelter setUrl(Property\Url $url)
 * @method AnimalShelter setVatID(Property\VatID $vatID)
 */
class AnimalShelter extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AnimalShelter';
	}
}