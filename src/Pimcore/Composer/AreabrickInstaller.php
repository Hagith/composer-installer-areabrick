<?php 

namespace Pimcore\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class AreabrickInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
		$areaNameParts = explode("/",$package->getName());
		$areaName = ucfirst($areaNameParts[1]); 
		
		$docRootName = "./www"; 
		if($configDocRoot = $this->composer->getConfig()->get("document-root-path")) {
			$docRootName = rtrim($configDocRoot,"/");
		}
		
        return $docRootName . '/website/views/areas/' . $areaName . "/";
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'pimcore-areabrick' === $packageType;
    }
}
