<?php
/* think tank forums
 *
 * include_footer.php
 */

echo <<<EOF
            <br style="clear: both;" />
        </div>
    </body>
</html>

EOF;

$time_end = microtime(true);
$time = $time_end - $time_start;

echo <<<EOF
<!-- page generated in $time seconds
     by think tank forums {$ttf_cfg["version"]}
     visit https://github.com/foreverlarz/thinktankforums -->

EOF;

