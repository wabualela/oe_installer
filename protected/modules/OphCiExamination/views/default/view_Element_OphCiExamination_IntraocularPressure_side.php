<?php
/**
 * (C) OpenEyes Foundation, 2014
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (C) 2014, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>
<div class="data-value">
	<?php if ($element->{"{$side}_values"}): ?>
		<table>
			<thead>
				<tr>
					<th>Time</th>
					<th>mm Hg</th>
					<th>Instrument</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($element->{"{$side}_values"} as $value): ?>
					<tr>
						<td><?= substr($value->reading_time, 0, 5) ?></td>
						<td><?= $value->instrument->scale ? $value->qualitative_reading->name : $value->reading->name ?></td>
						<td><?= $value->instrument ? $value->instrument->name : "" ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	<?php endif ?>
	<div class="field-row">
		<div class="data-value">
			<?= Yii::app()->format->Ntext($element->{"{$side}_comments"}) ?>
		</div>
	</div>
</div>