<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 8, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3',//count wp: 1
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 4, 5, 6, 8, 9, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 9, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 3, 7, 9, 12',
			'qin' => '1, 2, 3, 5, 7, 8, 9, 12',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 11, 12',//count trio: 10
			'inter' => '3, 9',
		],
		'win inter' => '3, 9, 12',
		'win inter 2' => '9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',
		'bets' => [
			'win/qin/qpl/trio($10 3)' => '(Q) 3, 9, 11',
			'place(end-favorites 3)' => '11',
			'place(end-wp 3)' => '11',
			'super sure bet' => 'super sure place 11',
		],
		'total bets' => 300,
		'wp' => '3, 9, 11',//count wp: 3
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
		'favorites' => '4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 7, 8, 10, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4',//count wp: 1
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 8, 9, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2',//count wp: 1
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '3, 5, 8',
			'qin' => '1, 3, 5, 6, 7, 8, 11',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 11, 14',//count trio: 9
			'inter' => '3',
		],
		'win inter' => '2, 3, 5, 8, 10',
		'win inter 2' => '3, 5, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'win/qin/qpl/trio($10 3)' => '(Q) 3, 10',
		],
		'total bets' => 0,
		'wp' => '3',//count wp: 1
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '3, 5, 10',
			'qin' => '3, 5, 7, 9, 10, 12',
			'trio' => '3, 5, 6, 7, 9, 10, 12',//count trio: 7
			'inter' => '10',
		],
		'win inter' => '3, 5, 8, 10',
		'win inter 2' => '3, 5, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3',//count wp: 1
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '3, 4, 11',
			'qin' => '1, 3, 4, 5, 9, 11',
			'trio' => '1, 3, 4, 5, 8, 9, 10, 11',//count trio: 8
			'inter' => '4',
		],
		'win inter' => '3, 4, 10, 11',
		'win inter 2' => '3, 4, 11',
		'allValues' => '1, 2, 3, 4, 5, 7, 8, 10, 11, 13, 14',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 4',//count wp: 2
	],
];
//total place end favorites: -100
//total place end wp: -100
//total place wp: 0
//total sure place: -100
//total win: 0
//total: 0
