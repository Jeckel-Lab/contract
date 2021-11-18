<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Presentation\ViewModel;

use JsonSerializable;

/**
 * Interface JsonViewModelInterface
 * @package JeckelLab\Contract\Presentation\ViewModel
 */
interface JsonViewModelInterface extends ViewModelInterface, JsonSerializable
{

}
