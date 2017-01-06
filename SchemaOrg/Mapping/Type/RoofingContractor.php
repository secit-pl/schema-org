<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RoofingContractor.
 * 
 * @method RoofingContractor setAdditionalType(Property\AdditionalType $additionalType)
 * @method RoofingContractor setAddress(Property\Address $address)
 * @method RoofingContractor setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method RoofingContractor setAlternateName(Property\AlternateName $alternateName)
 * @method RoofingContractor setAlumni(Property\Alumni $alumni)
 * @method RoofingContractor setAreaServed(Property\AreaServed $areaServed)
 * @method RoofingContractor setAward(Property\Award $award)
 * @method RoofingContractor setBrand(Property\Brand $brand)
 * @method RoofingContractor setContactPoint(Property\ContactPoint $contactPoint)
 * @method RoofingContractor setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method RoofingContractor setDepartment(Property\Department $department)
 * @method RoofingContractor setDescription(Property\Description $description)
 * @method RoofingContractor setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RoofingContractor setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method RoofingContractor setDuns(Property\Duns $duns)
 * @method RoofingContractor setEmail(Property\Email $email)
 * @method RoofingContractor setEmployee(Property\Employee $employee)
 * @method RoofingContractor setEvent(Property\Event $event)
 * @method RoofingContractor setFaxNumber(Property\FaxNumber $faxNumber)
 * @method RoofingContractor setFounder(Property\Founder $founder)
 * @method RoofingContractor setFoundingDate(Property\FoundingDate $foundingDate)
 * @method RoofingContractor setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method RoofingContractor setFunder(Property\Funder $funder)
 * @method RoofingContractor setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method RoofingContractor setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method RoofingContractor setHasPOS(Property\HasPOS $hasPOS)
 * @method RoofingContractor setImage(Property\Image $image)
 * @method RoofingContractor setIsicV4(Property\IsicV4 $isicV4)
 * @method RoofingContractor setLegalName(Property\LegalName $legalName)
 * @method RoofingContractor setLeiCode(Property\LeiCode $leiCode)
 * @method RoofingContractor setLocation(Property\Location $location)
 * @method RoofingContractor setLogo(Property\Logo $logo)
 * @method RoofingContractor setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RoofingContractor setMakesOffer(Property\MakesOffer $makesOffer)
 * @method RoofingContractor setMember(Property\Member $member)
 * @method RoofingContractor setMemberOf(Property\MemberOf $memberOf)
 * @method RoofingContractor setNaics(Property\Naics $naics)
 * @method RoofingContractor setName(Property\Name $name)
 * @method RoofingContractor setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method RoofingContractor setOpeningHours(Property\OpeningHours $openingHours)
 * @method RoofingContractor setOwns(Property\Owns $owns)
 * @method RoofingContractor setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method RoofingContractor setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method RoofingContractor setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RoofingContractor setPriceRange(Property\PriceRange $priceRange)
 * @method RoofingContractor setReview(Property\Review $review)
 * @method RoofingContractor setSameAs(Property\SameAs $sameAs)
 * @method RoofingContractor setSeeks(Property\Seeks $seeks)
 * @method RoofingContractor setSponsor(Property\Sponsor $sponsor)
 * @method RoofingContractor setSubOrganization(Property\SubOrganization $subOrganization)
 * @method RoofingContractor setTaxID(Property\TaxID $taxID)
 * @method RoofingContractor setTelephone(Property\Telephone $telephone)
 * @method RoofingContractor setUrl(Property\Url $url)
 * @method RoofingContractor setVatID(Property\VatID $vatID)
 */
class RoofingContractor extends HomeAndConstructionBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RoofingContractor';
	}
}