<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NGO.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\NGOType instead.
 * 
 * @method NGO setAdditionalType(Property\AdditionalType $additionalType)
 * @method NGO setAddress(Property\Address $address)
 * @method NGO setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method NGO setAlternateName(Property\AlternateName $alternateName)
 * @method NGO setAlumni(Property\Alumni $alumni)
 * @method NGO setAreaServed(Property\AreaServed $areaServed)
 * @method NGO setAward(Property\Award $award)
 * @method NGO setBrand(Property\Brand $brand)
 * @method NGO setContactPoint(Property\ContactPoint $contactPoint)
 * @method NGO setDepartment(Property\Department $department)
 * @method NGO setDescription(Property\Description $description)
 * @method NGO setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method NGO setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method NGO setDuns(Property\Duns $duns)
 * @method NGO setEmail(Property\Email $email)
 * @method NGO setEmployee(Property\Employee $employee)
 * @method NGO setEvent(Property\Event $event)
 * @method NGO setFaxNumber(Property\FaxNumber $faxNumber)
 * @method NGO setFounder(Property\Founder $founder)
 * @method NGO setFoundingDate(Property\FoundingDate $foundingDate)
 * @method NGO setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method NGO setFunder(Property\Funder $funder)
 * @method NGO setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method NGO setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method NGO setHasPOS(Property\HasPOS $hasPOS)
 * @method NGO setIdentifier(Property\Identifier $identifier)
 * @method NGO setImage(Property\Image $image)
 * @method NGO setIsicV4(Property\IsicV4 $isicV4)
 * @method NGO setLegalName(Property\LegalName $legalName)
 * @method NGO setLeiCode(Property\LeiCode $leiCode)
 * @method NGO setLocation(Property\Location $location)
 * @method NGO setLogo(Property\Logo $logo)
 * @method NGO setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method NGO setMakesOffer(Property\MakesOffer $makesOffer)
 * @method NGO setMember(Property\Member $member)
 * @method NGO setMemberOf(Property\MemberOf $memberOf)
 * @method NGO setNaics(Property\Naics $naics)
 * @method NGO setName(Property\Name $name)
 * @method NGO setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method NGO setOwns(Property\Owns $owns)
 * @method NGO setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method NGO setPotentialAction(Property\PotentialAction $potentialAction)
 * @method NGO setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method NGO setReview(Property\Review $review)
 * @method NGO setSameAs(Property\SameAs $sameAs)
 * @method NGO setSeeks(Property\Seeks $seeks)
 * @method NGO setSponsor(Property\Sponsor $sponsor)
 * @method NGO setSubOrganization(Property\SubOrganization $subOrganization)
 * @method NGO setTaxID(Property\TaxID $taxID)
 * @method NGO setTelephone(Property\Telephone $telephone)
 * @method NGO setUrl(Property\Url $url)
 * @method NGO setVatID(Property\VatID $vatID)
 */
class NGO extends Organization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NGO';
	}
}