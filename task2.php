<?php
    function birthCount($birthDate){
        $date2 = DateTime::createFromFormat('d-m-Y', $birthDate); // Преобразовываем дату в необходимый формат
        $date1 = new DateTime(); // Сейчаc
        $dayDiff = $date2->diff($date1)->format('%a');
        return $dayDiff;
    }
    echo birthCount('10-11-2022');
?>