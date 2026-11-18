<?php
variables([
	VARLinkToSectionHome => true,
	//TODO: fix
	'cdn' => 'https://musicians.homes.amadeusweb.in/ryu/assets/cdn/',
]);

function site_before_render() {
	autosetPageMenu([VARLinkToNodeHome => true, VARDontOverwriteLogo => true]);
}
