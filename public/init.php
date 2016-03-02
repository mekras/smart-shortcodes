<?php
/*
 * Тег email
 *
 * [email title="подсказка" classes="классы CSS"]адрес[/email]
 */
add_shortcode(
	'email',
	function ($attrs = [], $content = '') {

		$attrs = shortcode_atts(
			[
				'title' => 'Написать письмо',
				'classes' => ''
			],
			$attrs
		);

		$title = trim($attrs['title']);
		$classes = trim('email ' . $attrs['classes']);
		$email = trim($content);
		return
			'<a class="' . $classes . '" title="' . $title . '" href="mailto:' . $email . '">' .
			$email .
			'</a>';
	}
);

/*
 * Тег icq
 *
 * [icq icon="номер значка" classes="классы CSS"]UIN[/icq]
 */
add_shortcode(
	'icq',
	function ($attrs = [], $content = '') {

		$attrs = shortcode_atts(
			[
				'icon' => '5',
				'classes' => ''
			],
			$attrs
		);

		$icon = (int) $attrs['icon'];
		$classes = trim('icq ' . $attrs['classes']);
		$uin = trim($content);
		return
			'<span class="' . $classes . '">' .
			'<img src="http://web.icq.com/whitepages/online?icq=' . $uin . '&img=' . $icon . '" ' .
			'alt="Статус ICQ пользователя ' . $uin . '" class="icq__icon">' .
			'<span class="icq__uin">' . $uin . '</span>' .
			'</span>';
	}
);

/*
 * Тег skype
 *
 * [skype title="подсказка" classes="классы CSS"]имя[/skype]
 */
add_shortcode(
	'skype',
	function ($attrs = [], $content = '') {

		$attrs = shortcode_atts(
			[
				'classes' => '',
				'title' => 'Позвонить (если ваш браузер поддерживает такую возможность)'
			],
			$attrs
		);

		$classes = trim('skype ' . $attrs['classes']);
		$title = trim($attrs['title']);
		$href = trim($content);
		return
			'<a class="' . $classes . '" href="skype:' . $href .
			'" title="' . $title . '">' . trim($content) . '</a>';
	}
);

/*
 * Тег tel
 *
 * [tel cc="код страны" ndc="код оператора" title="подсказка" classes="классы CSS"]номер[/tel]
 */
add_shortcode(
	'tel',
	function ($attrs = [], $content = '') {

		$attrs = shortcode_atts(
			[
				'classes' => '',
				'title' => 'Позвонить (если ваш браузер поддерживает такую возможность)',
				'cc' => '7',
				'ndc' => null
			],
			$attrs
		);

		$classes = trim('tel ' . $attrs['classes']);
		$title = trim($attrs['title']);
		$cc = $attrs['cc'];
		$ndc = $attrs['ndc'];
		$href = '+' . $cc . $ndc . preg_replace('/\D/', '', $content);
		return
			'<a class="' . $classes . '" href="tel:' . $href . '" title="' . $title . '" ' .
			'itemprop="telephone">' .
			($cc ? '<span class="tel__cc">+' . $cc . '</span> ' : '') .
			($ndc ? '<span class="tel__ndc">(' . $ndc . ')</span> ' : '') .
			'<span class="tel__sn">' . trim($content) . '</span></a>';
	}
);
