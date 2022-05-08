<?php
    include_once "./db-functions.php";
    $functionName = $_POST['functionName'];
    $functionName();
    
    
    function addStudent(){
        $id = $_POST['id'];
        if(empty($id)){
            $name = filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);
            $fatherName = filter_var($_POST['fatherName'],FILTER_SANITIZE_SPECIAL_CHARS);
            $motherName = filter_var($_POST['motherName'],FILTER_SANITIZE_SPECIAL_CHARS);
            $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
            $address = trim($_POST['address']);
            $address = filter_var($address,FILTER_SANITIZE_SPECIAL_CHARS);

            if(empty($name)){
                echo '<div class="alert alert-danger text-white">NAME FIELD IS REQUIRED</div>';
            }
            elseif(empty($fatherName)){
                echo '<div class="alert alert-danger text-white">FATHER\'S NAME FIELD IS REQUIRED</div>';
            }
            elseif(empty($motherName)){
                echo '<div class="alert alert-danger text-white">MOTHER\'S NAME FIELD IS REQUIRED</div>';
            }
            elseif(empty($phone)){
                echo '<div class="alert alert-danger text-white">PHONE FIELD IS REQUIRED</div>';
            }
            elseif(empty($address)){
                echo '<div class="alert alert-danger text-white">ADDRESS FIELD IS REQUIRED</div>';
            }
            else{
                $result = insertStudent($name,$fatherName,$motherName,$phone,$address);
                if($result==1){
                    echo '<div class="alert alert-success text-white">STUDENT ADDED SUCCESSFULLY</div>';
                }
                else{
                    echo '<div class="alert alert-danger text-white">STUDENT CAN NOT BE ADDED</div>';
                }
            }

        }
        else{
            echo '<div class="alert alert-danger text-white">ONLY STUDENT UPDATE AVAILABLE</div>';
        }
    } 
    function viewAllStudents(){
        $result = getAllStudents();
        $sl = 1;
        $table = '<table class="table table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>NAME</th>
                            <th>FATHER\'S NAME</th>
                            <th>MOTHER\'S NAME</th>
                            <th>PHONE</th>
                            <th>ADDRESS</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead><tbody>';
        foreach($result as $data){
            $table.='<tr>
                        <td>'.$sl++.'</td>
                        <td>'.$data["name"].'</td>
                        <td>'.$data["father_name"].'</td>
                        <td>'.$data["mother_name"].'</td>
                        <td>'.$data["phone"].'</td>
                        <td>'.$data["address"].'</td>
                        <td><button class="btn btn-sm btn-warning" onclick="handleEdit('.$data['id'].')">EDIT</button>
                        <button class="btn btn-sm btn-danger" onclick="handleDelete('.$data['id'].')">DELETE</button></td>
                    </tr>';
        }
        $table.='</tbody></table>';
        echo $table;
    }

    function viewStudentDetails(){
        $id = $_POST['id'];
        $result = getStudentDetailsById($id);
        foreach($result as $data){
            $response = array('id'=>$data['id'],'name'=>$data['name'],'father'=>$data['father_name'],'mother'=>$data['mother_name'],'phone'=>$data['phone'],'address'=>$data['address']);
        }
        echo json_encode($response);
    }

    function updateStudent(){
        $id = $_POST['id'];
        if(!empty($id)){
            $name = filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);
            $fatherName = filter_var($_POST['fatherName'],FILTER_SANITIZE_SPECIAL_CHARS);
            $motherName = filter_var($_POST['motherName'],FILTER_SANITIZE_SPECIAL_CHARS);
            $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
            $address = trim($_POST['address']);
            $address = filter_var($address,FILTER_SANITIZE_SPECIAL_CHARS);

            if(empty($name)){
                echo '<div class="alert alert-danger text-white">NAME FIELD IS REQUIRED</div>';
            }
            elseif(empty($fatherName)){
                echo '<div class="alert alert-danger text-white">FATHER\'S NAME FIELD IS REQUIRED</div>';
            }
            elseif(empty($motherName)){
                echo '<div class="alert alert-danger text-white">MOTHER\'S NAME FIELD IS REQUIRED</div>';
            }
            elseif(empty($phone)){
                echo '<div class="alert alert-danger text-white">PHONE FIELD IS REQUIRED</div>';
            }
            elseif(empty($address)){
                echo '<div class="alert alert-danger text-white">ADDRESS FIELD IS REQUIRED</div>';
            }
            else{
                $result = updateStudentByID($id,$name,$fatherName,$motherName,$phone,$address);
                if($result==1){
                    echo '<div class="alert alert-success text-white">STUDENT UPDATED SUCCESSFULLY</div>';
                }
                else{
                    echo '<div class="alert alert-danger text-white">STUDENT CAN NOT BE UPDATED</div>';
                }
            }

        }
        else{
            echo '<div class="alert alert-danger text-white">ONLY STUDENT INSERT AVAILABLE</div>';
        }
    }

    function deleteStudent(){
        $id = $_POST['id'];
        $result = deleteStudentByID($id);
        if($result==1){
                    echo '<div class="alert alert-success text-white">STUDENT DELETED SUCCESSFULLY</div>';
                }
                else{
                    echo '<div class="alert alert-danger text-white">STUDENT CAN NOT BE DELETED</div>';
                }
    }