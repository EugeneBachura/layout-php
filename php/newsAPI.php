<?php
function get9News($db)
{
    $sql = "SELECT a.*
    FROM news.posts AS a
    JOIN (SELECT DISTINCT Date
          FROM news.posts) AS b
    ON a.Date = b.Date
    ORDER BY date
    LIMIT 9";
	$result = array();
    
    $stmt = $db->query($sql);
    $stmt->execute(); 

    $result = $stmt->fetchAll();

    return $result;
};
?>