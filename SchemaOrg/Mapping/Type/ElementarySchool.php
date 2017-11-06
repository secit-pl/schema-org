<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ElementarySchool.
 * 
 * @method ElementarySchool setAdditionalType(Property\AdditionalType $additionalType)
 * @method ElementarySchool setAddress(Property\Address $address)
 * @method ElementarySchool setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ElementarySchool setAlternateName(Property\AlternateName $alternateName)
 * @method ElementarySchool setAlumni(Property\Alumni $alumni)
 * @method ElementarySchool setAreaServed(Property\AreaServed $areaServed)
 * @method ElementarySchool setAward(Property\Award $award)
 * @method ElementarySchool setBrand(Property\Brand $brand)
 * @method ElementarySchool setContactPoint(Property\ContactPoint $contactPoint)
 * @method ElementarySchool setDepartment(Property\Department $department)
 * @method ElementarySchool setDescription(Property\Description $description)
 * @method ElementarySchool setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ElementarySchool setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ElementarySchool setDuns(Property\Duns $duns)
 * @method ElementarySchool setEmail(Property\Email $email)
 * @method ElementarySchool setEmployee(Property\Employee $employee)
 * @method ElementarySchool setEvent(Property\Event $event)
 * @method ElementarySchool setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ElementarySchool setFounder(Property\Founder $founder)
 * @method ElementarySchool setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ElementarySchool setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ElementarySchool setFunder(Property\Funder $funder)
 * @method ElementarySchool setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ElementarySchool setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ElementarySchool setHasPOS(Property\HasPOS $hasPOS)
 * @method ElementarySchool setIdentifier(Property\Identifier $identifier)
 * @method ElementarySchool setImage(Property\Image $image)
 * @method ElementarySchool setIsicV4(Property\IsicV4 $isicV4)
 * @method ElementarySchool setLegalName(Property\LegalName $legalName)
 * @method ElementarySchool setLeiCode(Property\LeiCode $leiCode)
 * @method ElementarySchool setLocation(Property\Location $location)
 * @method ElementarySchool setLogo(Property\Logo $logo)
 * @method ElementarySchool setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ElementarySchool setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ElementarySchool setMember(Property\Member $member)
 * @method ElementarySchool setMemberOf(Property\MemberOf $memberOf)
 * @method ElementarySchool setNaics(Property\Naics $naics)
 * @method ElementarySchool setName(Property\Name $name)
 * @method ElementarySchool setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ElementarySchool setOwns(Property\Owns $owns)
 * @method ElementarySchool setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ElementarySchool setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ElementarySchool setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method ElementarySchool setReview(Property\Review $review)
 * @method ElementarySchool setSameAs(Property\SameAs $sameAs)
 * @method ElementarySchool setSeeks(Property\Seeks $seeks)
 * @method ElementarySchool setSponsor(Property\Sponsor $sponsor)
 * @method ElementarySchool setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ElementarySchool setTaxID(Property\TaxID $taxID)
 * @method ElementarySchool setTelephone(Property\Telephone $telephone)
 * @method ElementarySchool setUrl(Property\Url $url)
 * @method ElementarySchool setVatID(Property\VatID $vatID)
 */
class ElementarySchool extends EducationalOrganization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ElementarySchool';
	}
}