<?php

function calDemo($month) {
    $days = $month['days'];
    $numberWeeks = count($days) / 7;
    echo '<table>';
    echo "<caption>";
    echo "<a href='#'> < </a>";
    echo "{$month['mth-str-abrev']} {$month['yr']}";
    echo "<a href='#'> > </a>";
    echo "</caption>";
    echo '<tr><td>M</td><td>T</td><td>W</td><td>T</td><td>F</td>
      <td>S</td><td>S</td></tr>';
  
    echo '<tr>';
    for($i = 0; $i < 7; $i++){
      echo "<td class='{$days[$i]['prev-curr-nxt']}'>{$days[$i]['day']}</td>";
    }
    echo '</tr>';

    echo '<tr>';
    for($i = 7; $i < 14; $i++){
      echo "<td class='{$days[$i]['prev-curr-nxt']}'>{$days[$i]['day']}</td>";
    }
    echo '</tr>';

    echo '<tr>';
    for($i = 14; $i < 21; $i++){
      echo "<td class='{$days[$i]['prev-curr-nxt']}'>{$days[$i]['day']}</td>";
    }
    echo '</tr>';

    echo '<tr>';
    for($i = 21; $i < 28; $i++){
      echo "<td class='{$days[$i]['prev-curr-nxt']}'>{$days[$i]['day']}</td>";
    }
    echo '</tr>';

    if($numberWeeks > 4) {
      echo '<tr>';
      for($i = 28; $i < 35; $i++){
        echo "<td class='{$days[$i]['prev-curr-nxt']}'>{$days[$i]['day']}</td>";
      }
      echo '</tr>';
    }

    if($numberWeeks > 5) {
      echo '<tr>';
      for($i = 35; $i < count($days); $i++){
        echo "<td class='{$days[$i]['prev-curr-nxt']}'>{$days[$i]['day']}</td>";
      }
      echo '</tr>';
    }

    echo '</table>';
  }
