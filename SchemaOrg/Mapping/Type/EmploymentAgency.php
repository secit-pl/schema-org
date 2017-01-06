<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EmploymentAgency.
 * 
 * @method EmploymentAgency setAdditionalType(Property\AdditionalType $additionalType)
 * @method EmploymentAgency setAddress(Property\Address $address)
 * @method EmploymentAgency setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method EmploymentAgency setAlternateName(Property\AlternateName $alternateName)
 * @method EmploymentAgency setAlumni(Property\Alumni $alumni)
 * @method EmploymentAgency setAreaServed(Property\AreaServed $areaServed)
 * @method EmploymentAgency setAward(Property\Award $award)
 * @method EmploymentAgency setBrand(Property\Brand $brand)
 * @method EmploymentAgency setContactPoint(Property\ContactPoint $contactPoint)
 * @method EmploymentAgency setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method EmploymentAgency setDepartment(Property\Department $department)
 * @method EmploymentAgency setDescription(Property\Description $description)
 * @method EmploymentAgency setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EmploymentAgency setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method EmploymentAgency setDuns(Property\Duns $duns)
 * @method EmploymentAgency setEmail(Property\Email $email)
 * @method EmploymentAgency setEmployee(Property\Employee $employee)
 * @method EmploymentAgency setEvent(Property\Event $event)
 * @method EmploymentAgency setFaxNumber(Property\FaxNumber $faxNumber)
 * @method EmploymentAgency setFounder(Property\Founder $founder)
 * @method EmploymentAgency setFoundingDate(Property\FoundingDate $foundingDate)
 * @method EmploymentAgency setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method EmploymentAgency setFunder(Property\Funder $funder)
 * @method EmploymentAgency setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method EmploymentAgency setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method EmploymentAgency setHasPOS(Property\HasPOS $hasPOS)
 * @method EmploymentAgency setImage(Property\Image $image)
 * @method EmploymentAgency setIsicV4(Property\IsicV4 $isicV4)
 * @method EmploymentAgency setLegalName(Property\LegalName $legalName)
 * @method EmploymentAgency setLeiCode(Property\LeiCode $leiCode)
 * @method EmploymentAgency setLocation(Property\Location $location)
 * @method EmploymentAgency setLogo(Property\Logo $logo)
 * @method EmploymentAgency setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EmploymentAgency setMakesOffer(Property\MakesOffer $makesOffer)
 * @method EmploymentAgency setMember(Property\Member $member)
 * @method EmploymentAgency setMemberOf(Property\MemberOf $memberOf)
 * @method EmploymentAgency setNaics(Property\Naics $naics)
 * @method EmploymentAgency setName(Property\Name $name)
 * @method EmploymentAgency setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method EmploymentAgency setOpeningHours(Property\OpeningHours $openingHours)
 * @method EmploymentAgency setOwns(Property\Owns $owns)
 * @method EmploymentAgency setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method EmploymentAgency setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method EmploymentAgency setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EmploymentAgency setPriceRange(Property\PriceRange $priceRange)
 * @method EmploymentAgency setReview(Property\Review $review)
 * @method EmploymentAgency setSameAs(Property\SameAs $sameAs)
 * @method EmploymentAgency setSeeks(Property\Seeks $seeks)
 * @method EmploymentAgency setSponsor(Property\Sponsor $sponsor)
 * @method EmploymentAgency setSubOrganization(Property\SubOrganization $subOrganization)
 * @method EmploymentAgency setTaxID(Property\TaxID $taxID)
 * @method EmploymentAgency setTelephone(Property\Telephone $telephone)
 * @method EmploymentAgency setUrl(Property\Url $url)
 * @method EmploymentAgency setVatID(Property\VatID $vatID)
 */
class EmploymentAgency extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EmploymentAgency';
	}
}