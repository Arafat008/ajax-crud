<?php
    $conn = new mysqli("localhost","root","","ajaxphp");

    function insertStudent($name,$fatherName,$motherName,$phone,$address){
        global $conn;
        $sql = "INSERT INTO student(name,father_name,mother_name,phone,address)VALUES('$name','$fatherName','$motherName','$phone','$address')";
        $result = $conn->query($sql);
        if($result){
            return 1;
        }
        else{
            return 0;
        }
    }
    function updateStudentByID($id,$name,$fatherName,$motherName,$phone,$address){
        global $conn;
        $sql = "UPDATE student SET name='$name',father_name='$fatherName',mother_name='$motherName',phone='$phone',address='$address' WHERE id='$id'";
        $result = $conn->query($sql);
        if($result){
            return 1;
        }
        else{
            return 0;
        }
    }
    function deleteStudentByID($id){
        global $conn;
        $sql = "DELETE FROM student WHERE id='$id'";
        $result = $conn->query($sql);
        if($result){
            return 1;
        }
        else{
            return 0;
        }
    }
    function getAllStudents(){
        global $conn;
        $sql = "SELECT * FROM student";
        $result = $conn->query($sql);
        return $result;
    }
    function getStudentDetailsById($id){
        global $conn;
        $sql = "SELECT * FROM student WHERE id='$id'";
        $result = $conn->query($sql);
        return $result;
    }