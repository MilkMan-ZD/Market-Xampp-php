<?php
function seacrch_by_id($array, $id)
{
    foreach ($array as $val) {
        if ($val['id'] == $id) {
            return $val;
        }
    }
    return -1;
}
