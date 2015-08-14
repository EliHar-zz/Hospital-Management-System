<?php
    define('DB_HOST', 'eliasharoun.com');
    define('DB_USER', 'appmo489_root');
    define('DB_PASSWORD', 'comp353');
    define('DB_NAME', 'appmo489_hospital');

    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
            or die('Unable to connect to database<br/><br/>' . mysqli_error($con));

    // Retrieves data from the database and returns it in html
    // @query is the query we wish to apply to our database
    // @attributes is an array which holds the attribute names that we seek
    function get_table($query, $attributes) {

        $result = mysqli_query($con, $query) or die('Unable to execute get table query <br/>' . mysqli_error($con));

        $html = '<table>';
        $html .= '<tr>';
        foreach ($attributes as $attr) {
            $html .= "<th class='output h'>$attr</th>"; 
        }
        $html .= '</tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            $html .= '<tr>';
            foreach ($attributes as $attr) {
                $html .= '<td class="output">'.$surgeries[$attr].'</td>'; 
            }
            $html .= '</tr>';
        }
        $html .= '</table>';

        return $html;
    }

    // This inserts the given attributes into the associated table. Must use all attributes of table and not a subset
    // @attributes is an associative array. Key = attribute name, Value = cell value
    // @table is the name of the table we wish to insert into
    function insert($values, $table) {
        $query = "INSERT INTO $table VALUES(";
        for ($i=0; $i<sizeof($values)-1; $i++) {
            $query .= $values[$i] . ', ';
        }
        $query .= $values[sizeof($values)-1] . ')';
        return $query;
        //$result = mysqli_query($con, $query) or die('Unable to execute insert query <br/>' . mysqli_error($con));
    }
?>
