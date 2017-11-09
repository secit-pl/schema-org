<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ProfessionalService.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ProfessionalServiceType instead.
 * 
 * @method ProfessionalService setAdditionalType(Property\AdditionalType $additionalType)
 * @method ProfessionalService setAddress(Property\Address $address)
 * @method ProfessionalService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ProfessionalService setAlternateName(Property\AlternateName $alternateName)
 * @method ProfessionalService setAlumni(Property\Alumni $alumni)
 * @method ProfessionalService setAreaServed(Property\AreaServed $areaServed)
 * @method ProfessionalService setAward(Property\Award $award)
 * @method ProfessionalService setBrand(Property\Brand $brand)
 * @method ProfessionalService setContactPoint(Property\ContactPoint $contactPoint)
 * @method ProfessionalService setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ProfessionalService setDepartment(Property\Department $department)
 * @method ProfessionalService setDescription(Property\Description $description)
 * @method ProfessionalService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ProfessionalService setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ProfessionalService setDuns(Property\Duns $duns)
 * @method ProfessionalService setEmail(Property\Email $email)
 * @method ProfessionalService setEmployee(Property\Employee $employee)
 * @method ProfessionalService setEvent(Property\Event $event)
 * @method ProfessionalService setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ProfessionalService setFounder(Property\Founder $founder)
 * @method ProfessionalService setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ProfessionalService setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ProfessionalService setFunder(Property\Funder $funder)
 * @method ProfessionalService setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ProfessionalService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ProfessionalService setHasPOS(Property\HasPOS $hasPOS)
 * @method ProfessionalService setIdentifier(Property\Identifier $identifier)
 * @method ProfessionalService setImage(Property\Image $image)
 * @method ProfessionalService setIsicV4(Property\IsicV4 $isicV4)
 * @method ProfessionalService setLegalName(Property\LegalName $legalName)
 * @method ProfessionalService setLeiCode(Property\LeiCode $leiCode)
 * @method ProfessionalService setLocation(Property\Location $location)
 * @method ProfessionalService setLogo(Property\Logo $logo)
 * @method ProfessionalService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ProfessionalService setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ProfessionalService setMember(Property\Member $member)
 * @method ProfessionalService setMemberOf(Property\MemberOf $memberOf)
 * @method ProfessionalService setNaics(Property\Naics $naics)
 * @method ProfessionalService setName(Property\Name $name)
 * @method ProfessionalService setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ProfessionalService setOpeningHours(Property\OpeningHours $openingHours)
 * @method ProfessionalService setOwns(Property\Owns $owns)
 * @method ProfessionalService setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ProfessionalService setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ProfessionalService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ProfessionalService setPriceRange(Property\PriceRange $priceRange)
 * @method ProfessionalService setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method ProfessionalService setReview(Property\Review $review)
 * @method ProfessionalService setSameAs(Property\SameAs $sameAs)
 * @method ProfessionalService setSeeks(Property\Seeks $seeks)
 * @method ProfessionalService setSponsor(Property\Sponsor $sponsor)
 * @method ProfessionalService setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ProfessionalService setTaxID(Property\TaxID $taxID)
 * @method ProfessionalService setTelephone(Property\Telephone $telephone)
 * @method ProfessionalService setUrl(Property\Url $url)
 * @method ProfessionalService setVatID(Property\VatID $vatID)
 */
class ProfessionalService extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ProfessionalService';
	}
}