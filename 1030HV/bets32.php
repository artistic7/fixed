<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 3, 7, 8',
			'qin' => '1, 3, 4, 7, 8, 9',
			'trio' => '1, 3, 4, 5, 7, 8, 9, 10, 12',//count trio: 9
			'inter' => '1, 7',
		],
		'win inter' => '1, 3, 5, 6, 7, 8, 11',
		'win inter 2' => '1, 3, 7, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'win/qin/qpl/trio($10 32)' => '(Q) 1, 7',
		],
		'total bets' => 0,
		'wp' => '1, 7',//count wp: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '10',
			'qin' => '2, 10',
			'trio' => '1, 2, 10',//count trio: 3
			'inter' => '10',
		],
		'win inter' => '4, 5, 10',
		'win inter 2' => '10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 10',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 8, 10, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2',//count wp: 1
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3',//count wp: 1
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '5, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '6, 9',
			'qin' => '6, 9, 12',
			'trio' => '5, 6, 9, 10, 12',//count trio: 5
			'inter' => '6',
		],
		'win inter' => '1, 2, 5, 6, 9, 11',
		'win inter 2' => '6, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'win/qin/qpl/trio($10 32)' => '(Q) 5, 6',
		],
		'total bets' => 0,
		'wp' => '5, 6',//count wp: 2
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '5, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '11',
			'qin' => '6, 11',
			'trio' => '6, 10, 11',//count trio: 3
			'inter' => '11',
		],
		'win inter' => '6, 10, 11',
		'win inter 2' => '11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'place(wp 32)' => '5',
		],
		'total bets' => 300,
		'wp' => '5',//count wp: 1
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '3, 4, 5, 6, 7, 8, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3',//count wp: 1
	],
];
//total place end favorites: 0
//total place end wp: 0
//total place wp: -300
//total sure place: 0
//total win: 0
//total: 0
