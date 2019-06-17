<?php

/**
 * This file is part of the TchoulomViewCounterBundle package.
 *
 * @package    TchoulomViewCounterBundle
 * @author     Original Author <tchoulomernest@yahoo.fr>
 *
 * (c) Ernest TCHOULOM <https://www.tchoulom.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tchoulom\ViewCounterBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Tchoulom\ViewCounterBundle\DependencyInjection\Compiler\ViewcounterPass;

class TchoulomViewCounterBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ViewcounterPass());
    }

    /**
     * The supported view interval.
     *
     * @var array
     */
    const SUPPORTED_INTERVAL = ['increment_each_view', 'unique_view', 'daily_view', 'hourly_view', 'weekly_view', 'monthly_view'];

    /**
     * The supported statistics keys.
     *
     * @var array
     */
    const SUPPORTED_STATS = ['use_stats', 'stats_extension'];
}
