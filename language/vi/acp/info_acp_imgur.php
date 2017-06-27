<?php

/**
 * Imgur Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-2.0
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_IMGUR'	=> 'Cài đặt Imgur',
	'ACP_IMGUR_CLIENT_ID' => 'Client ID',
	'ACP_IMGUR_CLIENT_SECRET' => 'Client Secret',
	'ACP_IMGUR_ALBUM'	=> 'Album',
	'ACP_IMGUR_ALBUM_EXPLAIN' => 'Nhập Album ID bạn muốn upload lên. Để trống nếu muốn tất cả ảnh upload lên thư mục mặc định.',
	'ACP_IMGUR_AUTH_EXPLAIN' => 'Click vào link này để xác thực ứng dụng.',
	'ACP_IMGUR_PIN' => 'PIN',
	'ACP_IMGUR_PIN_EXPLAIN' => 'Authorization PIN needed to access to your Imgur account.',
	'ACP_IMGUR_SETTINGS_SAVED' => 'Cài đặt Imgur thành công.'
]);
