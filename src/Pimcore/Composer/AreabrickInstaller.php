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
        return './www/website/views/areas/' . $areaName . "/";
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'pimcore-areabrick' === $packageType;
    }
}
