<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DaySpa.
 * 
 * @method DaySpa setAdditionalType(Property\AdditionalType $additionalType)
 * @method DaySpa setAddress(Property\Address $address)
 * @method DaySpa setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method DaySpa setAlternateName(Property\AlternateName $alternateName)
 * @method DaySpa setAlumni(Property\Alumni $alumni)
 * @method DaySpa setAreaServed(Property\AreaServed $areaServed)
 * @method DaySpa setAward(Property\Award $award)
 * @method DaySpa setBrand(Property\Brand $brand)
 * @method DaySpa setContactPoint(Property\ContactPoint $contactPoint)
 * @method DaySpa setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method DaySpa setDepartment(Property\Department $department)
 * @method DaySpa setDescription(Property\Description $description)
 * @method DaySpa setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DaySpa setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method DaySpa setDuns(Property\Duns $duns)
 * @method DaySpa setEmail(Property\Email $email)
 * @method DaySpa setEmployee(Property\Employee $employee)
 * @method DaySpa setEvent(Property\Event $event)
 * @method DaySpa setFaxNumber(Property\FaxNumber $faxNumber)
 * @method DaySpa setFounder(Property\Founder $founder)
 * @method DaySpa setFoundingDate(Property\FoundingDate $foundingDate)
 * @method DaySpa setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method DaySpa setFunder(Property\Funder $funder)
 * @method DaySpa setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method DaySpa setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method DaySpa setHasPOS(Property\HasPOS $hasPOS)
 * @method DaySpa setIdentifier(Property\Identifier $identifier)
 * @method DaySpa setImage(Property\Image $image)
 * @method DaySpa setIsicV4(Property\IsicV4 $isicV4)
 * @method DaySpa setLegalName(Property\LegalName $legalName)
 * @method DaySpa setLeiCode(Property\LeiCode $leiCode)
 * @method DaySpa setLocation(Property\Location $location)
 * @method DaySpa setLogo(Property\Logo $logo)
 * @method DaySpa setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DaySpa setMakesOffer(Property\MakesOffer $makesOffer)
 * @method DaySpa setMember(Property\Member $member)
 * @method DaySpa setMemberOf(Property\MemberOf $memberOf)
 * @method DaySpa setNaics(Property\Naics $naics)
 * @method DaySpa setName(Property\Name $name)
 * @method DaySpa setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method DaySpa setOpeningHours(Property\OpeningHours $openingHours)
 * @method DaySpa setOwns(Property\Owns $owns)
 * @method DaySpa setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method DaySpa setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method DaySpa setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DaySpa setPriceRange(Property\PriceRange $priceRange)
 * @method DaySpa setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method DaySpa setReview(Property\Review $review)
 * @method DaySpa setSameAs(Property\SameAs $sameAs)
 * @method DaySpa setSeeks(Property\Seeks $seeks)
 * @method DaySpa setSponsor(Property\Sponsor $sponsor)
 * @method DaySpa setSubOrganization(Property\SubOrganization $subOrganization)
 * @method DaySpa setTaxID(Property\TaxID $taxID)
 * @method DaySpa setTelephone(Property\Telephone $telephone)
 * @method DaySpa setUrl(Property\Url $url)
 * @method DaySpa setVatID(Property\VatID $vatID)
 */
class DaySpa extends HealthAndBeautyBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DaySpa';
	}
}