<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ProgramMembership.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ProgramMembershipType instead.
 * 
 * @method ProgramMembership setAdditionalType(Property\AdditionalType $additionalType)
 * @method ProgramMembership setAlternateName(Property\AlternateName $alternateName)
 * @method ProgramMembership setDescription(Property\Description $description)
 * @method ProgramMembership setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ProgramMembership setIdentifier(Property\Identifier $identifier)
 * @method ProgramMembership setImage(Property\Image $image)
 * @method ProgramMembership setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ProgramMembership setName(Property\Name $name)
 * @method ProgramMembership setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ProgramMembership setSameAs(Property\SameAs $sameAs)
 * @method ProgramMembership setUrl(Property\Url $url)
 */
class ProgramMembership extends Intangible {

	/**
	 * @var Property\HostingOrganization
	 */
	private $hostingOrganization;

	/**
	 * @var Property\Member
	 */
	private $member;

	/**
	 * @var Property\MembershipNumber
	 */
	private $membershipNumber;

	/**
	 * @var Property\ProgramName
	 */
	private $programName;

	/**
	 * Get hosting organization.
	 * 
	 * @return Property\HostingOrganization
	 */
	public function getHostingOrganization() {
		return $this->hostingOrganization;
	}

	/**
	 * Get member.
	 * 
	 * @return Property\Member
	 */
	public function getMember() {
		return $this->member;
	}

	/**
	 * Get membership number.
	 * 
	 * @return Property\MembershipNumber
	 */
	public function getMembershipNumber() {
		return $this->membershipNumber;
	}

	/**
	 * Get program name.
	 * 
	 * @return Property\ProgramName
	 */
	public function getProgramName() {
		return $this->programName;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ProgramMembership';
	}

	/**
	 * Set hosting organization.
	 * 
	 * @param Property\HostingOrganization $hostingOrganization
	 * @return ProgramMembership
	 */
	public function setHostingOrganization(Property\HostingOrganization $hostingOrganization) {
		$this->hostingOrganization = $hostingOrganization;

		return $this;
	}

	/**
	 * Set member.
	 * 
	 * @param Property\Member $member
	 * @return ProgramMembership
	 */
	public function setMember(Property\Member $member) {
		$this->member = $member;

		return $this;
	}

	/**
	 * Set membership number.
	 * 
	 * @param Property\MembershipNumber $membershipNumber
	 * @return ProgramMembership
	 */
	public function setMembershipNumber(Property\MembershipNumber $membershipNumber) {
		$this->membershipNumber = $membershipNumber;

		return $this;
	}

	/**
	 * Set program name.
	 * 
	 * @param Property\ProgramName $programName
	 * @return ProgramMembership
	 */
	public function setProgramName(Property\ProgramName $programName) {
		$this->programName = $programName;

		return $this;
	}
}