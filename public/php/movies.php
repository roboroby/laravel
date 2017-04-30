<?php

// DataTables PHP library
include( "./DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;

Editor::inst( $db, 'movies' )
	->field(
	  Field::inst( 'movies.title' )->validator( 'Validate::notEmpty' )
          ->validator( 'Validate::maxLen', 50 ),
	  Field::inst( 'movies.length' )
          ->validator( 'Validate::notEmpty', array("message" => "Please enter a movie length"))
          ->validator( 'Validate::minMaxNum', array(
              'min' => 1,
              'max' => 499,
              'message' => 'Please enter a number between 1 and 499'
          ) ),
	  Field::inst( 'movies.year' )
          ->validator( 'Validate::minMaxNum', array(
              'min' => 1801,
              'max' => 2099,
              'message' => 'Please enter a number between 1801 and 2099'
          ) ),
		Field::inst( 'movies.format_id' )
            ->options( Options::inst()
                ->table( 'formats' )
                ->value( 'id' )
                ->label( 'name' )
            ),
		Field::inst( 'formats.name' ),
		Field::inst( 'movies.rating_id' )
            ->options( Options::inst()
                ->table( 'ratings' )
                ->value( 'id' )
                ->label( 'name' )
            ),
    Field::inst( 'ratings.name' )
	)
	->leftJoin( 'formats', 'formats.id', '=', 'movies.format_id' )
	->leftJoin( 'ratings', 'ratings.id',  '=', 'movies.rating_id' )
	->process($_POST)
	->json();