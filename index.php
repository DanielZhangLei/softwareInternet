<!DOCTYPE html>
<!--
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('student.php');

            $students = array();
            
            /* information of student 1 */
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;

            /* information of student 2 */
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            /* information of student 3 */
            $third = new Student();
            $third->surname = "Zhang";
            $third->first_name = "Daniel";
            $third->add_email('eamil','danielvmaple@gmail.com');
            $third->add_grade(90);
            $students['b789'] = $third;
            
            /* Sorting students with alph a*/
            ksort($students);
            foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>