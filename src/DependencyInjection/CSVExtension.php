<?php

declare(strict_types=1);

namespace Dnd\Bundle\CSVBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Console\Application;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class CSVExtension
 *
 * @package   Dnd\Bundle\CSVBundle\DependencyInjection
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class CSVExtension extends Extension
{
    /**
     * Description load function
     *
     * @param mixed[]          $configs
     * @param ContainerBuilder $container
     *
     * @return void
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        /** @var YamlFileLoader $loader */
        $loader = new YamlFileLoader(
            $container, new FileLocator(__DIR__ . '/../../config')
        );

        if (class_exists(Application::class)) {
            $loader->load('console.yaml');
        }
    }
}
