<?php

if ( ! function_exists( 'antreas_metadata_icons' ) ) {
	function antreas_metadata_icons() {
		$icons_packs = array(
			'fontawesomebrands' => array(
				'name'  => 'Font Awesome 5 Brands',
				'icons' => antreas_metadata_fontawesome_brands(),
			),
			'fontawesome'   => array(
				'name'  => 'Font Awesome 5 Free',
				'icons' => antreas_metadata_fontawesome(),
			)
		);
		return apply_filters( 'antreas_metadata_icons', $icons_packs );
	}
}

if ( ! function_exists( 'antreas_metadata_fontawesome_brands') ) {
	function antreas_metadata_fontawesome_brands() {
		$data = array(
			'&#xf26e' => '&#xf26e', 
			'&#xf368' => '&#xf368', 
			'&#xf369' => '&#xf369', 
			'&#xf6af' => '&#xf6af', 
			'&#xf170' => '&#xf170', 
			'&#xf778' => '&#xf778', 
			'&#xf36a' => '&#xf36a', 
			'&#xf36b' => '&#xf36b', 
			'&#xf834' => '&#xf834', 
			'&#xf36c' => '&#xf36c', 
			'&#xf642' => '&#xf642', 
			'&#xf270' => '&#xf270', 
			'&#xf42c' => '&#xf42c', 
			'&#xf36d' => '&#xf36d', 
			'&#xf17b' => '&#xf17b', 
			'&#xf209' => '&#xf209', 
			'&#xf36e' => '&#xf36e', 
			'&#xf420' => '&#xf420', 
			'&#xf36f' => '&#xf36f', 
			'&#xf370' => '&#xf370', 
			'&#xf371' => '&#xf371', 
			'&#xf179' => '&#xf179', 
			'&#xf415' => '&#xf415', 
			'&#xf77a' => '&#xf77a', 
			'&#xf372' => '&#xf372', 
			'&#xf77b' => '&#xf77b', 
			'&#xf373' => '&#xf373', 
			'&#xf41c' => '&#xf41c', 
			'&#xf374' => '&#xf374', 
			'&#xf421' => '&#xf421', 
			'&#xf375' => '&#xf375', 
			'&#xf2d5' => '&#xf2d5', 
			'&#xf835' => '&#xf835', 
			'&#xf1b4' => '&#xf1b4', 
			'&#xf1b5' => '&#xf1b5', 
			'&#xf378' => '&#xf378', 
			'&#xf171' => '&#xf171', 
			'&#xf379' => '&#xf379', 
			'&#xf37a' => '&#xf37a', 
			'&#xf27e' => '&#xf27e', 
			'&#xf37b' => '&#xf37b', 
			'&#xf37c' => '&#xf37c', 
			'&#xf37d' => '&#xf37d', 
			'&#xf293' => '&#xf293', 
			'&#xf294' => '&#xf294', 
			'&#xf836' => '&#xf836', 
			'&#xf15a' => '&#xf15a', 
			'&#xf837' => '&#xf837', 
			'&#xf37f' => '&#xf37f', 
			'&#xf20d' => '&#xf20d', 
			'&#xf785' => '&#xf785', 
			'&#xf42d' => '&#xf42d', 
			'&#xf1f3' => '&#xf1f3', 
			'&#xf416' => '&#xf416', 
			'&#xf24c' => '&#xf24c', 
			'&#xf1f2' => '&#xf1f2', 
			'&#xf24b' => '&#xf24b', 
			'&#xf1f1' => '&#xf1f1', 
			'&#xf1f4' => '&#xf1f4', 
			'&#xf1f5' => '&#xf1f5', 
			'&#xf1f0' => '&#xf1f0', 
			'&#xf380' => '&#xf380', 
			'&#xf789' => '&#xf789', 
			'&#xf268' => '&#xf268', 
			'&#xf838' => '&#xf838', 
			'&#xf383' => '&#xf383', 
			'&#xf384' => '&#xf384', 
			'&#xf385' => '&#xf385', 
			'&#xf1cb' => '&#xf1cb', 
			'&#xf284' => '&#xf284', 
			'&#xf78d' => '&#xf78d', 
			'&#xf20e' => '&#xf20e', 
			'&#xf26d' => '&#xf26d', 
			'&#xf388' => '&#xf388', 
			'&#xf25e' => '&#xf25e', 
			'&#xf4e7' => '&#xf4e7', 
			'&#xf4e8' => '&#xf4e8', 
			'&#xf4e9' => '&#xf4e9', 
			'&#xf4ea' => '&#xf4ea', 
			'&#xf4eb' => '&#xf4eb', 
			'&#xf4ec' => '&#xf4ec', 
			'&#xf4ed' => '&#xf4ed', 
			'&#xf4ee' => '&#xf4ee', 
			'&#xf4ef' => '&#xf4ef', 
			'&#xf4f0' => '&#xf4f0', 
			'&#xf4f1' => '&#xf4f1', 
			'&#xf4f2' => '&#xf4f2', 
			'&#xf4f3' => '&#xf4f3', 
			'&#xf6c9' => '&#xf6c9', 
			'&#xf13c' => '&#xf13c', 
			'&#xf38b' => '&#xf38b', 
			'&#xf38c' => '&#xf38c', 
			'&#xf38d' => '&#xf38d', 
			'&#xf6ca' => '&#xf6ca', 
			'&#xf210' => '&#xf210', 
			'&#xf1a5' => '&#xf1a5', 
			'&#xf38e' => '&#xf38e', 
			'&#xf38f' => '&#xf38f', 
			'&#xf6cc' => '&#xf6cc', 
			'&#xf1bd' => '&#xf1bd', 
			'&#xf790' => '&#xf790', 
			'&#xf791' => '&#xf791', 
			'&#xf1a6' => '&#xf1a6', 
			'&#xf391' => '&#xf391', 
			'&#xf392' => '&#xf392', 
			'&#xf393' => '&#xf393', 
			'&#xf394' => '&#xf394', 
			'&#xf395' => '&#xf395', 
			'&#xf396' => '&#xf396', 
			'&#xf17d' => '&#xf17d', 
			'&#xf397' => '&#xf397', 
			'&#xf16b' => '&#xf16b', 
			'&#xf1a9' => '&#xf1a9', 
			'&#xf399' => '&#xf399', 
			'&#xf39a' => '&#xf39a', 
			'&#xf4f4' => '&#xf4f4', 
			'&#xf282' => '&#xf282', 
			'&#xf430' => '&#xf430', 
			'&#xf5f1' => '&#xf5f1', 
			'&#xf423' => '&#xf423', 
			'&#xf1d1' => '&#xf1d1', 
			'&#xf299' => '&#xf299', 
			'&#xf39d' => '&#xf39d', 
			'&#xf42e' => '&#xf42e', 
			'&#xf2d7' => '&#xf2d7', 
			'&#xf839' => '&#xf839', 
			'&#xf23e' => '&#xf23e', 
			'&#xf09a' => '&#xf09a', 
			'&#xf39e' => '&#xf39e', 
			'&#xf39f' => '&#xf39f', 
			'&#xf082' => '&#xf082', 
			'&#xf6dc' => '&#xf6dc', 
			'&#xf797' => '&#xf797', 
			'&#xf798' => '&#xf798', 
			'&#xf799' => '&#xf799', 
			'&#xf269' => '&#xf269', 
			'&#xf2b0' => '&#xf2b0', 
			'&#xf50a' => '&#xf50a', 
			'&#xf3a1' => '&#xf3a1', 
			'&#xf16e' => '&#xf16e', 
			'&#xf44d' => '&#xf44d', 
			'&#xf417' => '&#xf417', 
			'&#xf2b4' => '&#xf2b4', 
			'&#xf35c' => '&#xf35c', 
			'&#xf425' => '&#xf425', 
			'&#xf280' => '&#xf280', 
			'&#xf3a2' => '&#xf3a2', 
			'&#xf286' => '&#xf286', 
			'&#xf3a3' => '&#xf3a3', 
			'&#xf211' => '&#xf211', 
			'&#xf180' => '&#xf180', 
			'&#xf2c5' => '&#xf2c5', 
			'&#xf3a4' => '&#xf3a4', 
			'&#xf50b' => '&#xf50b', 
			'&#xf50c' => '&#xf50c', 
			'&#xf50d' => '&#xf50d', 
			'&#xf265' => '&#xf265', 
			'&#xf260' => '&#xf260', 
			'&#xf261' => '&#xf261', 
			'&#xf1d3' => '&#xf1d3', 
			'&#xf841' => '&#xf841', 
			'&#xf1d2' => '&#xf1d2', 
			'&#xf09b' => '&#xf09b', 
			'&#xf113' => '&#xf113', 
			'&#xf092' => '&#xf092', 
			'&#xf3a6' => '&#xf3a6', 
			'&#xf296' => '&#xf296', 
			'&#xf426' => '&#xf426', 
			'&#xf2a5' => '&#xf2a5', 
			'&#xf2a6' => '&#xf2a6', 
			'&#xf3a7' => '&#xf3a7', 
			'&#xf3a8' => '&#xf3a8', 
			'&#xf3a9' => '&#xf3a9', 
			'&#xf1a0' => '&#xf1a0', 
			'&#xf3aa' => '&#xf3aa', 
			'&#xf3ab' => '&#xf3ab', 
			'&#xf2b3' => '&#xf2b3', 
			'&#xf0d5' => '&#xf0d5', 
			'&#xf0d4' => '&#xf0d4', 
			'&#xf1ee' => '&#xf1ee', 
			'&#xf184' => '&#xf184', 
			'&#xf2d6' => '&#xf2d6', 
			'&#xf3ac' => '&#xf3ac', 
			'&#xf3ad' => '&#xf3ad', 
			'&#xf3ae' => '&#xf3ae', 
			'&#xf1d4' => '&#xf1d4', 
			'&#xf3af' => '&#xf3af', 
			'&#xf5f7' => '&#xf5f7', 
			'&#xf452' => '&#xf452', 
			'&#xf3b0' => '&#xf3b0', 
			'&#xf427' => '&#xf427', 
			'&#xf592' => '&#xf592', 
			'&#xf3b1' => '&#xf3b1', 
			'&#xf27c' => '&#xf27c', 
			'&#xf13b' => '&#xf13b', 
			'&#xf3b2' => '&#xf3b2', 
			'&#xf2d8' => '&#xf2d8', 
			'&#xf16d' => '&#xf16d', 
			'&#xf7af' => '&#xf7af', 
			'&#xf26b' => '&#xf26b', 
			'&#xf7b0' => '&#xf7b0', 
			'&#xf208' => '&#xf208', 
			'&#xf83a' => '&#xf83a', 
			'&#xf3b4' => '&#xf3b4', 
			'&#xf3b5' => '&#xf3b5', 
			'&#xf4e4' => '&#xf4e4', 
			'&#xf50e' => '&#xf50e', 
			'&#xf3b6' => '&#xf3b6', 
			'&#xf7b1' => '&#xf7b1', 
			'&#xf3b7' => '&#xf3b7', 
			'&#xf1aa' => '&#xf1aa', 
			'&#xf3b8' => '&#xf3b8', 
			'&#xf3b9' => '&#xf3b9', 
			'&#xf1cc' => '&#xf1cc', 
			'&#xf5fa' => '&#xf5fa', 
			'&#xf4f5' => '&#xf4f5', 
			'&#xf3ba' => '&#xf3ba', 
			'&#xf3bb' => '&#xf3bb', 
			'&#xf3bc' => '&#xf3bc', 
			'&#xf42f' => '&#xf42f', 
			'&#xf3bd' => '&#xf3bd', 
			'&#xf202' => '&#xf202', 
			'&#xf203' => '&#xf203', 
			'&#xf212' => '&#xf212', 
			'&#xf41d' => '&#xf41d', 
			'&#xf3c0' => '&#xf3c0', 
			'&#xf08c' => '&#xf08c', 
			'&#xf0e1' => '&#xf0e1', 
			'&#xf2b8' => '&#xf2b8', 
			'&#xf17c' => '&#xf17c', 
			'&#xf3c3' => '&#xf3c3', 
			'&#xf3c4' => '&#xf3c4', 
			'&#xf59e' => '&#xf59e', 
			'&#xf50f' => '&#xf50f', 
			'&#xf60f' => '&#xf60f', 
			'&#xf4f6' => '&#xf4f6', 
			'&#xf136' => '&#xf136', 
			'&#xf3c6' => '&#xf3c6', 
			'&#xf23a' => '&#xf23a', 
			'&#xf3c7' => '&#xf3c7', 
			'&#xf3c8' => '&#xf3c8', 
			'&#xf2e0' => '&#xf2e0', 
			'&#xf5a3' => '&#xf5a3', 
			'&#xf7b3' => '&#xf7b3', 
			'&#xf3ca' => '&#xf3ca', 
			'&#xf3cb' => '&#xf3cb', 
			'&#xf289' => '&#xf289', 
			'&#xf3cc' => '&#xf3cc', 
			'&#xf285' => '&#xf285', 
			'&#xf3d0' => '&#xf3d0', 
			'&#xf3d2' => '&#xf3d2', 
			'&#xf612' => '&#xf612', 
			'&#xf5a8' => '&#xf5a8', 
			'&#xf419' => '&#xf419', 
			'&#xf3d3' => '&#xf3d3', 
			'&#xf3d4' => '&#xf3d4', 
			'&#xf3d5' => '&#xf3d5', 
			'&#xf3d6' => '&#xf3d6', 
			'&#xf263' => '&#xf263', 
			'&#xf264' => '&#xf264', 
			'&#xf510' => '&#xf510', 
			'&#xf23d' => '&#xf23d', 
			'&#xf19b' => '&#xf19b', 
			'&#xf26a' => '&#xf26a', 
			'&#xf23c' => '&#xf23c', 
			'&#xf41a' => '&#xf41a', 
			'&#xf3d7' => '&#xf3d7', 
			'&#xf18c' => '&#xf18c', 
			'&#xf3d8' => '&#xf3d8', 
			'&#xf3d9' => '&#xf3d9', 
			'&#xf1ed' => '&#xf1ed', 
			'&#xf704' => '&#xf704', 
			'&#xf3da' => '&#xf3da', 
			'&#xf3db' => '&#xf3db', 
			'&#xf3dc' => '&#xf3dc', 
			'&#xf511' => '&#xf511', 
			'&#xf457' => '&#xf457', 
			'&#xf2ae' => '&#xf2ae', 
			'&#xf1a8' => '&#xf1a8', 
			'&#xf4e5' => '&#xf4e5', 
			'&#xf1a7' => '&#xf1a7', 
			'&#xf0d2' => '&#xf0d2', 
			'&#xf231' => '&#xf231', 
			'&#xf0d3' => '&#xf0d3', 
			'&#xf3df' => '&#xf3df', 
			'&#xf288' => '&#xf288', 
			'&#xf3e1' => '&#xf3e1', 
			'&#xf3e2' => '&#xf3e2', 
			'&#xf1d6' => '&#xf1d6', 
			'&#xf459' => '&#xf459', 
			'&#xf2c4' => '&#xf2c4', 
			'&#xf4f7' => '&#xf4f7', 
			'&#xf7bb' => '&#xf7bb', 
			'&#xf2d9' => '&#xf2d9', 
			'&#xf41b' => '&#xf41b', 
			'&#xf75d' => '&#xf75d', 
			'&#xf4d5' => '&#xf4d5', 
			'&#xf1d0' => '&#xf1d0', 
			'&#xf3e3' => '&#xf3e3', 
			'&#xf1a1' => '&#xf1a1', 
			'&#xf281' => '&#xf281', 
			'&#xf1a2' => '&#xf1a2', 
			'&#xf7bc' => '&#xf7bc', 
			'&#xf18b' => '&#xf18b', 
			'&#xf3e6' => '&#xf3e6', 
			'&#xf4f8' => '&#xf4f8', 
			'&#xf3e7' => '&#xf3e7', 
			'&#xf5b2' => '&#xf5b2', 
			'&#xf3e8' => '&#xf3e8', 
			'&#xf3e9' => '&#xf3e9', 
			'&#xf267' => '&#xf267', 
			'&#xf83b' => '&#xf83b', 
			'&#xf41e' => '&#xf41e', 
			'&#xf3ea' => '&#xf3ea', 
			'&#xf28a' => '&#xf28a', 
			'&#xf3eb' => '&#xf3eb', 
			'&#xf2da' => '&#xf2da', 
			'&#xf213' => '&#xf213', 
			'&#xf3ec' => '&#xf3ec', 
			'&#xf214' => '&#xf214', 
			'&#xf5b5' => '&#xf5b5', 
			'&#xf215' => '&#xf215', 
			'&#xf3ee' => '&#xf3ee', 
			'&#xf512' => '&#xf512', 
			'&#xf7c6' => '&#xf7c6', 
			'&#xf216' => '&#xf216', 
			'&#xf17e' => '&#xf17e', 
			'&#xf198' => '&#xf198', 
			'&#xf3ef' => '&#xf3ef', 
			'&#xf1e7' => '&#xf1e7', 
			'&#xf2ab' => '&#xf2ab', 
			'&#xf2ac' => '&#xf2ac', 
			'&#xf2ad' => '&#xf2ad', 
			'&#xf1be' => '&#xf1be', 
			'&#xf7d3' => '&#xf7d3', 
			'&#xf3f3' => '&#xf3f3', 
			'&#xf83c' => '&#xf83c', 
			'&#xf1bc' => '&#xf1bc', 
			'&#xf5be' => '&#xf5be', 
			'&#xf18d' => '&#xf18d', 
			'&#xf16c' => '&#xf16c', 
			'&#xf842' => '&#xf842', 
			'&#xf3f5' => '&#xf3f5', 
			'&#xf1b6' => '&#xf1b6', 
			'&#xf1b7' => '&#xf1b7', 
			'&#xf3f6' => '&#xf3f6', 
			'&#xf3f7' => '&#xf3f7', 
			'&#xf428' => '&#xf428', 
			'&#xf429' => '&#xf429', 
			'&#xf42a' => '&#xf42a', 
			'&#xf3f8' => '&#xf3f8', 
			'&#xf1a4' => '&#xf1a4', 
			'&#xf1a3' => '&#xf1a3', 
			'&#xf2dd' => '&#xf2dd', 
			'&#xf3f9' => '&#xf3f9', 
			'&#xf7d6' => '&#xf7d6', 
			'&#xf83d' => '&#xf83d', 
			'&#xf4f9' => '&#xf4f9', 
			'&#xf2c6' => '&#xf2c6', 
			'&#xf3fe' => '&#xf3fe', 
			'&#xf1d5' => '&#xf1d5', 
			'&#xf69d' => '&#xf69d', 
			'&#xf5c6' => '&#xf5c6', 
			'&#xf2b2' => '&#xf2b2', 
			'&#xf731' => '&#xf731', 
			'&#xf513' => '&#xf513', 
			'&#xf181' => '&#xf181', 
			'&#xf262' => '&#xf262', 
			'&#xf173' => '&#xf173', 
			'&#xf174' => '&#xf174', 
			'&#xf1e8' => '&#xf1e8', 
			'&#xf099' => '&#xf099', 
			'&#xf081' => '&#xf081', 
			'&#xf42b' => '&#xf42b', 
			'&#xf402' => '&#xf402', 
			'&#xf7df' => '&#xf7df', 
			'&#xf403' => '&#xf403', 
			'&#xf404' => '&#xf404', 
			'&#xf405' => '&#xf405', 
			'&#xf7e0' => '&#xf7e0', 
			'&#xf287' => '&#xf287', 
			'&#xf7e1' => '&#xf7e1', 
			'&#xf407' => '&#xf407', 
			'&#xf408' => '&#xf408', 
			'&#xf237' => '&#xf237', 
			'&#xf2a9' => '&#xf2a9', 
			'&#xf2aa' => '&#xf2aa', 
			'&#xf409' => '&#xf409', 
			'&#xf40a' => '&#xf40a', 
			'&#xf194' => '&#xf194', 
			'&#xf27d' => '&#xf27d', 
			'&#xf1ca' => '&#xf1ca', 
			'&#xf189' => '&#xf189', 
			'&#xf40b' => '&#xf40b', 
			'&#xf41f' => '&#xf41f', 
			'&#xf83f' => '&#xf83f', 
			'&#xf5cc' => '&#xf5cc', 
			'&#xf18a' => '&#xf18a', 
			'&#xf1d7' => '&#xf1d7', 
			'&#xf232' => '&#xf232', 
			'&#xf40c' => '&#xf40c', 
			'&#xf40d' => '&#xf40d', 
			'&#xf266' => '&#xf266', 
			'&#xf17a' => '&#xf17a', 
			'&#xf5cf' => '&#xf5cf', 
			'&#xf730' => '&#xf730', 
			'&#xf514' => '&#xf514', 
			'&#xf19a' => '&#xf19a', 
			'&#xf411' => '&#xf411', 
			'&#xf297' => '&#xf297', 
			'&#xf2de' => '&#xf2de', 
			'&#xf298' => '&#xf298', 
			'&#xf3e4' => '&#xf3e4', 
			'&#xf412' => '&#xf412', 
			'&#xf168' => '&#xf168', 
			'&#xf169' => '&#xf169', 
			'&#xf23b' => '&#xf23b', 
			'&#xf19e' => '&#xf19e', 
			'&#xf840' => '&#xf840', 
			'&#xf413' => '&#xf413', 
			'&#xf414' => '&#xf414', 
			'&#xf7e3' => '&#xf7e3', 
			'&#xf1e9' => '&#xf1e9', 
			'&#xf2b1' => '&#xf2b1', 
			'&#xf167' => '&#xf167', 
			'&#xf431' => '&#xf431', 
			'&#xf63f' => '&#xf63f', 
		);
		return $data;
	}
}


if ( ! function_exists( 'antreas_metadata_fontawesome' ) ) {
	function antreas_metadata_fontawesome() {
		$data = array(
			'&#xf641' => '&#xf641',
			'&#xf2b9' => '&#xf2b9',
			'&#xf2bb' => '&#xf2bb',
			'&#xf042' => '&#xf042',
			'&#xf5d0' => '&#xf5d0',
			'&#xf037' => '&#xf037',
			'&#xf039' => '&#xf039',
			'&#xf036' => '&#xf036',
			'&#xf038' => '&#xf038',
			'&#xf461' => '&#xf461',
			'&#xf0f9' => '&#xf0f9',
			'&#xf2a3' => '&#xf2a3',
			'&#xf13d' => '&#xf13d',
			'&#xf103' => '&#xf103',
			'&#xf100' => '&#xf100',
			'&#xf101' => '&#xf101',
			'&#xf102' => '&#xf102',
			'&#xf107' => '&#xf107',
			'&#xf104' => '&#xf104',
			'&#xf105' => '&#xf105',
			'&#xf106' => '&#xf106',
			'&#xf556' => '&#xf556',
			'&#xf644' => '&#xf644',
			'&#xf5d1' => '&#xf5d1',
			'&#xf187' => '&#xf187',
			'&#xf557' => '&#xf557',
			'&#xf358' => '&#xf358',
			'&#xf359' => '&#xf359',
			'&#xf35a' => '&#xf35a',
			'&#xf35b' => '&#xf35b',
			'&#xf0ab' => '&#xf0ab',
			'&#xf0a8' => '&#xf0a8',
			'&#xf0a9' => '&#xf0a9',
			'&#xf0aa' => '&#xf0aa',
			'&#xf063' => '&#xf063',
			'&#xf060' => '&#xf060',
			'&#xf061' => '&#xf061',
			'&#xf062' => '&#xf062',
			'&#xf0b2' => '&#xf0b2',
			'&#xf337' => '&#xf337',
			'&#xf338' => '&#xf338',
			'&#xf2a2' => '&#xf2a2',
			'&#xf069' => '&#xf069',
			'&#xf1fa' => '&#xf1fa',
			'&#xf558' => '&#xf558',
			'&#xf5d2' => '&#xf5d2',
			'&#xf29e' => '&#xf29e',
			'&#xf559' => '&#xf559',
			'&#xf77c' => '&#xf77c',
			'&#xf77d' => '&#xf77d',
			'&#xf55a' => '&#xf55a',
			'&#xf04a' => '&#xf04a',
			'&#xf7e5' => '&#xf7e5',
			'&#xf24e' => '&#xf24e',
			'&#xf515' => '&#xf515',
			'&#xf516' => '&#xf516',
			'&#xf05e' => '&#xf05e',
			'&#xf462' => '&#xf462',
			'&#xf02a' => '&#xf02a',
			'&#xf0c9' => '&#xf0c9',
			'&#xf433' => '&#xf433',
			'&#xf434' => '&#xf434',
			'&#xf2cd' => '&#xf2cd',
			'&#xf244' => '&#xf244',
			'&#xf240' => '&#xf240',
			'&#xf242' => '&#xf242',
			'&#xf243' => '&#xf243',
			'&#xf241' => '&#xf241',
			'&#xf236' => '&#xf236',
			'&#xf0fc' => '&#xf0fc',
			'&#xf0f3' => '&#xf0f3',
			'&#xf1f6' => '&#xf1f6',
			'&#xf55b' => '&#xf55b',
			'&#xf647' => '&#xf647',
			'&#xf206' => '&#xf206',
			'&#xf84a' => '&#xf84a',
			'&#xf1e5' => '&#xf1e5',
			'&#xf780' => '&#xf780',
			'&#xf1fd' => '&#xf1fd',
			'&#xf517' => '&#xf517',
			'&#xf6b6' => '&#xf6b6',
			'&#xf29d' => '&#xf29d',
			'&#xf781' => '&#xf781',
			'&#xf032' => '&#xf032',
			'&#xf0e7' => '&#xf0e7',
			'&#xf1e2' => '&#xf1e2',
			'&#xf5d7' => '&#xf5d7',
			'&#xf55c' => '&#xf55c',
			'&#xf02d' => '&#xf02d',
			'&#xf6b7' => '&#xf6b7',
			'&#xf7e6' => '&#xf7e6',
			'&#xf518' => '&#xf518',
			'&#xf5da' => '&#xf5da',
			'&#xf02e' => '&#xf02e',
			'&#xf84c' => '&#xf84c',
			'&#xf850' => '&#xf850',
			'&#xf853' => '&#xf853',
			'&#xf436' => '&#xf436',
			'&#xf466' => '&#xf466',
			'&#xf49e' => '&#xf49e',
			'&#xf468' => '&#xf468',
			'&#xf2a1' => '&#xf2a1',
			'&#xf5dc' => '&#xf5dc',
			'&#xf7ec' => '&#xf7ec',
			'&#xf0b1' => '&#xf0b1',
			'&#xf469' => '&#xf469',
			'&#xf519' => '&#xf519',
			'&#xf51a' => '&#xf51a',
			'&#xf55d' => '&#xf55d',
			'&#xf188' => '&#xf188',
			'&#xf1ad' => '&#xf1ad',
			'&#xf0a1' => '&#xf0a1',
			'&#xf140' => '&#xf140',
			'&#xf46a' => '&#xf46a',
			'&#xf207' => '&#xf207',
			'&#xf55e' => '&#xf55e',
			'&#xf64a' => '&#xf64a',
			'&#xf1ec' => '&#xf1ec',
			'&#xf133' => '&#xf133',
			'&#xf073' => '&#xf073',
			'&#xf274' => '&#xf274',
			'&#xf783' => '&#xf783',
			'&#xf272' => '&#xf272',
			'&#xf271' => '&#xf271',
			'&#xf273' => '&#xf273',
			'&#xf784' => '&#xf784',
			'&#xf030' => '&#xf030',
			'&#xf083' => '&#xf083',
			'&#xf6bb' => '&#xf6bb',
			'&#xf786' => '&#xf786',
			'&#xf55f' => '&#xf55f',
			'&#xf46b' => '&#xf46b',
			'&#xf1b9' => '&#xf1b9',
			'&#xf5de' => '&#xf5de',
			'&#xf5df' => '&#xf5df',
			'&#xf5e1' => '&#xf5e1',
			'&#xf5e4' => '&#xf5e4',
			'&#xf0d7' => '&#xf0d7',
			'&#xf0d9' => '&#xf0d9',
			'&#xf0da' => '&#xf0da',
			'&#xf150' => '&#xf150',
			'&#xf191' => '&#xf191',
			'&#xf152' => '&#xf152',
			'&#xf151' => '&#xf151',
			'&#xf0d8' => '&#xf0d8',
			'&#xf787' => '&#xf787',
			'&#xf218' => '&#xf218',
			'&#xf217' => '&#xf217',
			'&#xf788' => '&#xf788',
			'&#xf6be' => '&#xf6be',
			'&#xf0a3' => '&#xf0a3',
			'&#xf6c0' => '&#xf6c0',
			'&#xf51b' => '&#xf51b',
			'&#xf51c' => '&#xf51c',
			'&#xf5e7' => '&#xf5e7',
			'&#xf1fe' => '&#xf1fe',
			'&#xf080' => '&#xf080',
			'&#xf201' => '&#xf201',
			'&#xf200' => '&#xf200',
			'&#xf00c' => '&#xf00c',
			'&#xf058' => '&#xf058',
			'&#xf560' => '&#xf560',
			'&#xf14a' => '&#xf14a',
			'&#xf7ef' => '&#xf7ef',
			'&#xf439' => '&#xf439',
			'&#xf43a' => '&#xf43a',
			'&#xf43c' => '&#xf43c',
			'&#xf43f' => '&#xf43f',
			'&#xf441' => '&#xf441',
			'&#xf443' => '&#xf443',
			'&#xf445' => '&#xf445',
			'&#xf447' => '&#xf447',
			'&#xf13a' => '&#xf13a',
			'&#xf137' => '&#xf137',
			'&#xf138' => '&#xf138',
			'&#xf139' => '&#xf139',
			'&#xf078' => '&#xf078',
			'&#xf053' => '&#xf053',
			'&#xf054' => '&#xf054',
			'&#xf077' => '&#xf077',
			'&#xf1ae' => '&#xf1ae',
			'&#xf51d' => '&#xf51d',
			'&#xf111' => '&#xf111',
			'&#xf1ce' => '&#xf1ce',
			'&#xf64f' => '&#xf64f',
			'&#xf7f2' => '&#xf7f2',
			'&#xf328' => '&#xf328',
			'&#xf46c' => '&#xf46c',
			'&#xf46d' => '&#xf46d',
			'&#xf017' => '&#xf017',
			'&#xf24d' => '&#xf24d',
			'&#xf20a' => '&#xf20a',
			'&#xf0c2' => '&#xf0c2',
			'&#xf381' => '&#xf381',
			'&#xf73b' => '&#xf73b',
			'&#xf6c3' => '&#xf6c3',
			'&#xf73c' => '&#xf73c',
			'&#xf73d' => '&#xf73d',
			'&#xf740' => '&#xf740',
			'&#xf6c4' => '&#xf6c4',
			'&#xf743' => '&#xf743',
			'&#xf382' => '&#xf382',
			'&#xf561' => '&#xf561',
			'&#xf121' => '&#xf121',
			'&#xf126' => '&#xf126',
			'&#xf0f4' => '&#xf0f4',
			'&#xf013' => '&#xf013',
			'&#xf085' => '&#xf085',
			'&#xf51e' => '&#xf51e',
			'&#xf0db' => '&#xf0db',
			'&#xf075' => '&#xf075',
			'&#xf27a' => '&#xf27a',
			'&#xf651' => '&#xf651',
			'&#xf4ad' => '&#xf4ad',
			'&#xf7f5' => '&#xf7f5',
			'&#xf4b3' => '&#xf4b3',
			'&#xf086' => '&#xf086',
			'&#xf653' => '&#xf653',
			'&#xf51f' => '&#xf51f',
			'&#xf14e' => '&#xf14e',
			'&#xf066' => '&#xf066',
			'&#xf78c' => '&#xf78c',
			'&#xf562' => '&#xf562',
			'&#xf563' => '&#xf563',
			'&#xf564' => '&#xf564',
			'&#xf0c5' => '&#xf0c5',
			'&#xf1f9' => '&#xf1f9',
			'&#xf4b8' => '&#xf4b8',
			'&#xf09d' => '&#xf09d',
			'&#xf125' => '&#xf125',
			'&#xf565' => '&#xf565',
			'&#xf654' => '&#xf654',
			'&#xf05b' => '&#xf05b',
			'&#xf520' => '&#xf520',
			'&#xf521' => '&#xf521',
			'&#xf7f7' => '&#xf7f7',
			'&#xf1b2' => '&#xf1b2',
			'&#xf1b3' => '&#xf1b3',
			'&#xf0c4' => '&#xf0c4',
			'&#xf1c0' => '&#xf1c0',
			'&#xf2a4' => '&#xf2a4',
			'&#xf747' => '&#xf747',
			'&#xf108' => '&#xf108',
			'&#xf655' => '&#xf655',
			'&#xf470' => '&#xf470',
			'&#xf522' => '&#xf522',
			'&#xf6cf' => '&#xf6cf',
			'&#xf6d1' => '&#xf6d1',
			'&#xf523' => '&#xf523',
			'&#xf524' => '&#xf524',
			'&#xf525' => '&#xf525',
			'&#xf526' => '&#xf526',
			'&#xf527' => '&#xf527',
			'&#xf528' => '&#xf528',
			'&#xf566' => '&#xf566',
			'&#xf5eb' => '&#xf5eb',
			'&#xf529' => '&#xf529',
			'&#xf567' => '&#xf567',
			'&#xf471' => '&#xf471',
			'&#xf6d3' => '&#xf6d3',
			'&#xf155' => '&#xf155',
			'&#xf472' => '&#xf472',
			'&#xf474' => '&#xf474',
			'&#xf4b9' => '&#xf4b9',
			'&#xf52a' => '&#xf52a',
			'&#xf52b' => '&#xf52b',
			'&#xf192' => '&#xf192',
			'&#xf4ba' => '&#xf4ba',
			'&#xf019' => '&#xf019',
			'&#xf568' => '&#xf568',
			'&#xf6d5' => '&#xf6d5',
			'&#xf5ee' => '&#xf5ee',
			'&#xf569' => '&#xf569',
			'&#xf56a' => '&#xf56a',
			'&#xf6d7' => '&#xf6d7',
			'&#xf44b' => '&#xf44b',
			'&#xf793' => '&#xf793',
			'&#xf794' => '&#xf794',
			'&#xf6d9' => '&#xf6d9',
			'&#xf044' => '&#xf044',
			'&#xf7fb' => '&#xf7fb',
			'&#xf052' => '&#xf052',
			'&#xf141' => '&#xf141',
			'&#xf142' => '&#xf142',
			'&#xf0e0' => '&#xf0e0',
			'&#xf2b6' => '&#xf2b6',
			'&#xf658' => '&#xf658',
			'&#xf199' => '&#xf199',
			'&#xf52c' => '&#xf52c',
			'&#xf12d' => '&#xf12d',
			'&#xf796' => '&#xf796',
			'&#xf153' => '&#xf153',
			'&#xf362' => '&#xf362',
			'&#xf12a' => '&#xf12a',
			'&#xf06a' => '&#xf06a',
			'&#xf071' => '&#xf071',
			'&#xf065' => '&#xf065',
			'&#xf31e' => '&#xf31e',
			'&#xf35d' => '&#xf35d',
			'&#xf360' => '&#xf360',
			'&#xf06e' => '&#xf06e',
			'&#xf1fb' => '&#xf1fb',
			'&#xf070' => '&#xf070',
			'&#xf863' => '&#xf863',
			'&#xf049' => '&#xf049',
			'&#xf050' => '&#xf050',
			'&#xf1ac' => '&#xf1ac',
			'&#xf52d' => '&#xf52d',
			'&#xf56b' => '&#xf56b',
			'&#xf182' => '&#xf182',
			'&#xf0fb' => '&#xf0fb',
			'&#xf15b' => '&#xf15b',
			'&#xf15c' => '&#xf15c',
			'&#xf1c6' => '&#xf1c6',
			'&#xf1c7' => '&#xf1c7',
			'&#xf1c9' => '&#xf1c9',
			'&#xf56c' => '&#xf56c',
			'&#xf6dd' => '&#xf6dd',
			'&#xf56d' => '&#xf56d',
			'&#xf1c3' => '&#xf1c3',
			'&#xf56e' => '&#xf56e',
			'&#xf1c5' => '&#xf1c5',
			'&#xf56f' => '&#xf56f',
			'&#xf570' => '&#xf570',
			'&#xf571' => '&#xf571',
			'&#xf477' => '&#xf477',
			'&#xf478' => '&#xf478',
			'&#xf1c1' => '&#xf1c1',
			'&#xf1c4' => '&#xf1c4',
			'&#xf572' => '&#xf572',
			'&#xf573' => '&#xf573',
			'&#xf574' => '&#xf574',
			'&#xf1c8' => '&#xf1c8',
			'&#xf1c2' => '&#xf1c2',
			'&#xf575' => '&#xf575',
			'&#xf576' => '&#xf576',
			'&#xf008' => '&#xf008',
			'&#xf0b0' => '&#xf0b0',
			'&#xf577' => '&#xf577',
			'&#xf06d' => '&#xf06d',
			'&#xf7e4' => '&#xf7e4',
			'&#xf134' => '&#xf134',
			'&#xf479' => '&#xf479',
			'&#xf578' => '&#xf578',
			'&#xf6de' => '&#xf6de',
			'&#xf024' => '&#xf024',
			'&#xf11e' => '&#xf11e',
			'&#xf74d' => '&#xf74d',
			'&#xf0c3' => '&#xf0c3',
			'&#xf579' => '&#xf579',
			'&#xf07b' => '&#xf07b',
			'&#xf65d' => '&#xf65d',
			'&#xf07c' => '&#xf07c',
			'&#xf65e' => '&#xf65e',
			'&#xf031' => '&#xf031',
			'&#xf44e' => '&#xf44e',
			'&#xf04e' => '&#xf04e',
			'&#xf52e' => '&#xf52e',
			'&#xf119' => '&#xf119',
			'&#xf57a' => '&#xf57a',
			'&#xf662' => '&#xf662',
			'&#xf1e3' => '&#xf1e3',
			'&#xf11b' => '&#xf11b',
			'&#xf52f' => '&#xf52f',
			'&#xf0e3' => '&#xf0e3',
			'&#xf3a5' => '&#xf3a5',
			'&#xf22d' => '&#xf22d',
			'&#xf6e2' => '&#xf6e2',
			'&#xf06b' => '&#xf06b',
			'&#xf79c' => '&#xf79c',
			'&#xf79f' => '&#xf79f',
			'&#xf000' => '&#xf000',
			'&#xf57b' => '&#xf57b',
			'&#xf7a0' => '&#xf7a0',
			'&#xf530' => '&#xf530',
			'&#xf0ac' => '&#xf0ac',
			'&#xf57c' => '&#xf57c',
			'&#xf57d' => '&#xf57d',
			'&#xf57e' => '&#xf57e',
			'&#xf7a2' => '&#xf7a2',
			'&#xf450' => '&#xf450',
			'&#xf664' => '&#xf664',
			'&#xf19d' => '&#xf19d',
			'&#xf531' => '&#xf531',
			'&#xf532' => '&#xf532',
			'&#xf57f' => '&#xf57f',
			'&#xf580' => '&#xf580',
			'&#xf581' => '&#xf581',
			'&#xf582' => '&#xf582',
			'&#xf583' => '&#xf583',
			'&#xf584' => '&#xf584',
			'&#xf585' => '&#xf585',
			'&#xf586' => '&#xf586',
			'&#xf587' => '&#xf587',
			'&#xf588' => '&#xf588',
			'&#xf589' => '&#xf589',
			'&#xf58a' => '&#xf58a',
			'&#xf58b' => '&#xf58b',
			'&#xf58c' => '&#xf58c',
			'&#xf58d' => '&#xf58d',
			'&#xf7a4' => '&#xf7a4',
			'&#xf7a5' => '&#xf7a5',
			'&#xf58e' => '&#xf58e',
			'&#xf7a6' => '&#xf7a6',
			'&#xf0fd' => '&#xf0fd',
			'&#xf805' => '&#xf805',
			'&#xf6e3' => '&#xf6e3',
			'&#xf665' => '&#xf665',
			'&#xf4bd' => '&#xf4bd',
			'&#xf4be' => '&#xf4be',
			'&#xf4c0' => '&#xf4c0',
			'&#xf258' => '&#xf258',
			'&#xf806' => '&#xf806',
			'&#xf256' => '&#xf256',
			'&#xf25b' => '&#xf25b',
			'&#xf0a7' => '&#xf0a7',
			'&#xf0a5' => '&#xf0a5',
			'&#xf0a4' => '&#xf0a4',
			'&#xf0a6' => '&#xf0a6',
			'&#xf25a' => '&#xf25a',
			'&#xf255' => '&#xf255',
			'&#xf257' => '&#xf257',
			'&#xf259' => '&#xf259',
			'&#xf4c2' => '&#xf4c2',
			'&#xf4c4' => '&#xf4c4',
			'&#xf2b5' => '&#xf2b5',
			'&#xf6e6' => '&#xf6e6',
			'&#xf807' => '&#xf807',
			'&#xf292' => '&#xf292',
			'&#xf6e8' => '&#xf6e8',
			'&#xf666' => '&#xf666',
			'&#xf0a0' => '&#xf0a0',
			'&#xf1dc' => '&#xf1dc',
			'&#xf025' => '&#xf025',
			'&#xf58f' => '&#xf58f',
			'&#xf590' => '&#xf590',
			'&#xf004' => '&#xf004',
			'&#xf7a9' => '&#xf7a9',
			'&#xf21e' => '&#xf21e',
			'&#xf533' => '&#xf533',
			'&#xf591' => '&#xf591',
			'&#xf6ec' => '&#xf6ec',
			'&#xf6ed' => '&#xf6ed',
			'&#xf1da' => '&#xf1da',
			'&#xf453' => '&#xf453',
			'&#xf7aa' => '&#xf7aa',
			'&#xf015' => '&#xf015',
			'&#xf6f0' => '&#xf6f0',
			'&#xf7ab' => '&#xf7ab',
			'&#xf0f8' => '&#xf0f8',
			'&#xf47d' => '&#xf47d',
			'&#xf47e' => '&#xf47e',
			'&#xf593' => '&#xf593',
			'&#xf80f' => '&#xf80f',
			'&#xf594' => '&#xf594',
			'&#xf254' => '&#xf254',
			'&#xf253' => '&#xf253',
			'&#xf252' => '&#xf252',
			'&#xf251' => '&#xf251',
			'&#xf6f1' => '&#xf6f1',
			'&#xf6f2' => '&#xf6f2',
			'&#xf246' => '&#xf246',
			'&#xf810' => '&#xf810',
			'&#xf7ad' => '&#xf7ad',
			'&#xf86d' => '&#xf86d',
			'&#xf2c1' => '&#xf2c1',
			'&#xf2c2' => '&#xf2c2',
			'&#xf47f' => '&#xf47f',
			'&#xf7ae' => '&#xf7ae',
			'&#xf03e' => '&#xf03e',
			'&#xf302' => '&#xf302',
			'&#xf01c' => '&#xf01c',
			'&#xf03c' => '&#xf03c',
			'&#xf275' => '&#xf275',
			'&#xf534' => '&#xf534',
			'&#xf129' => '&#xf129',
			'&#xf05a' => '&#xf05a',
			'&#xf033' => '&#xf033',
			'&#xf669' => '&#xf669',
			'&#xf595' => '&#xf595',
			'&#xf66a' => '&#xf66a',
			'&#xf66b' => '&#xf66b',
			'&#xf084' => '&#xf084',
			'&#xf11c' => '&#xf11c',
			'&#xf66d' => '&#xf66d',
			'&#xf596' => '&#xf596',
			'&#xf597' => '&#xf597',
			'&#xf598' => '&#xf598',
			'&#xf535' => '&#xf535',
			'&#xf66f' => '&#xf66f',
			'&#xf1ab' => '&#xf1ab',
			'&#xf109' => '&#xf109',
			'&#xf5fc' => '&#xf5fc',
			'&#xf812' => '&#xf812',
			'&#xf599' => '&#xf599',
			'&#xf59a' => '&#xf59a',
			'&#xf59b' => '&#xf59b',
			'&#xf59c' => '&#xf59c',
			'&#xf5fd' => '&#xf5fd',
			'&#xf06c' => '&#xf06c',
			'&#xf094' => '&#xf094',
			'&#xf536' => '&#xf536',
			'&#xf537' => '&#xf537',
			'&#xf3be' => '&#xf3be',
			'&#xf3bf' => '&#xf3bf',
			'&#xf1cd' => '&#xf1cd',
			'&#xf0eb' => '&#xf0eb',
			'&#xf0c1' => '&#xf0c1',
			'&#xf195' => '&#xf195',
			'&#xf03a' => '&#xf03a',
			'&#xf022' => '&#xf022',
			'&#xf0cb' => '&#xf0cb',
			'&#xf0ca' => '&#xf0ca',
			'&#xf124' => '&#xf124',
			'&#xf023' => '&#xf023',
			'&#xf3c1' => '&#xf3c1',
			'&#xf309' => '&#xf309',
			'&#xf30a' => '&#xf30a',
			'&#xf30b' => '&#xf30b',
			'&#xf30c' => '&#xf30c',
			'&#xf2a8' => '&#xf2a8',
			'&#xf59d' => '&#xf59d',
			'&#xf0d0' => '&#xf0d0',
			'&#xf076' => '&#xf076',
			'&#xf674' => '&#xf674',
			'&#xf183' => '&#xf183',
			'&#xf279' => '&#xf279',
			'&#xf59f' => '&#xf59f',
			'&#xf5a0' => '&#xf5a0',
			'&#xf041' => '&#xf041',
			'&#xf3c5' => '&#xf3c5',
			'&#xf276' => '&#xf276',
			'&#xf277' => '&#xf277',
			'&#xf5a1' => '&#xf5a1',
			'&#xf222' => '&#xf222',
			'&#xf227' => '&#xf227',
			'&#xf229' => '&#xf229',
			'&#xf22b' => '&#xf22b',
			'&#xf22a' => '&#xf22a',
			'&#xf6fa' => '&#xf6fa',
			'&#xf5a2' => '&#xf5a2',
			'&#xf0fa' => '&#xf0fa',
			'&#xf11a' => '&#xf11a',
			'&#xf5a4' => '&#xf5a4',
			'&#xf5a5' => '&#xf5a5',
			'&#xf538' => '&#xf538',
			'&#xf676' => '&#xf676',
			'&#xf223' => '&#xf223',
			'&#xf753' => '&#xf753',
			'&#xf2db' => '&#xf2db',
			'&#xf130' => '&#xf130',
			'&#xf3c9' => '&#xf3c9',
			'&#xf539' => '&#xf539',
			'&#xf131' => '&#xf131',
			'&#xf610' => '&#xf610',
			'&#xf068' => '&#xf068',
			'&#xf056' => '&#xf056',
			'&#xf146' => '&#xf146',
			'&#xf7b5' => '&#xf7b5',
			'&#xf10b' => '&#xf10b',
			'&#xf3cd' => '&#xf3cd',
			'&#xf0d6' => '&#xf0d6',
			'&#xf3d1' => '&#xf3d1',
			'&#xf53a' => '&#xf53a',
			'&#xf53b' => '&#xf53b',
			'&#xf53c' => '&#xf53c',
			'&#xf53d' => '&#xf53d',
			'&#xf5a6' => '&#xf5a6',
			'&#xf186' => '&#xf186',
			'&#xf5a7' => '&#xf5a7',
			'&#xf678' => '&#xf678',
			'&#xf21c' => '&#xf21c',
			'&#xf6fc' => '&#xf6fc',
			'&#xf245' => '&#xf245',
			'&#xf7b6' => '&#xf7b6',
			'&#xf001' => '&#xf001',
			'&#xf6ff' => '&#xf6ff',
			'&#xf22c' => '&#xf22c',
			'&#xf1ea' => '&#xf1ea',
			'&#xf53e' => '&#xf53e',
			'&#xf481' => '&#xf481',
			'&#xf247' => '&#xf247',
			'&#xf248' => '&#xf248',
			'&#xf613' => '&#xf613',
			'&#xf679' => '&#xf679',
			'&#xf700' => '&#xf700',
			'&#xf03b' => '&#xf03b',
			'&#xf815' => '&#xf815',
			'&#xf1fc' => '&#xf1fc',
			'&#xf5aa' => '&#xf5aa',
			'&#xf53f' => '&#xf53f',
			'&#xf482' => '&#xf482',
			'&#xf1d8' => '&#xf1d8',
			'&#xf0c6' => '&#xf0c6',
			'&#xf4cd' => '&#xf4cd',
			'&#xf1dd' => '&#xf1dd',
			'&#xf540' => '&#xf540',
			'&#xf5ab' => '&#xf5ab',
			'&#xf67b' => '&#xf67b',
			'&#xf0ea' => '&#xf0ea',
			'&#xf04c' => '&#xf04c',
			'&#xf28b' => '&#xf28b',
			'&#xf1b0' => '&#xf1b0',
			'&#xf67c' => '&#xf67c',
			'&#xf304' => '&#xf304',
			'&#xf305' => '&#xf305',
			'&#xf5ac' => '&#xf5ac',
			'&#xf5ad' => '&#xf5ad',
			'&#xf14b' => '&#xf14b',
			'&#xf303' => '&#xf303',
			'&#xf5ae' => '&#xf5ae',
			'&#xf4ce' => '&#xf4ce',
			'&#xf816' => '&#xf816',
			'&#xf295' => '&#xf295',
			'&#xf541' => '&#xf541',
			'&#xf756' => '&#xf756',
			'&#xf095' => '&#xf095',
			'&#xf879' => '&#xf879',
			'&#xf3dd' => '&#xf3dd',
			'&#xf098' => '&#xf098',
			'&#xf87b' => '&#xf87b',
			'&#xf2a0' => '&#xf2a0',
			'&#xf87c' => '&#xf87c',
			'&#xf4d3' => '&#xf4d3',
			'&#xf484' => '&#xf484',
			'&#xf818' => '&#xf818',
			'&#xf67f' => '&#xf67f',
			'&#xf072' => '&#xf072',
			'&#xf5af' => '&#xf5af',
			'&#xf5b0' => '&#xf5b0',
			'&#xf04b' => '&#xf04b',
			'&#xf144' => '&#xf144',
			'&#xf1e6' => '&#xf1e6',
			'&#xf067' => '&#xf067',
			'&#xf055' => '&#xf055',
			'&#xf0fe' => '&#xf0fe',
			'&#xf2ce' => '&#xf2ce',
			'&#xf681' => '&#xf681',
			'&#xf682' => '&#xf682',
			'&#xf2fe' => '&#xf2fe',
			'&#xf75a' => '&#xf75a',
			'&#xf619' => '&#xf619',
			'&#xf3e0' => '&#xf3e0',
			'&#xf154' => '&#xf154',
			'&#xf011' => '&#xf011',
			'&#xf683' => '&#xf683',
			'&#xf684' => '&#xf684',
			'&#xf5b1' => '&#xf5b1',
			'&#xf485' => '&#xf485',
			'&#xf486' => '&#xf486',
			'&#xf02f' => '&#xf02f',
			'&#xf487' => '&#xf487',
			'&#xf542' => '&#xf542',
			'&#xf12e' => '&#xf12e',
			'&#xf029' => '&#xf029',
			'&#xf128' => '&#xf128',
			'&#xf059' => '&#xf059',
			'&#xf458' => '&#xf458',
			'&#xf10d' => '&#xf10d',
			'&#xf10e' => '&#xf10e',
			'&#xf687' => '&#xf687',
			'&#xf7b9' => '&#xf7b9',
			'&#xf7ba' => '&#xf7ba',
			'&#xf75b' => '&#xf75b',
			'&#xf074' => '&#xf074',
			'&#xf543' => '&#xf543',
			'&#xf1b8' => '&#xf1b8',
			'&#xf01e' => '&#xf01e',
			'&#xf2f9' => '&#xf2f9',
			'&#xf25d' => '&#xf25d',
			'&#xf87d' => '&#xf87d',
			'&#xf3e5' => '&#xf3e5',
			'&#xf122' => '&#xf122',
			'&#xf75e' => '&#xf75e',
			'&#xf7bd' => '&#xf7bd',
			'&#xf079' => '&#xf079',
			'&#xf4d6' => '&#xf4d6',
			'&#xf70b' => '&#xf70b',
			'&#xf018' => '&#xf018',
			'&#xf544' => '&#xf544',
			'&#xf135' => '&#xf135',
			'&#xf4d7' => '&#xf4d7',
			'&#xf09e' => '&#xf09e',
			'&#xf143' => '&#xf143',
			'&#xf158' => '&#xf158',
			'&#xf545' => '&#xf545',
			'&#xf546' => '&#xf546',
			'&#xf547' => '&#xf547',
			'&#xf548' => '&#xf548',
			'&#xf70c' => '&#xf70c',
			'&#xf156' => '&#xf156',
			'&#xf5b3' => '&#xf5b3',
			'&#xf5b4' => '&#xf5b4',
			'&#xf7bf' => '&#xf7bf',
			'&#xf7c0' => '&#xf7c0',
			'&#xf0c7' => '&#xf0c7',
			'&#xf549' => '&#xf549',
			'&#xf54a' => '&#xf54a',
			'&#xf70e' => '&#xf70e',
			'&#xf7c2' => '&#xf7c2',
			'&#xf002' => '&#xf002',
			'&#xf688' => '&#xf688',
			'&#xf689' => '&#xf689',
			'&#xf010' => '&#xf010',
			'&#xf00e' => '&#xf00e',
			'&#xf4d8' => '&#xf4d8',
			'&#xf233' => '&#xf233',
			'&#xf61f' => '&#xf61f',
			'&#xf064' => '&#xf064',
			'&#xf1e0' => '&#xf1e0',
			'&#xf1e1' => '&#xf1e1',
			'&#xf14d' => '&#xf14d',
			'&#xf20b' => '&#xf20b',
			'&#xf3ed' => '&#xf3ed',
			'&#xf21a' => '&#xf21a',
			'&#xf48b' => '&#xf48b',
			'&#xf54b' => '&#xf54b',
			'&#xf290' => '&#xf290',
			'&#xf291' => '&#xf291',
			'&#xf07a' => '&#xf07a',
			'&#xf2cc' => '&#xf2cc',
			'&#xf5b6' => '&#xf5b6',
			'&#xf4d9' => '&#xf4d9',
			'&#xf2f6' => '&#xf2f6',
			'&#xf2a7' => '&#xf2a7',
			'&#xf2f5' => '&#xf2f5',
			'&#xf012' => '&#xf012',
			'&#xf5b7' => '&#xf5b7',
			'&#xf7c4' => '&#xf7c4',
			'&#xf0e8' => '&#xf0e8',
			'&#xf7c5' => '&#xf7c5',
			'&#xf7c9' => '&#xf7c9',
			'&#xf7ca' => '&#xf7ca',
			'&#xf54c' => '&#xf54c',
			'&#xf714' => '&#xf714',
			'&#xf715' => '&#xf715',
			'&#xf7cc' => '&#xf7cc',
			'&#xf1de' => '&#xf1de',
			'&#xf118' => '&#xf118',
			'&#xf5b8' => '&#xf5b8',
			'&#xf4da' => '&#xf4da',
			'&#xf75f' => '&#xf75f',
			'&#xf48d' => '&#xf48d',
			'&#xf54d' => '&#xf54d',
			'&#xf7cd' => '&#xf7cd',
			'&#xf7ce' => '&#xf7ce',
			'&#xf2dc' => '&#xf2dc',
			'&#xf7d0' => '&#xf7d0',
			'&#xf7d2' => '&#xf7d2',
			'&#xf696' => '&#xf696',
			'&#xf5ba' => '&#xf5ba',
			'&#xf0dc' => '&#xf0dc',
			'&#xf15d' => '&#xf15d',
			'&#xf881' => '&#xf881',
			'&#xf15e' => '&#xf15e',
			'&#xf882' => '&#xf882',
			'&#xf160' => '&#xf160',
			'&#xf884' => '&#xf884',
			'&#xf161' => '&#xf161',
			'&#xf885' => '&#xf885',
			'&#xf0dd' => '&#xf0dd',
			'&#xf162' => '&#xf162',
			'&#xf886' => '&#xf886',
			'&#xf163' => '&#xf163',
			'&#xf887' => '&#xf887',
			'&#xf0de' => '&#xf0de',
			'&#xf5bb' => '&#xf5bb',
			'&#xf197' => '&#xf197',
			'&#xf891' => '&#xf891',
			'&#xf717' => '&#xf717',
			'&#xf110' => '&#xf110',
			'&#xf5bc' => '&#xf5bc',
			'&#xf5bd' => '&#xf5bd',
			'&#xf0c8' => '&#xf0c8',
			'&#xf45c' => '&#xf45c',
			'&#xf698' => '&#xf698',
			'&#xf5bf' => '&#xf5bf',
			'&#xf005' => '&#xf005',
			'&#xf699' => '&#xf699',
			'&#xf089' => '&#xf089',
			'&#xf5c0' => '&#xf5c0',
			'&#xf69a' => '&#xf69a',
			'&#xf621' => '&#xf621',
			'&#xf048' => '&#xf048',
			'&#xf051' => '&#xf051',
			'&#xf0f1' => '&#xf0f1',
			'&#xf249' => '&#xf249',
			'&#xf04d' => '&#xf04d',
			'&#xf28d' => '&#xf28d',
			'&#xf2f2' => '&#xf2f2',
			'&#xf54e' => '&#xf54e',
			'&#xf54f' => '&#xf54f',
			'&#xf550' => '&#xf550',
			'&#xf21d' => '&#xf21d',
			'&#xf0cc' => '&#xf0cc',
			'&#xf551' => '&#xf551',
			'&#xf12c' => '&#xf12c',
			'&#xf239' => '&#xf239',
			'&#xf0f2' => '&#xf0f2',
			'&#xf5c1' => '&#xf5c1',
			'&#xf185' => '&#xf185',
			'&#xf12b' => '&#xf12b',
			'&#xf5c2' => '&#xf5c2',
			'&#xf5c3' => '&#xf5c3',
			'&#xf5c4' => '&#xf5c4',
			'&#xf5c5' => '&#xf5c5',
			'&#xf69b' => '&#xf69b',
			'&#xf021' => '&#xf021',
			'&#xf2f1' => '&#xf2f1',
			'&#xf48e' => '&#xf48e',
			'&#xf0ce' => '&#xf0ce',
			'&#xf45d' => '&#xf45d',
			'&#xf10a' => '&#xf10a',
			'&#xf3fa' => '&#xf3fa',
			'&#xf490' => '&#xf490',
			'&#xf3fd' => '&#xf3fd',
			'&#xf02b' => '&#xf02b',
			'&#xf02c' => '&#xf02c',
			'&#xf4db' => '&#xf4db',
			'&#xf0ae' => '&#xf0ae',
			'&#xf1ba' => '&#xf1ba',
			'&#xf62e' => '&#xf62e',
			'&#xf62f' => '&#xf62f',
			'&#xf769' => '&#xf769',
			'&#xf76b' => '&#xf76b',
			'&#xf7d7' => '&#xf7d7',
			'&#xf120' => '&#xf120',
			'&#xf034' => '&#xf034',
			'&#xf035' => '&#xf035',
			'&#xf00a' => '&#xf00a',
			'&#xf009' => '&#xf009',
			'&#xf00b' => '&#xf00b',
			'&#xf630' => '&#xf630',
			'&#xf491' => '&#xf491',
			'&#xf2cb' => '&#xf2cb',
			'&#xf2c7' => '&#xf2c7',
			'&#xf2c9' => '&#xf2c9',
			'&#xf2ca' => '&#xf2ca',
			'&#xf2c8' => '&#xf2c8',
			'&#xf165' => '&#xf165',
			'&#xf164' => '&#xf164',
			'&#xf08d' => '&#xf08d',
			'&#xf3ff' => '&#xf3ff',
			'&#xf00d' => '&#xf00d',
			'&#xf057' => '&#xf057',
			'&#xf043' => '&#xf043',
			'&#xf5c7' => '&#xf5c7',
			'&#xf5c8' => '&#xf5c8',
			'&#xf204' => '&#xf204',
			'&#xf205' => '&#xf205',
			'&#xf7d8' => '&#xf7d8',
			'&#xf71e' => '&#xf71e',
			'&#xf552' => '&#xf552',
			'&#xf7d9' => '&#xf7d9',
			'&#xf5c9' => '&#xf5c9',
			'&#xf6a0' => '&#xf6a0',
			'&#xf6a1' => '&#xf6a1',
			'&#xf722' => '&#xf722',
			'&#xf25c' => '&#xf25c',
			'&#xf637' => '&#xf637',
			'&#xf238' => '&#xf238',
			'&#xf7da' => '&#xf7da',
			'&#xf224' => '&#xf224',
			'&#xf225' => '&#xf225',
			'&#xf1f8' => '&#xf1f8',
			'&#xf2ed' => '&#xf2ed',
			'&#xf829' => '&#xf829',
			'&#xf82a' => '&#xf82a',
			'&#xf1bb' => '&#xf1bb',
			'&#xf091' => '&#xf091',
			'&#xf0d1' => '&#xf0d1',
			'&#xf4de' => '&#xf4de',
			'&#xf63b' => '&#xf63b',
			'&#xf4df' => '&#xf4df',
			'&#xf63c' => '&#xf63c',
			'&#xf553' => '&#xf553',
			'&#xf1e4' => '&#xf1e4',
			'&#xf26c' => '&#xf26c',
			'&#xf0e9' => '&#xf0e9',
			'&#xf5ca' => '&#xf5ca',
			'&#xf0cd' => '&#xf0cd',
			'&#xf0e2' => '&#xf0e2',
			'&#xf2ea' => '&#xf2ea',
			'&#xf29a' => '&#xf29a',
			'&#xf19c' => '&#xf19c',
			'&#xf127' => '&#xf127',
			'&#xf09c' => '&#xf09c',
			'&#xf13e' => '&#xf13e',
			'&#xf093' => '&#xf093',
			'&#xf007' => '&#xf007',
			'&#xf406' => '&#xf406',
			'&#xf4fa' => '&#xf4fa',
			'&#xf4fb' => '&#xf4fb',
			'&#xf4fc' => '&#xf4fc',
			'&#xf2bd' => '&#xf2bd',
			'&#xf4fd' => '&#xf4fd',
			'&#xf4fe' => '&#xf4fe',
			'&#xf4ff' => '&#xf4ff',
			'&#xf500' => '&#xf500',
			'&#xf501' => '&#xf501',
			'&#xf728' => '&#xf728',
			'&#xf502' => '&#xf502',
			'&#xf0f0' => '&#xf0f0',
			'&#xf503' => '&#xf503',
			'&#xf504' => '&#xf504',
			'&#xf82f' => '&#xf82f',
			'&#xf234' => '&#xf234',
			'&#xf21b' => '&#xf21b',
			'&#xf505' => '&#xf505',
			'&#xf506' => '&#xf506',
			'&#xf507' => '&#xf507',
			'&#xf508' => '&#xf508',
			'&#xf235' => '&#xf235',
			'&#xf0c0' => '&#xf0c0',
			'&#xf509' => '&#xf509',
			'&#xf2e5' => '&#xf2e5',
			'&#xf2e7' => '&#xf2e7',
			'&#xf5cb' => '&#xf5cb',
			'&#xf221' => '&#xf221',
			'&#xf226' => '&#xf226',
			'&#xf228' => '&#xf228',
			'&#xf492' => '&#xf492',
			'&#xf493' => '&#xf493',
			'&#xf03d' => '&#xf03d',
			'&#xf4e2' => '&#xf4e2',
			'&#xf6a7' => '&#xf6a7',
			'&#xf897' => '&#xf897',
			'&#xf45f' => '&#xf45f',
			'&#xf027' => '&#xf027',
			'&#xf6a9' => '&#xf6a9',
			'&#xf026' => '&#xf026',
			'&#xf028' => '&#xf028',
			'&#xf772' => '&#xf772',
			'&#xf729' => '&#xf729',
			'&#xf554' => '&#xf554',
			'&#xf555' => '&#xf555',
			'&#xf494' => '&#xf494',
			'&#xf773' => '&#xf773',
			'&#xf83e' => '&#xf83e',
			'&#xf496' => '&#xf496',
			'&#xf5cd' => '&#xf5cd',
			'&#xf193' => '&#xf193',
			'&#xf1eb' => '&#xf1eb',
			'&#xf72e' => '&#xf72e',
			'&#xf410' => '&#xf410',
			'&#xf2d0' => '&#xf2d0',
			'&#xf2d1' => '&#xf2d1',
			'&#xf2d2' => '&#xf2d2',
			'&#xf72f' => '&#xf72f',
			'&#xf4e3' => '&#xf4e3',
			'&#xf5ce' => '&#xf5ce',
			'&#xf159' => '&#xf159',
			'&#xf0ad' => '&#xf0ad',
			'&#xf497' => '&#xf497',
			'&#xf157' => '&#xf157',
			'&#xf6ad' => '&#xf6ad',
		);

		return $data;
	}
}


