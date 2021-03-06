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
use WordPlate\Acf\Fields\Attributes\Library;
use WordPlate\Acf\Fields\Attributes\MimeTypes;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\ReturnFormat;
use WordPlate\Acf\Fields\Attributes\Wrapper;

/**
 * This is the file field class.
 *
 * @author Vincent Klaiber <hello@doubledip.se>
 */
class File extends Field
{
    use ConditionalLogic, Instructions, Library, MimeTypes, Required, ReturnFormat, Wrapper;

    /**
     * The field type.
     *
     * @var string
     */
    protected $type = 'file';

    /**
     * Set the minimum and maximum file size.
     *
     * @param int|string $min
     * @param int|string $max
     *
     * @return self
     */
    public function size($min, $max): self
    {
        $this->config->set('min_size', $min);
        $this->config->set('max_size', $max);

        return $this;
    }
}
