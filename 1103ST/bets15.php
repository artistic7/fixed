<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 5, 8',
			'qin' => '1, 2, 4, 5, 6, 8',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 12',//count trio: 8
			'inter' => '2',
		],
		'win inter' => '1, 2, 3, 5, 8',
		'win inter 2' => '1, 2, 5, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'win/qin/qpl/trio($10 15)' => '(Q) 2, 3',
		],
		'total bets' => 0,
		'wp' => '2, 3',//count wp: 2
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
			'win/qin/qpl/trio($10 15)' => '(Q) 3, 9, 11',
			'place(end-favorites 15)' => '11',
			'place(end-wp 15)' => '11',
			'super sure bet' => 'super sure place 11',
		],
		'total bets' => 300,
		'wp' => '3, 9, 11',//count wp: 3
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '2, 4, 5',
			'qin' => '2, 4, 5, 6, 7, 10',
			'trio' => '1, 2, 4, 5, 6, 7, 10',//count trio: 7
			'inter' => '2, 5',
		],
		'win inter' => '1, 2, 4, 5',
		'win inter 2' => '2, 4, 5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'win/qin/qpl/trio($10 15)' => '(Q) 2, 5',
		],
		'total bets' => 0,
		'wp' => '2, 5',//count wp: 2
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
		'favorites' => '2, 5, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 3, 6, 8, 9, 12',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 12',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 14',//count trio: 12
			'inter' => '2',
		],
		'win inter' => '1, 2, 3, 6, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 5, 10',//count wp: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 10, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '3, 5, 8, 12',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 11, 12',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 11, 12, 14',//count trio: 11
			'inter' => '3',
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
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
		'win inter' => '3, 5, 8',
		'win inter 2' => '3, 5, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 10',//count wp: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',//count trio: 13
			'inter' => '2, 3, 4',
		],
		'win inter' => '1, 2, 4, 5, 6, 8, 9, 12',
		'win inter 2' => '6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'win/qin/qpl/trio($10 15)' => '(Q) 2, 3, 4',
			'place(end-favorites 15)' => '4',
			'place(end-wp 15)' => '4',
			'super sure bet' => 'super sure place 4',
		],
		'total bets' => 300,
		'wp' => '2, 3, 4',//count wp: 3
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 4, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '2, 3, 4, 10, 11',
			'qin' => '1, 2, 3, 4, 5, 9, 10, 11, 13',
			'trio' => '1, 2, 3, 4, 5, 8, 9, 10, 11, 13, 14',//count trio: 11
			'inter' => '4, 10',
		],
		'win inter' => '4, 10, 11',
		'win inter 2' => '11',
		'allValues' => '1, 2, 3, 4, 5, 7, 8, 10, 11, 13, 14',
		'bets' => [
			'win/qin/qpl/trio($10 15)' => '(Q) 1, 4, 10',
			'place(end-favorites 15)' => '10',
			'place(end-wp 15)' => '10',
			'super sure bet' => 'super sure place 10',
		],
		'total bets' => 300,
		'wp' => '1, 4, 10',//count wp: 3
	],
];
//total place end favorites: -300
//total place end wp: -300
//total place wp: 0
//total sure place: -300
//total win: 0
//total: 0
