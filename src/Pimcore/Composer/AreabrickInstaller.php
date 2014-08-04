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
        return './www/website/views/areas/';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'pimcore-areabrick' === $packageType;
    }
}
