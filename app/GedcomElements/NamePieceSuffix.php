<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2020 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\GedcomElements;

use Fisharebest\Webtrees\Tree;

use function e;
use function view;

/**
 * NAME_PIECE_SUFFIX := {Size=1:30}
 * [ <NAME_PIECE> | <NAME_PIECE_SUFFIX>, <NAME_PIECE> ]
 * Non-indexing name piece that appears after the given name and surname parts. Different name
 * suffix parts are separated by a comma.
 * For example:
 * Lt. Cmndr. Joseph /Allen/ jr.
 * In this example jr. is considered as the name suffix portion.
 */
class NamePieceSuffix extends AbstractElement
{
    /**
     * An edit control for this data.
     *
     * @param string $id
     * @param string $name
     * @param string $value
     * @param Tree   $tree
     *
     * @return string
     */
    public function edit(string $id, string $name, string $value, Tree $tree): string
    {
        return
            '<div class="input-group">' .
            '<input class="form-control" type="text" id="' . e($id) . '" name="' . e($name) . '" value="' . e($value) . '">' .
            view('edit/input-addon-keyboard', ['id' => $id]) .
            '</div>';
    }
}
