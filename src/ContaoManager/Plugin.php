<?php

/**
 * @copyright  Darko Selesi 2017 <https://w3scouts.com>
 * @author     Darko Selesi (w3scout)
 * @package    dompdf
 * @license    MIT
 * @see	       https://github.com/w3scout/contao-kutejs-bundle
 *
 */

namespace W3Scout\KutejsBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;

/**
 * Plugin for the Contao Manager.
 *
 * @author Darko Selesi (w3scout)
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('W3Scout\KutejsBundle\W3ScoutKutejsBundle')
                ->setLoadAfter([ContaoCoreBundle::class])
				->setReplace(['kutejs']),
        ];
    }
}