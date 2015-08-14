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
        global $con;
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
                $html .= '<td class="output">'.$row[$attr].'</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';

        return $html;
    }

    // Same as get_table but with delete button
    function get_table_w_del($query, $attributes) {
        global $con;
        $result = mysqli_query($con, $query) or die('Unable to execute get table query <br/>' . mysqli_error($con));

        $html = '<table>';
        $html .= '<tr>';
        foreach ($attributes as $attr) {
            $html .= "<th class='output h'>$attr</th>";
        }
        $html .= '<th class="output h"></th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row[$attributes[0]];
            $html .= '<tr>';
            foreach ($attributes as $attr) {
                $html .= '<td class="output">'.$row[$attr].'</td>';
            }
            $html .= '<td style="background-color:lightgrey" class="output">
                        <a class="del" href="'.$_SERVER['PHP_SELF'].'?del='.$id.'">Del</a>
                        </td>';
            $html .= '</tr>';
        }
        $html .= '</table>';

        return $html;
    }
