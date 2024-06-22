<?php
    // how to write array 1:

    // $arr = array('hello', 'Monday', '27', '2024');
    // var_dump ($arr);

    // $arr[5] = ' good day';
    // $arr[0] = ' a wonderful day';
    //  echo $arr[0];

    // how to write array 2:

    //   $arr = [
        // 'hello',
        // 'it is monday',
        // '27th',
        // '2024'

    //   ];
    
    //   for($i = 0; $i< count($arr); $i++){
        // echo "<h2>$arr[$i]</h2>";
    //   }


    // $students = [123,4,5,6,7, 'hello'];
    // foreach($students as $student){
        // echo "<h2>$student</h2>";
    // }
    
    // // array , index , variable
    // foreach ($ars as $index => $x) {
    //     echo '<h2>'. $index + 1 . '/ '  . $ars[$index]  .'</h2>';
    // }



    // practice
    $students = [
        ['name' => 'Ratha', 'Age' => 25, 'Major' => 'PHP'],
        ['name' => 'Choub Phearen', 'Age' => 21, 'Major' => 'HTML'],
        ['name' => 'Chettra', 'Age' => 24, 'Major' => 'C++'],
        ['name' => 'Sokkong', 'Age' => 36, 'Major' => 'CSS'],
        ['name' => 'LeapHeng', 'Age' => 18, 'Major' => 'Bootstrap'],
        ['name' => 'Vannak', 'Age' => 27, 'Major' => 'Java'],
        ['name' => 'Boribou', 'Age' => 18, 'Major' => 'HTML'],
    ];
                    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <h2 class ="text-primary  text-center">Student Information </h2>
    <table class ="table table-border table-hover">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Major</th>
        </tr>
    
  
        <?php foreach($students as $student){ ?>
    <tr>
            <td><?php echo $student['name'] ?></td> 
            <td><?php echo $student['Age']?></td>
            <td><?php echo $student['Major']?></td>

        <?php } ?>
    </tr>
    
    
    </table>


    
</body>
</html>




















