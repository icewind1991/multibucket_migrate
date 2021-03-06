<?php

$CONFIG = [
	'objectstore_multibucket' => [
		'class' => 'OC\Files\ObjectStore\S3',
		'arguments' => [
			'num_buckets' => 64,
			'bucket' => 'nextcloud-',
			'autocreate' => true,
			'key' => 'dummy',
			'secret' => 'dummy',
			'hostname' => 'localhost',
			'port' => 4566,
			'use_ssl' => false,
			'use_path_style' => true,
			'uploadPartSize' => 52428800,
		],
	],
];
