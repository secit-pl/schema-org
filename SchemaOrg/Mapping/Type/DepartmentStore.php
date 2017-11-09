<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DepartmentStore.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DepartmentStoreType instead.
 * 
 * @method DepartmentStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method DepartmentStore setAddress(Property\Address $address)
 * @method DepartmentStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method DepartmentStore setAlternateName(Property\AlternateName $alternateName)
 * @method DepartmentStore setAlumni(Property\Alumni $alumni)
 * @method DepartmentStore setAreaServed(Property\AreaServed $areaServed)
 * @method DepartmentStore setAward(Property\Award $award)
 * @method DepartmentStore setBrand(Property\Brand $brand)
 * @method DepartmentStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method DepartmentStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method DepartmentStore setDepartment(Property\Department $department)
 * @method DepartmentStore setDescription(Property\Description $description)
 * @method DepartmentStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DepartmentStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method DepartmentStore setDuns(Property\Duns $duns)
 * @method DepartmentStore setEmail(Property\Email $email)
 * @method DepartmentStore setEmployee(Property\Employee $employee)
 * @method DepartmentStore setEvent(Property\Event $event)
 * @method DepartmentStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method DepartmentStore setFounder(Property\Founder $founder)
 * @method DepartmentStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method DepartmentStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method DepartmentStore setFunder(Property\Funder $funder)
 * @method DepartmentStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method DepartmentStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method DepartmentStore setHasPOS(Property\HasPOS $hasPOS)
 * @method DepartmentStore setIdentifier(Property\Identifier $identifier)
 * @method DepartmentStore setImage(Property\Image $image)
 * @method DepartmentStore setIsicV4(Property\IsicV4 $isicV4)
 * @method DepartmentStore setLegalName(Property\LegalName $legalName)
 * @method DepartmentStore setLeiCode(Property\LeiCode $leiCode)
 * @method DepartmentStore setLocation(Property\Location $location)
 * @method DepartmentStore setLogo(Property\Logo $logo)
 * @method DepartmentStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DepartmentStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method DepartmentStore setMember(Property\Member $member)
 * @method DepartmentStore setMemberOf(Property\MemberOf $memberOf)
 * @method DepartmentStore setNaics(Property\Naics $naics)
 * @method DepartmentStore setName(Property\Name $name)
 * @method DepartmentStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method DepartmentStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method DepartmentStore setOwns(Property\Owns $owns)
 * @method DepartmentStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method DepartmentStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method DepartmentStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DepartmentStore setPriceRange(Property\PriceRange $priceRange)
 * @method DepartmentStore setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method DepartmentStore setReview(Property\Review $review)
 * @method DepartmentStore setSameAs(Property\SameAs $sameAs)
 * @method DepartmentStore setSeeks(Property\Seeks $seeks)
 * @method DepartmentStore setSponsor(Property\Sponsor $sponsor)
 * @method DepartmentStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method DepartmentStore setTaxID(Property\TaxID $taxID)
 * @method DepartmentStore setTelephone(Property\Telephone $telephone)
 * @method DepartmentStore setUrl(Property\Url $url)
 * @method DepartmentStore setVatID(Property\VatID $vatID)
 */
class DepartmentStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DepartmentStore';
	}
}