/**
 * Created by wayne on 4/29/17.
 */

var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: "./php/movies.php",
        table: "#example",
        fields: [ {
            label: "Title",
            name:  "movies.title"
        }, {
            label: "Length",
            name:  "movies.length"
        }, {
            label: "Year",
            name:  "movies.year"
        }, {
            label: "Format",
            name:  "movies.format_id",
            type:  "select"
        }, {
            label: "Rating",
            name:  "movies.rating_id",
            type:  "radio"
        }
        ]
    } );

    $('#example').DataTable( {
        pageLength: 20,
        dom: "Bfrtip",
        ajax: "./php/movies.php",
        columns: [
            { data: "movies.title" },
            { data: "movies.length" ,
                render: function ( data, type, row ) {
                    if ( type === 'display' || type === 'filter' ) {
                        mins = data % 60;
                        hours = Math.floor(data / 60);

                        if (hours > 0) {
                            return pluralize('hour', hours, true) + " " + pluralize('minute', mins, true);
                        }
                        else {
                            return pluralize('minute', mins, true);
                        }
                    }
                    else {
                        return data;
                    }

                }
            },
            { data: "movies.year" },
            { data: "formats.name" },
            { data: "ratings.name" }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } );
} );