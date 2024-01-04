<?php get_header();?>

    <div class="container">
        <div class="row">
            <?php
            echo "<h2> TEST ON PHP</h2>";
            echo "Hello world! <br>";
            ?>
        </div>
        <br>
        <div class="column">
            <?php
            $Users = array("Amelia", "Jane", "Joe", "Brian");
            foreach ($Users as $member) {
                echo "<li>$member</li>";
                if ($member == "Amelia") {
                    echo "This is the owner of the website";
                } else {
                    echo "This is other members";
                }
            } ?>
        </div>
    </div>

<?php get_footer();?>