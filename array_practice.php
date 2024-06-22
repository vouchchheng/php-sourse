<?php
    // how to declare array 1:

    // $arrs = array(
        // 'seavming',
        // '20',
        // 'second year',
        // 'computer science'
    // ) ;
    // var_dump ($arrs);

    // How to declare array 2:

    // $arrs = [
        // 'Vouchchheng',
        // 'female',
        // 'second year',
        // 'software engineering'
    // ];

    // var_dump ($arrs);

    // --------------------------------------

    // method count 
    // echo count($arrs); 

    // Multidime
     $persons = [
        'personal' => [
            'name' => 'vouchchheng',
            'age' => '20',
            'gender' => 'female'
        ],
        'experience' => [
            'python',
            'c++',
            'PHP',
            'javascipt'
        ]
    ];
    // foreach ($person as $key => $value) {
        // # code...
        // echo "<h2>$value</h2>";
        // var_dump($value);
    // }


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
        <h2 class="text-primary" >Person Information</h2>
        <table class="table table-border table-hover">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
        <tr>

        <?php foreach ($persons['personal'] as $key => $person) { ?>
        
            
                <td><?php echo $person ?></td>
        <?php } ?>
        </tr>
        </table>

        <h2 class = "text-success">Experience</h2>
            <ul>
                <?php foreach($persons['experience'] as $va){ ?>
                    <li><?php echo $va ?></li>

                <?php } ?>
                
                
            </ul>

    
    
    
    
    
    
    
        
       
        






        
    </body>
    </html>

