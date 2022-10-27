<?php
    function birthCount($birthDate){
        $date2 = DateTime::createFromFormat('d-m-Y', $birthDate); // Преобразовываем дату в необходимый формат
        $date1 = new DateTime(); // Сейчаc
        $byear = $date1->format('o');
        $bmonth = $date2->format('m');
        $bday = $date2->format('d');
        $date2 = DateTime::createFromFormat('d-m-Y', $bday."-".$bmonth."-".$byear);
        $dayDiff = $date2->diff($date1)->format('%a');
        if($bmonth<=($date1->format("m"))) {
            return (($date2->format('L')==0)?365:366) - $dayDiff;
        }
        return $dayDiff;
    }
?>