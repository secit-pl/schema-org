<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Dentist.
 * 
 * @method Dentist setAdditionalType(Property\AdditionalType $additionalType)
 * @method Dentist setAddress(Property\Address $address)
 * @method Dentist setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Dentist setAlternateName(Property\AlternateName $alternateName)
 * @method Dentist setAlumni(Property\Alumni $alumni)
 * @method Dentist setAreaServed(Property\AreaServed $areaServed)
 * @method Dentist setAward(Property\Award $award)
 * @method Dentist setBrand(Property\Brand $brand)
 * @method Dentist setContactPoint(Property\ContactPoint $contactPoint)
 * @method Dentist setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Dentist setDepartment(Property\Department $department)
 * @method Dentist setDescription(Property\Description $description)
 * @method Dentist setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Dentist setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Dentist setDuns(Property\Duns $duns)
 * @method Dentist setEmail(Property\Email $email)
 * @method Dentist setEmployee(Property\Employee $employee)
 * @method Dentist setEvent(Property\Event $event)
 * @method Dentist setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Dentist setFounder(Property\Founder $founder)
 * @method Dentist setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Dentist setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Dentist setFunder(Property\Funder $funder)
 * @method Dentist setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Dentist setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Dentist setHasPOS(Property\HasPOS $hasPOS)
 * @method Dentist setImage(Property\Image $image)
 * @method Dentist setIsicV4(Property\IsicV4 $isicV4)
 * @method Dentist setLegalName(Property\LegalName $legalName)
 * @method Dentist setLeiCode(Property\LeiCode $leiCode)
 * @method Dentist setLocation(Property\Location $location)
 * @method Dentist setLogo(Property\Logo $logo)
 * @method Dentist setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Dentist setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Dentist setMember(Property\Member $member)
 * @method Dentist setMemberOf(Property\MemberOf $memberOf)
 * @method Dentist setNaics(Property\Naics $naics)
 * @method Dentist setName(Property\Name $name)
 * @method Dentist setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Dentist setOpeningHours(Property\OpeningHours $openingHours)
 * @method Dentist setOwns(Property\Owns $owns)
 * @method Dentist setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Dentist setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Dentist setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Dentist setPriceRange(Property\PriceRange $priceRange)
 * @method Dentist setReview(Property\Review $review)
 * @method Dentist setSameAs(Property\SameAs $sameAs)
 * @method Dentist setSeeks(Property\Seeks $seeks)
 * @method Dentist setSponsor(Property\Sponsor $sponsor)
 * @method Dentist setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Dentist setTaxID(Property\TaxID $taxID)
 * @method Dentist setTelephone(Property\Telephone $telephone)
 * @method Dentist setUrl(Property\Url $url)
 * @method Dentist setVatID(Property\VatID $vatID)
 */
class Dentist extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Dentist';
	}
}