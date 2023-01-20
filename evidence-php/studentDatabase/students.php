

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Database</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20" style="padding: 50px; background-color: #fcf4e8; border-radius: 5px; margin-top: 20px; height: 90vh">
                <h1 class="color-primary" style="text-align: center">Students Database</h1>
            <form method="POST">
                <input type="text" placeholder="Enter Student id number" id="studentId" name="studentId">
                <input class="button-primary" type="submit" name="submit" value="Submit">
            </form>

            <table>
  <thead>
    <tr>
      <th>Student ID</th>
      <th>Name</th>
      <th>Batch</th>
    </tr>
  </thead>
  <tbody>
  <?php 

class Student{
    public $id;
    public $name;
    public $batch;

    function __construct($id,$name,$batch){
            $this->id = $id;
            $this->name = $name;
            $this->batch = $batch;
    }

    public function result($id){

        $students = file('students.txt');
        $findStd = false;

        foreach($students as $student){
            $data = explode(',', $student);

            if($data[0] == $id){

                $findStd = false;

                
                    echo '<tr>';
                    echo '<td>' . $data[0] . '</td>';
                    echo '<td>' . $data[1] . '</td>';
                    echo '<td>' . $data[2] . '</td>';
                    echo '</tr>';
                
                break;
            }else{
                $findStd = true;
            }
            
        }

        if($findStd){
            echo "Id $id didn't Found in students File!";
        }

    }
    
}

if(isset($_POST['submit'])){

    $studentId = $_POST['studentId'];

    $student = new Student(101,"Md Karim",45);

    $student->result($studentId);

}


?>
  </tbody>
</table>
            </div>
        </div>
    </div>
</body>
</html>