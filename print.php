<?php

// Open Connection To mySQL.
// Replace 'username' and 'password' with appropiate login values for your server.

$mysqlLink = mysql_connect( 'localhost' , 'root' , '' );

// Select mySQL Database.
// Replace 'database' with appropiate database for your server.

mysql_select_db( 'KADRO' , $mysqlLink );

// Select mySQL Table.
// Replace '$table' with appropiate table for your server.

$table = 'personel';

/**
 * Print Table.
 *
 * Print Table consists of selecting the mySQL table, determine if there is data in it, selecting
 * that data, then actually formatting it in an HTML table.
 *
 * If there is no data, then appropiate messages are displayed.
 */

// Check If Query Was A Success.

if( $result = mysql_query('SELECT * FROM ' . $table ) )
{
    // Start Table.

    echo '<table border="1">';

    // Get Number Of Fields In Table.

    $fieldCount = mysql_num_fields( $result );

    // Start First Row.

    echo "<tr>";

    // Loop Through Each Field And Display It In Row.
     
    for( $i = 0; $i < $fieldCount; $i++ ) {
        echo '<td><strong>' . mysql_field_name( $result, $i ) . '</strong></td>';
    }

    // Close First Row.

    echo "</tr>";
    
    // Check If There Is Data In Table.
    
    if( mysql_num_rows( $result ) )
    {
        // Loop Through Each Row And Display It.
        
        while( $row = mysql_fetch_row( $result ) )
        {
            // Start Row.
            
            echo '<tr>';
            
            // Loop Through Each Field For Current Row.
            
            for( $i = 0; $i < $fieldCount; $i++ ) {
                echo '<td>' . $row[$i] . '</td>';
            }
            
            // Close Row.
            
            echo '</tr>';
        }
    }
    
    // No Data In Table.
    
    else {
        echo '<tr><td colspan="' . $fieldCount . '">No rows selected...</td></tr>';
    }
    
    // Close Table.
    
    echo '</table>';
}

// Invalid Query Or Un-Success.

else {
    echo 'Query Error: ' . mysql_error( );
}

// Close mySQL Connection.

mysql_close( $mysqlLink );

?>

