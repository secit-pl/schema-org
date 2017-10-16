<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Preschool.
 * 
 * @method Preschool setAdditionalType(Property\AdditionalType $additionalType)
 * @method Preschool setAddress(Property\Address $address)
 * @method Preschool setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Preschool setAlternateName(Property\AlternateName $alternateName)
 * @method Preschool setAlumni(Property\Alumni $alumni)
 * @method Preschool setAreaServed(Property\AreaServed $areaServed)
 * @method Preschool setAward(Property\Award $award)
 * @method Preschool setBrand(Property\Brand $brand)
 * @method Preschool setContactPoint(Property\ContactPoint $contactPoint)
 * @method Preschool setDepartment(Property\Department $department)
 * @method Preschool setDescription(Property\Description $description)
 * @method Preschool setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Preschool setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Preschool setDuns(Property\Duns $duns)
 * @method Preschool setEmail(Property\Email $email)
 * @method Preschool setEmployee(Property\Employee $employee)
 * @method Preschool setEvent(Property\Event $event)
 * @method Preschool setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Preschool setFounder(Property\Founder $founder)
 * @method Preschool setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Preschool setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Preschool setFunder(Property\Funder $funder)
 * @method Preschool setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Preschool setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Preschool setHasPOS(Property\HasPOS $hasPOS)
 * @method Preschool setIdentifier(Property\Identifier $identifier)
 * @method Preschool setImage(Property\Image $image)
 * @method Preschool setIsicV4(Property\IsicV4 $isicV4)
 * @method Preschool setLegalName(Property\LegalName $legalName)
 * @method Preschool setLeiCode(Property\LeiCode $leiCode)
 * @method Preschool setLocation(Property\Location $location)
 * @method Preschool setLogo(Property\Logo $logo)
 * @method Preschool setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Preschool setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Preschool setMember(Property\Member $member)
 * @method Preschool setMemberOf(Property\MemberOf $memberOf)
 * @method Preschool setNaics(Property\Naics $naics)
 * @method Preschool setName(Property\Name $name)
 * @method Preschool setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Preschool setOwns(Property\Owns $owns)
 * @method Preschool setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Preschool setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Preschool setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Preschool setReview(Property\Review $review)
 * @method Preschool setSameAs(Property\SameAs $sameAs)
 * @method Preschool setSeeks(Property\Seeks $seeks)
 * @method Preschool setSponsor(Property\Sponsor $sponsor)
 * @method Preschool setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Preschool setTaxID(Property\TaxID $taxID)
 * @method Preschool setTelephone(Property\Telephone $telephone)
 * @method Preschool setUrl(Property\Url $url)
 * @method Preschool setVatID(Property\VatID $vatID)
 */
class Preschool extends EducationalOrganization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Preschool';
	}
}