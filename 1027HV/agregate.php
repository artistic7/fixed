<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 3, 4, 7',
		'win/qin/qpl/trio($10 )' => '(Q) 1, 3, 4, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 7, 9',
		'place(end-favorites )' => '9',
		'places($10)' => '9',
		'sures($10)' => '9',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 7, 10',
		'place(wp )' => '7',
		'placesWP($30)' => '7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 1, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 8, 9, 10, 11',
		'places($10)' => '11',
		'unions($10)' => '1, 3, 9, 10, 11',
		'union + favorites' => '1, 3, 8, 9, 10, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 7, 9, 10, 11',
		'placesWP($30)' => '10',
		'unions($10)' => '7, 10, 11, 12',
		'union + favorites' => '7, 9, 10, 11, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 2, 4, 5',
		'win/qin/qpl/trio($10 )' => '(Q) 2, 4, 5',
		'place(end-favorites )' => '5',
		'super sure bet' => 'super sure place 5',
		'places($10)' => '5',
		'sures($10)' => '5',
		'super sures($10)' => '5',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 2, 3, 8, 10',
		'win/qin/qpl/trio($10 )' => '(Q) 2, 3, 8, 10',
		'place(end-favorites )' => '10',
		'super sure bet' => 'super sure place 10',
		'places($10)' => '8, 10',
		'sures($10)' => '10',
		'super sures($10)' => '10',
		'place(end-wp 3)' => '8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 3, 4, 9, 10',
		'places($10)' => '9',
		'sures($10)' => '9',
		'super sures($10)' => '9',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '(F) 1, 6',
		'unions($10)' => '1, 3, 6, 7, 10',
		'union + favorites' => '1, 3, 6, 7, 10',
		'win(union 20)' => '1, 3, 6, 7',
		'win(union 45)' => '1, 6, 7, 10',
		'win(union 50)' => '1, 3, 6, 10',
	],
];
