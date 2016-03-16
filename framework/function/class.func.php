<?php 
header('content-type:text/html;charset=utf-8');
function get_tree_ul($data, $fid) {
    $stack = array($fid);
    $child = array();
    $added_left = array();
    $added_right= array();
    $html_left     = array();
    $html_right    = array();
    $obj = array();
    $loop = 0;
    foreach($data as $node) {
        $pid = $node['pid'];
        if(!isset($child[$pid])) {
            $child[$pid] = array();
        }
        array_push($child[$pid], $node['id']);
        $obj[$node['id']] = $node;
    }

    while (count($stack) > 0) {    
        $id = $stack[0];
        $flag = false;
        $node = isset($obj[$id]) ? $obj[$id] : null;
        if (isset($child[$id])) {
            $cids = $child[$id];
            $length = count($cids);
            for($i = $length - 1; $i >= 0; $i--) {
                array_unshift($stack, $cids[$i]);
            }
            $obj[$cids[$length - 1]]['isLastChild'] = true;
            $obj[$cids[0]]['isFirstChild'] = true;
            $flag = true;
        }
        if ($id != $fid && $node && !isset($added_left[$id])) {
            if(isset($node['isFirstChild']) && isset($node['isLastChild']))  {
                $html_left[] = '<li class="first-child last-child">';
            } else if(isset($node['isFirstChild'])) {
                $html_left[] = '<li class="first-child">';
            } else if(isset($node['isLastChild'])) {
                $html_left[] = '<li class="last-child">';
            } else {
                $html_left[] = '<li>';
            }            
            $html_left[] = ($flag === true) ? "<div>{$node['name']}</div><ul>" : "<div>{$node['name']}</div>";
            $added_left[$id] = true;
        }    
        if ($id != $fid && $node && !isset($added_right[$id])) {
            $html_right[] = ($flag === true) ? '</ul></li>' : '</li>';
            $added_right[$id] = true;
        }

        if ($flag == false) {
            if($node) {
                $cids = $child[$node['pid']];
                for ($i = count($cids) - 1; $i >= 0; $i--) {
                    if ($cids[$i] == $id) {
                        array_splice($child[$node['pid']], $i, 1);
                        break;
                    }
                } 
                if(count($child[$node['pid']]) == 0) {
                    $child[$node['pid']] = null;
                }
            }
            array_push($html_left, array_pop($html_right));
            array_shift($stack);
        }
        $loop++;
        if($loop > 5000) return $html_left;
    }
    unset($child);
    unset($obj);
    return implode('', $html_left);
}

?>