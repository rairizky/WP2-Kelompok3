<?php
    function check_header($expect) {
        if (url_is($expect)) {
            return 'open';
        }
    }

    function check_child($expect) {
        if (url_is($expect)) {
            return 'active';
        }
    }

    function check_single($expect) {
        if (url_is($expect)) {
            return 'active-single';
        }
    }
?>