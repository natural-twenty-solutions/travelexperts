<?php
	class PackageObj
	{
		private $PackageId;
		Private $PkgName;
		private $PkgStartDate;
		private $PkgEndDate;
		private $PkgDesc;
		private $PkgBestPrice;
		private $PkgAgencyCommission;
		
		
		public function __construct($PackageId, $PkgName,$PkgStartDate,$PkgEndDate,$PkgDesc,$PkgBestPrice,$PkgAgencyCommission)
		{
			$this->PackageId=$PackageId;
			$this->PkgName=$PkgName;
			$this->PkgStartDate=$PkgStartDate;
			$this->PkgEndDate=$PkgEndDate;
			$this->PkgDesc=$PkgDesc;
			$this->PkgBestPrice=$PkgBestPrice;
			$this->PkgAgencyCommission=$PkgAgencyCommission;
			
		}
		
		public function getPackageId()
		{
			return $this->PackageId;
		}
		public function setPackageId($PackageId)
		{
			$this->PackageId=$PackageId;
		}
		
		public function getPkgName()
		{
			return $this->PkgName;
		}
		public function setPkgName($PkgName)
		{
			$this->PkgName=$PkgName;
		}
		
		public function getPkgStartDate()
		{
			return $this->PkgStartDate;
		}
		public function setPkgStartDate($PkgStartDate)
		{
			$this->PkgStartDate=$PkgStartDate;
		}
		
		public function getPkgEndDate()
		{
			return $this->PkgEndDate;
		}
		public function setPkgEndDate($PkgEndDate)
		{
			$this->PkgEndDate=$PkgEndDate;
		}
		
		public function getPkgDesc()
		{
			return $this->PkgDesc;
		}
		public function setPkgDesc($PkgDesc)
		{
			$this->PkgDesc=$PkgDesc;
		}
		
		public function getPkgBestPrice()
		{
			return $this->PkgBestPrice;
		}
		public function setPkgBestPrice($PkgBestPrice)
		{
			$this->PkgBestPrice=$PkgBestPrice;
		}
		
		public function getPkgAgencyCommission()
		{
			return $this->PkgAgencyCommission;
		}
		public function setPkgAgencyCommission($PkgAgencyCommission)
		{
			$this->PkgAgencyCommission=$PkgAgencyCommission;
		}
		
	
		
		public function __toString() //build-in name, cannot change
		{
			return "PackageObj: ".$this->PackageId.",".$this->PkgName.",".$this->PkgStartDate.",".$this->PkgEndDate.",".$this->PkgDesc.",".$this->PkgBestPrice.",".$this->PkgAgencyCommission ;
		}
		
	}

?>