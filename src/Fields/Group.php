<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@doubledip.se>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace WordPlate\Acf\Fields;

use WordPlate\Acf\Fields\Attributes\ConditionalLogic;
use WordPlate\Acf\Fields\Attributes\Instructions;
use WordPlate\Acf\Fields\Attributes\Layout;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\SubFields;
use WordPlate\Acf\Fields\Attributes\Wrapper;

/**
 * This is the group field class.
 *
 * @author Vincent Klaiber <hello@doubledip.se>
 */
class Group extends Field
{
    use ConditionalLogic, Instructions, Layout, SubFields, Required, Wrapper;

    /**
     * The field type.
     *
     * @var string
     */
    protected $type = 'group';
}
