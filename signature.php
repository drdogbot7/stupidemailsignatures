<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?= ($person[lastName] ? $person[lastName] : ''); ?>, <?= ($person[firstName] ? $person[firstName] : '') ?></h3>
			</div>
			<div class="panel-body">
				<div id="person-{{ loop.index }}">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr style="margin-bottom:0;">
							<td style="background:none; border-top: 2px solid #000000; height:1px; width:100%; padding-bottom: 0; font-size: 4px; line-height: 4px;" cellpadding="0" cellspacing="0">&nbsp;</td>
						</tr>
					</table>
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td border="0" width="207" cellpadding="0" cellspacing="10">
								<img width="207" height="92" alt="a logo" />
							</td>
							<td border="0" cellpadding="0" cellspacing="10">
								<p style="font-family:sans-serif; font-size:16px; margin:0;">
									<strong><?= ($person[namePrefix] ? $person[namePrefix] : '') ?> <?= ($person[firstName] ? $person[firstName] : '') ?> <?= ($person[lastName] ? $person[lastName] : '') ?></strong><br>
									<?= ($person[jobTitle] ? '<small>' . $person[jobTitle] . '</small>' : '') ?>
								</p>
								<p style="margin:0;">
									<small style="font-family:sans-serif; font-size:12px; line-height:1;">
										<?= ($person[phoneOffice] ? 'Office: ' . $person[phoneOffice] . '<br>' : '' ) ?>
										<?= ($person[phoneFax] ? 'Fax: ' . $person[phoneFax] . '<br>' : '' ) ?>
										<?= ($person[phoneMobile] ? 'Cell: ' . $person[phoneMobile] . '<br>' : '' ) ?>
										<?= ($person[phoneHome] ? 'Home: ' . $person[phoneHome] . '<br>' : '' ) ?>
									</small>
								</p>
								<p style="margin:0;">
									<small style="font-family:sans-serif; font-size:12px; line-height:1;">
										<?= ($person[address1] ? $person[address1] . '<br>' : '' ) ?>
										<?= ($person[city] ? $person[city] . ',' : '') ?><?= ($person[state] ? $person[state] : '') ?><?= ($person[zip] ? $person[zip] : '') ?>
									</small>
								</p>
								<p style="margin:0;"><b><a style="font-family:sans-serif; font-size:12px; color:black; text-decoration:none;" title="Outdoor Access - Let Your Land Work For You" href="http://example.com">example.com</a></b></p>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="panel-footer">
				<button class="btn btn-default" data-my-clipboard data-clipboard-target="#person-{{ loop.index }}" data-clipboard-success="{{ person.firstName }} {{ person.middleName }} {{ person.lastName }}"><span class="glyphicon glyphicon-copy"></span> Copy Signature</button>
			</div>
		</div>