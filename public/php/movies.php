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
	  Field::inst( 'movies.title' )->validator( 'Validate::notEmpty' ),
	  /*Field::inst( 'movies.length' )->validator( 'Validate::notEmpty', array("message" => "Please enter a movie length")),*/
	  Field::inst( 'movies.length' )->getFormatter( function ( $val, $data, $opts ) {
            /*
            $mins = $val % 60;
            $hours = floor($val/60);
            if($hours > 0)
            {
                return "$hours hours $mins minutes";
            }
            else
            {
                return "$mins minutes";
            }
            */
            return $val;
        }),
	  Field::inst( 'movies.year' ),
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