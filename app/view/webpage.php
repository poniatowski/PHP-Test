<a href="/webpage.">Webpage</a>
<?php

if(isset($_SESSION['alert'])){
    echo $_SESSION['alert'];
    unset($_SESSION['alert']);
}

?>

<form id="people" action="/save/" method="POST" name="form">
    <input type="hidden" name="Language" value="<?php $_token ?>">
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Job Title</th>
        </tr>

        <?php

            $len = count($person['firstname']);
            for ($i=0; $i < $len; $i++) {
                echo '<tr>
                    <td><input type="text" name="firstname['.$i.']" id="firstname['.$i.']" value="'.$person['firstname'][$i].'" /></td>
                    <td><input type="text" name="lastname['.$i.']" id="lastname['.$i.']" value="'.$person['lastname'][$i].'" /></td>
                    <td><input type="text" name="jobtitle['.$i.']" id="jobtitle['.$i.']" value="'.$person['jobtitle'][$i].'" /></td>
                </tr>';
            }

        ?>

    </table>
    <input type="submit" value="  OK  " />
</form>
